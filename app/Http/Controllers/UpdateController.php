<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StableCoin;
use App\Models\NonStableCoin;
use App\Models\NonStableCoinStakingEarnings;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use Kevinrob\GuzzleCache\CacheMiddleware;
use Kevinrob\GuzzleCache\Storage\Psr6CacheStorage;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Kevinrob\GuzzleCache\Strategy\PrivateCacheStrategy;
use Kevinrob\GuzzleCache\Strategy\GreedyCacheStrategy;
use App\Models\Portfolio_Value;
use App\Models\USD;
class UpdateController extends Controller
{
    
    public function update()
    {
        $this->update_non_stable_coins();
        $this->update_stable_coins();
        $this->update_staking_earnings();
        $this->update_values();
        return response()->json(["status"=>200,"message"=>"Data Updated Successfully."]);
    }

    public function update_non_stable_coins()
{
        $coins = NonStableCoin::all();
        foreach ($coins as $coin) {
            $token = $this->getCryptoCurrencyInformation($coin->token);
            $this->update_coin("NonStableCoin",$coin->id,$token->price);
        }
    }

    public function update_stable_coins()
    {
        $coins = StableCoin::all();
        foreach ($coins as $coin) {
            $token = $this->getCryptoCurrencyInformation($coin->token);
            $this->update_coin("StableCoin",$coin->id,$token->price);
        }
    }

    public function update_staking_earnings()
    {
        $coins = NonStableCoinStakingEarnings::all();
        foreach ($coins as $coin) {
            $token = $this->getCryptoCurrencyInformation($coin->token);
            $coin = NonStableCoinStakingEarnings::findorfail($coin->id);
            $coin->value = $coin->amount_earned * $token->price;
            $coin->save();
        }
    }

    public function update_coin($model,$id,$token_price)
    {
     $newModel = "App\\Models\\".$model;
     $coin = $newModel::where("id",$id)->first();  
     $coin->total_value = $coin->holdings * $token_price;
     $coin->profit_loss_number = ($coin->holdings * $token_price) - $coin->amount_spent;
     $portfolio_value = Portfolio_Value::where("name","portfolio")->first(); 
     $coin->total_precentage_of_portfolio = ($coin->total_value / $portfolio_value->portfolio_value) * 100;
     $coin->save();
    }

    private function getCryptoCurrencyInformation($currencyId, $convertCurrency = "USD"){
        // Create a new Guzzle Plain Client
        $client = $this->getGuzzleFileCachedClient();

        // Define the Request URL of the API with the providen parameters
        $requestURL = "https://api.coinstats.app/public/v1/coins/".$currencyId."?currency=USD";

        // Execute the request
        $singleCurrencyRequest = $client->request('GET', $requestURL);
        
        // Obtain the body into an array format.
        $body = json_decode($singleCurrencyRequest->getBody())->coin;
        $arr = (array) $body;
        // If there were some error on the request, throw the exception
        if(array_key_exists("error" , $arr)){
            return back()->with(["errors"=>array($body["error"])]);
            // throw $this->createNotFoundException(sprintf('Currency Information Request Error: $s', $body["error"]));
        }

        // Returns the array with information about the desired currency
        return $body;
    }


    private function getGuzzleFileCachedClient()
    {
      // Create a HandlerStack
      $stack = HandlerStack::create();

      // 10 minutes to keep the cache
      $TTL = 600;

      // Retrieve the cache folder path of your Laravel Project
      $cacheFolderPath = base_path() . "/bootstrap";
      
      // Instantiate the cache storage: a PSR-6 file system cache with 
      // a default lifetime of 10 minutes (600 seconds).
      $cache_storage = new Psr6CacheStorage(
          new FilesystemAdapter(
              // Create Folder GuzzleFileCache inside the providen cache folder path
              'GuzzleFileCache',
              $TTL, 
              $cacheFolderPath
          )
      );

      $stack->push(
        new CacheMiddleware(
            new GreedyCacheStrategy(
                $cache_storage,
                600
            )
        ),
        "greedy-cache"
        
      );

      return new Client(['handler' => $stack]);

    }


