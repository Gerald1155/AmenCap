<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use Kevinrob\GuzzleCache\CacheMiddleware;
use Kevinrob\GuzzleCache\Storage\Psr6CacheStorage;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Kevinrob\GuzzleCache\Strategy\PrivateCacheStrategy;
use Kevinrob\GuzzleCache\Strategy\GreedyCacheStrategy;
use App\Models\Asset;
use App\Models\ProfitLoss;
use App\Models\Balence;
use App\Models\StableCoin;
class PricesController extends Controller
{   
    public function __construct()
    {
        $this->middleware("role:super");
    }

    public function test()
    {
        $array = [];
        $token = $this->getCryptoCurrencyInformation("ethereum");
        $i = 1;
        while ($i < 289) {
            $item = $token->chart[$i][1];
            $convert = gmdate("h A", $token->chart[$i][0]);
            array_push($array,$convert);
            $i+=12;
        }
        return $array;
    }

    public function balence_of_24_hour(Request $request)
    {
        if ($request->ajax()) {
            Balence::where("time_line","hour")->delete();
            $spend_holdings = $this->spent_holdings();
            $stable_coin_profit = $this->stable_coin_profit();

            $hours = [];
            $token = $this->getCryptoCurrencyInformation("ethereum");
            $t = 0;
            while ($t < 289) {
                $item = $token->chart[$t][0];
                $convert = gmdate("h A", $item);
                array_push($hours,$convert);
                $t+=12;
            }
            $i = 0;
            while ($i < 24) {
                $profit_loss = ProfitLoss::where("time",$hours[$i])->get();
                $calculate_profit = $this->profit_calculate($profit_loss);
                $before = $calculate_profit += $stable_coin_profit;
                $total = $before + $spend_holdings;
                $percentage = $before / $spend_holdings;
                $new_balence = new Balence();
                $new_balence->time = $hours[$i];
                $new_balence->balence = $total;
                $new_balence->time_line = "hour";
                $new_balence->balence_percentage = $percentage;
                $new_balence->save();
                $i++;
            }
            return response()->json(["status"=>200,"message"=>"Balance and Chart Updated Successfully for 24 hour."]);

        }
        else
        {
            return abort(404);
        }

    }

    public function profit_calculate($profit_loss)
    {
        $total = 0;
        foreach ($profit_loss as $value) {
            $total+=$value->profit_loss_number;
        }
        return $total;
    }

    private function stable_coin_profit()
    {
        $coins = StableCoin::orderBy("created_at","DESC")->get();
        $total_profit_loss_coins = 0;
        foreach ($coins as $coin) {
            $total_profit_loss_coins+=$coin->profit_loss_number;
        }
        return $total_profit_loss_coins;
    }

    private function start()
    {
        $assets = Asset::orderBy("created_at","DESC")->get();
        $coins = StableCoin::orderBy("created_at","DESC")->get();
        $total_amount_spent = 0;
        $total_holdings = 0;
        foreach ($assets as $asset) {
            $total_amount_spent+=$asset->amount_spent;
        }
        foreach ($coins as $coin) {
            $total_holdings+=$coin->total_holdings;
        }
        return $total_amount_spent + $total_holdings;
    }

    private function spent_holdings()
    {
        $assets = Asset::orderBy("created_at","DESC")->get();
        $coins = StableCoin::orderBy("created_at","DESC")->get();
        $total_amount_spent = 0;
        $total_holdings = 0;
        foreach ($assets as $asset) {
            $total_amount_spent+=$asset->amount_spent;
        }
        foreach ($coins as $coin) {
            $total_holdings+=$coin->total_holdings;
        }
        //total amount spent + total holdings of stable coins so spend holdings now is equal = sum of assets + 0
        return $total_amount_spent + $total_holdings;
    }

    public function update_profit_loss_24hour(Request $request)
    {       
        if ($request->ajax()) {
            ProfitLoss::where("time_line","hour")->delete();
            $assets = Asset::orderBy("created_at","ASC")->get();
            foreach ($assets as $asset) {
                $i = 0;
                //this is should getting from the gecko and make an arry of prices in the dates that we want and add them
                $token = $this->getCryptoCurrencyInformation($asset->token);
                while ($i < 289) {
                    //all assets from that hour for example hour 1 - sum of all of it + total = cuurebt balance of that hour  
                    $profit_loss = new ProfitLoss();
                    $profit_loss->time = gmdate("h A", $token->chart[$i][0]);
                    $profit_loss->time_line = "hour";
                    $profit_loss->token = $asset->token;
                    $profit_loss->profit_loss_number = ($token->chart[$i][1] * $asset->holdings) - $asset->amount_spent;
                    $profit_loss->save();
                    $i+=12;
                }
            }
            return  response()->json(["status"=>200,"message"=>"Profit Loss Updated Successfully . Now you can update the balance and chart for 24 Hour."]);
        }
        else
        {
            return abort(404);
        }
    }



    private function getCryptoCurrencyInformation($currencyId, $convertCurrency = "USD"){
        // Create a new Guzzle Plain Client
        $client = $this->getGuzzleFileCachedClient();

        // Define the Request URL of the API with the providen parameters
        $requestURL = "https://api.coinstats.app/public/v1/charts?period=24h&coinId=".$currencyId;

        // Execute the request
        $singleCurrencyRequest = $client->request('GET', $requestURL);
        
        // Obtain the body into an array format.
        $body = json_decode($singleCurrencyRequest->getBody());

        // If there were some error on the request, throw the exception
        if(array_key_exists("error" , $body)){
            throw $this->createNotFoundException(sprintf('Currency Information Request Error: $s', $body["error"]));
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


}
