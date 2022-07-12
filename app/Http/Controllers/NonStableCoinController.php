<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NonStableCoin;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use Kevinrob\GuzzleCache\CacheMiddleware;
use Kevinrob\GuzzleCache\Storage\Psr6CacheStorage;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Kevinrob\GuzzleCache\Strategy\PrivateCacheStrategy;
use Kevinrob\GuzzleCache\Strategy\GreedyCacheStrategy;
use Illuminate\Support\Facades\Validator;
use Codenixsv\CoinGeckoApi\CoinGeckoClient;
use App\Models\USD;
class NonStableCoinController extends Controller
{
    
    public function __construct()
    {
        $this->middleware("role:super");
    }
 
    public function index()
    {

        $coins = NonStableCoin::orderBy("created_at","DESC")->get();
        return view("admin.non-stable.index",compact("coins"));
    }

    public function create()
    {
        return view("admin.non-stable.create");
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(),[
            "token"=>"required",
            "avg_buy_price"=>"required",
            "purchased_amount"=>"required",
            "holdings"=>"required",
            "amount_spent"=>"required"
        ]);
        if ($validation->passes()) {
            $token = $this->getCryptoCurrencyInformation($request->token);
            $coin = New NonStableCoin();
            $coin->token = $request->token;
            $coin->ticker = $token->symbol;
            $coin->avg_buy_price = $request->avg_buy_price;
            $coin->purchased_amount = $request->purchased_amount;
            $coin->holdings = $request->holdings;
            $coin->amount_spent = $request->amount_spent;
            $coin->total_value = $coin->holdings * $token->price;
            $coin->profit_loss_number = ($coin->holdings * $token->price) - $coin->amount_spent;
            $coin->profit_loss_precentage = ($coin->profit_loss_number / $coin->amount_spent) * 100;
            $coin->temp_amount_spent = $request->amount_spent;
            $coin->save();


            $total_usd = USD::where("name","usd")->first();
            $total_usd->number = $total_usd->number - $coin->amount_spent ;
            $total_usd->save();

            return Redirect(route("nonstable.index"));
        }
        else
        {
            return back()->with(["errors"=>$validation->errors()->all()]);
        }
    }

    
    public function show($id)
    {
        $coin = NonStableCoin::findorfail($id);
        return view("admin.non-stable.show",compact("coin"));
    }

    public function edit($id)
    {
        $coin = NonStableCoin::findorfail($id);
        return view("admin.non-stable.edit",compact("coin"));
    }


    public function update(Request $request, $id)
    {
        NonStableCoin::findorfail($id);
        $validation = Validator::make($request->all(),[
            "token"=>"required",
            "avg_buy_price"=>"required",
            "purchased_amount"=>"required",
            "holdings"=>"required",
            "amount_spent"=>"required"
        ]);
        if ($validation->passes()) {
            $token = $this->getCryptoCurrencyInformation($request->token);

            $coin = NonStableCoin::find($id);
            $coin->token = $request->token;
            $coin->ticker = $token->symbol;
            $coin->avg_buy_price = $request->avg_buy_price;
            $coin->purchased_amount = $request->purchased_amount;
            $coin->holdings = $request->holdings;
            $coin->amount_spent = $request->amount_spent;
            $coin->total_value = $coin->holdings * $token->price;
            $coin->profit_loss_number = ($coin->holdings * $token->price) - $coin->amount_spent;
            $coin->profit_loss_precentage = ($coin->profit_loss_number / $coin->amount_spent) * 100;
            $coin->temp_wamount_spent = $request->amount_spent;
            $coin->save();

            $total_usd = USD::where("name","usd")->first();
            $temp_usd = $total_usd->number + $coin->temp_amount_spent ;
            $total_usd = $temp_usd - $coin->amount_spent;
            $total_usd->save();
            
            return Redirect(route("nonstable.show",$id));

        }
        else
        {
            return back()->with(["errors"=>$validation->errors()->all()]);
        }
    }

    public function destroy($id)
    {
        $coin = NonStableCoin::findorfail($id);
        $coin->delete();
        return Redirect(route("nonstable.index"));
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