    public function update_values()
    {   
        $beginning_value = 2354889;

        $NsCoinSpent = $this->NsCoin_AmountSpent();

        $NsCoinCurrentValues = $this->NsCoin_CurrentValues();

        $NsChange = $NsCoinCurrentValues-$NsCoinSpent;

        $Scoin_PurchasedAmount = $this->Scoin_PurchasedAmount();

        $Scoin_CurrentValues = $this->Scoin_CurrentValues();

        $Scoin_change = $Scoin_CurrentValues-$Scoin_PurchasedAmount;
        
        //staking earning - SE
        
        $Se_CurrentValues = $this->Se_CurrentValues();
        
        $Se_Change = $Se_CurrentValues - 0;

        
        $USD = Usd::where("name","usd")->first()->number;
        $Transaction_Fees = Usd::where("name","transaction fees")->first()->number;
        $Transfer_fees = Usd::where("name","transfer fees")->first()->number;
        $BankWire_Fees = Usd::where("name","bank wire fees")->first()->number;

        $first_column = $this->sum1($NsCoinSpent,$Scoin_PurchasedAmount,$USD,$Transaction_Fees,$Transfer_fees,$BankWire_Fees);
        $current_value = $this->sum2($NsCoinCurrentValues,$Scoin_CurrentValues,$Se_CurrentValues,$USD);
        
        $profit_loss_number = $current_value - $first_column;
        
        $profit_loss_percentage = ($profit_loss_number / $beginning_value) * 100;

        $carbon = \Carbon\Carbon::now();
        $today = $carbon->format("d/m/Y");
        $this->update_portfolio($current_value);
        $this->update_profit_loss_percentage($profit_loss_percentage);
        $this->update_profit_loss_number($profit_loss_number);
    }

    public function update_portfolio($portfolio)
    {
        $value = Portfolio_Value::where("name","portfolio")->first();
        $value->portfolio_value = $portfolio;
        $value->save();
    }
    public function update_profit_loss_percentage($portfolio)
    {
        $value = Portfolio_Value::where("name","profit_loss_percentage")->first();
        $value->portfolio_value = $portfolio;
        $value->save();
    }
    public function update_profit_loss_number($portfolio)
    {
        $value = Portfolio_Value::where("name","profit_loss_number")->first();
        $value->portfolio_value = $portfolio;
        $value->save();
    }

    public function sum2($v1,$v2,$v3,$v4)
    {
        return $v1+$v2+$v3+$v4;
    }

    public function sum1($v1,$v2,$v3,$v4,$v5,$v6)
    {
        return $v1+$v2+$v3+$v4+$v5+$v6;
    }

    public function Se_CurrentValues()
    {
        $staking_earnings = NonStableCoinStakingEarnings::orderBy("created_at","DESC")->get();
        $total = 0;
        foreach ($staking_earnings as $stake) {
            $total+=$stake->value;
        }
        return $total;
    }

    public function Scoin_CurrentValues()
    {
        $stable_coins = StableCoin::orderBy("created_at","DESC")->get();
        $total = 0;
        foreach ($stable_coins as $coin) {
            $total+=$coin->total_value;
        }
        return $total;
    }

    public function Scoin_PurchasedAmount()
    {
        $stable_coins = StableCoin::orderBy("created_at","DESC")->get();
        $total = 0;
        foreach ($stable_coins as $coin) {
            $total+=$coin->purchased_amount;
        }
        return $total;
    }

    public function NsCoin_CurrentValues()
    {
        $non_stable_coins = NonStableCoin::orderBy("created_at","DESC")->get();
        $total = 0;
        foreach ($non_stable_coins as $coin) {
            $total+=$coin->total_value;
        }
        return $total;
    }

    public function NsCoin_AmountSpent()
    {
        $non_stable_coins = NonStableCoin::orderBy("created_at","DESC")->get();
        $total = 0;
        foreach ($non_stable_coins as $coin) {
            $total+=$coin->amount_spent;
        }
        return $total;
    }


}
