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
use App\Models\Balence;
use App\Models\Sell;
use App\Models\MultiAsset;
use App\Models\NonStableCoin;
use App\Models\StableCoin;
use App\Models\Portfolio_Value;
use Artesaos\SEOTools\Facades\SEOTools;

class PortfolioController extends Controller
{
   
    public function __construct()
    {
        $this->middleware("auth");
    }
    public function index()
    {
         $ourprices = array();
         $ouricons = array();
         
         $other = $this->sum_of_other();
         $non_stable_coins = NonStableCoin::orderBy("created_at","ASC")->where("total_precentage_of_portfolio",'>',1)->get();
         $stable_coins = StableCoin::orderBy("created_at","ASC")->take(2)->get();
         $non_stable_coins_table =  NonStableCoin::orderBy("created_at","ASC")->get();
         foreach ($non_stable_coins_table as $coin) {
             $token = $this->getCryptoCurrencyInformation($coin->token);
             array_push($ourprices,$token->price);
             array_push($ouricons,$token->icon);
            //  $this->change_profit_loss($token->price,$coin);
          }
          //   $balence = Balence::orderBy("created_at","ASC")->where("time_line","hour")->get();

          $profit_loss_number = Portfolio_Value::where("name","profit_loss_number")->first()->portfolio_value;
          $current_value = Portfolio_Value::where("name","portfolio")->first()->portfolio_value;
          $profit_loss_percentage = Portfolio_Value::where("name","profit_loss_percentage")->first()->portfolio_value;
          $beginning_value = 2354889;
          $portfolio_interest = (auth()->user()->balence / $beginning_value) * 100;
         
          $profit_loss_percentage2 = $profit_loss_number / $beginning_value;
          $portfolio_value = auth()->user()->balence*$profit_loss_percentage2;

          $carbon = \Carbon\Carbon::now();
          $today = $carbon->format("d/m/Y");


          SEOTools::settitle("Our Portfolio");
          return view("portfolio",compact("non_stable_coins","ourprices","ouricons","stable_coins","non_stable_coins_table","other","today","profit_loss_number","profit_loss_percentage","portfolio_interest","portfolio_value","current_value"));
    } 

    public function sum_of_other()
    {
         $non_stable_coins_other = NonStableCoin::orderBy("created_at","ASC")->where("total_precentage_of_portfolio",'<',1)->get();
         $other = 0;
         foreach ($non_stable_coins_other as $i => $coin) {
            $other+=$coin->total_precentage_of_portfolio;
         }
         return $other;
    }


    public function portfolio_month()
    {
        $ourprices = array();
        $ouricons = array();
        $Multiourprices = array();
        $Multiouricons = array();
        $assets = Asset::orderBy("created_at","ASC")->get();
        foreach ($assets as $asset) {
            $token = $this->getCryptoCurrencyInformation($asset->token);
            array_push($ourprices,$token->price);
            array_push($ouricons,$token->icon);
            $this->change_profit_loss($token->price,$asset);
         }
         $multiassets = MultiAsset::orderBy("created_at","ASC")->get();
         foreach ($multiassets as $asset) {
               $token = $this->getCryptoCurrencyInformation($asset->token);
               array_push($Multiourprices,$token->price);
               array_push($Multiouricons,$token->icon);
          }
        $month_balence = Balence::where("time_line","month")->get();
        return view("portfolio.portfolio_month",compact("month_balence","assets","ouricons","ourprices","Multiouricons","Multiourprices","multiassets"));
    }

    public function portfolio_3month()
    {
        $ourprices = array();
        $ouricons = array();
        $Multiourprices = array();
        $Multiouricons = array();
        $assets = Asset::orderBy("created_at","ASC")->get();
        foreach ($assets as $asset) {
            $token = $this->getCryptoCurrencyInformation($asset->token);
            array_push($ourprices,$token->price);
            array_push($ouricons,$token->icon);
            $this->change_profit_loss($token->price,$asset);
         }
         $multiassets = MultiAsset::orderBy("created_at","ASC")->get();
         foreach ($multiassets as $asset) {
               $token = $this->getCryptoCurrencyInformation($asset->token);
               array_push($Multiourprices,$token->price);
               array_push($Multiouricons,$token->icon);
          }
        $month_balence = Balence::where("time_line","3month")->get();
        return view("portfolio.portfolio_3month",compact("month_balence","assets","ouricons","ourprices","Multiouricons","Multiourprices","multiassets"));
    }

    public function portfolio_week()
    {
        $ourprices = array();
        $ouricons = array();
        $Multiourprices = array();
        $Multiouricons = array();
        $assets = Asset::orderBy("created_at","ASC")->get();
        foreach ($assets as $asset) {
            $token = $this->getCryptoCurrencyInformation($asset->token);
            array_push($ourprices,$token->price);
            array_push($ouricons,$token->icon);
            $this->change_profit_loss($token->price,$asset);
         }
         $multiassets = MultiAsset::orderBy("created_at","ASC")->get();
         foreach ($multiassets as $asset) {
            $token = $this->getCryptoCurrencyInformation($asset->token);
            array_push($Multiourprices,$token->price);
            array_push($Multiouricons,$token->icon);
         }
        $week_balence = Balence::where("time_line","week")->get();
        return view("portfolio.portfolio_week",compact("week_balence","assets","ouricons","ourprices","Multiouricons","Multiourprices","multiassets"));
    }

    public function portfolio_year()
    {
        $ourprices = array();
        $ouricons = array();
        $Multiourprices = array();
        $Multiouricons = array();
        $assets = Asset::orderBy("created_at","ASC")->get();
        foreach ($assets as $asset) {
            $token = $this->getCryptoCurrencyInformation($asset->token);
            array_push($ourprices,$token->price);
            array_push($ouricons,$token->icon);
            $this->change_profit_loss($token->price,$asset);
         }
         $multiassets = MultiAsset::orderBy("created_at","ASC")->get();
         foreach ($multiassets as $asset) {
            $token = $this->getCryptoCurrencyInformation($asset->token);
            array_push($Multiourprices,$token->price);
            array_push($Multiouricons,$token->icon);
         }
        $year_balence = Balence::where("time_line","year")->get();
        return view("portfolio.portfolio_year",compact("year_balence","assets","ouricons","ourprices","Multiouricons","Multiourprices","multiassets"));
    }


    public function change_profit_loss($current_price,$coin)
    {
        $ASSET = NonStableCoin::findorfail($coin->id);
        //profit or loss = (Current price * Holdings) - amount spent
        $ASSET->profit_loss_number = ($current_price * $coin->holdings) - $coin->amount_spent ;
        //profit loss prentage = profit loss number = ($current_price * $asset->holdings) - $asset->amount_usd / asset amount usd
        $ASSET->total_value = $ASSET->holdings * $current_price;
        $ASSET->save();
    }
    
    public function sold_assets()
    {
        $sold = Sell::orderBy("created_at","ASC")->get();
        return view("sold.index",compact("sold"));
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



