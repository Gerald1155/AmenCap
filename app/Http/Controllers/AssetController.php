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
use App\Models\Sell;
use Illuminate\Support\Facades\Validator;
use App\Models\MultiAsset;
class AssetController extends Controller
{

    public function __construct()
    {
        $this->middleware("role:super");
    }
    
    public function index()
    {
        $assets = Asset::orderBy("created_at",'DESC')->get();
        return view("admin.asset.index",compact("assets"));
    }

   
    public function create()
    {
        return view("admin.asset.create");   
    }

   
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(),[
            "token"=>"required",
            "ticker"=>"required",
            "buy_date"=>"required",
            "buy_price"=>"required",
            "purchased_amount"=>"required",
            "amount_acquired"=>"required",
            "exchange"=>"required"
        ]);

        if ($validation->passes()) {

            $token = $this->getCryptoCurrencyInformation($request->token);
            $asset = new Asset();
            $asset->token = $request->token; 
            $asset->ticker = $request->ticker; 
            $asset->buy_date = $request->buy_date;
            $asset->buy_price = $request->buy_price;
            $asset->exchange = $request->exchange;
            $asset->sold_asset = $request->sold_asset;
            $asset->purchased_amount = $request->purchased_amount;
            $asset->amount_acquired = $request->amount_acquired;
            $asset->amount_spent = $asset->buy_price * $asset->purchased_amount;
            $asset->profit_loss_number = ($token->price * $asset->amount_acquired) - $asset->amount_spent;
            $percentage = $asset->profit_loss_number / $asset->amount_spent;
            $asset->profit_loss_percentage =  $percentage * 100;
            $asset->current_value_usd = $token->price * $asset->amount_acquired;
            $asset->save();   
            
            $assets = Asset::where("token",$asset->token)->get();
            if (count($assets) > 1) {
                $last = Asset::where("token",$asset->token)->orderBy("created_at","DESC")->first();
                MultiAsset::where("token",$asset->token)->delete();
                $new_asset = new MultiAsset();
                $new_asset->token = $last->token;
                $new_asset->ticker = $last->ticker;
                $new_asset->buy_date = $last->buy_date;
                $avg_buy_price = 0;
                foreach ($assets as $item) {
                    $new_asset->holdings += $item->amount_acquired;   
                    $new_asset->amount_spent += $item->amount_spent;
                    $new_asset->purchased_amount +=$item->purchased_amount;
                    $avg_buy_price+=$item->buy_price;
                }
                $new_asset->buy_price = $avg_buy_price / count($assets);
                $new_asset->profit_loss_number = ($token->price * $new_asset->holdings) - $new_asset->amount_spent;
                $percentage = $new_asset->profit_loss_number / $new_asset->amount_spent;
                $new_asset->profit_loss_percentage =  $percentage * 100;
                $new_asset->total_holdings_per_coin = $new_asset->holdings;
                $new_asset->total_value_per_coin = $new_asset->total_holdings_per_coin * $token->price;
                $new_asset->total_value = $token->price * $new_asset->holdings;
                $new_asset->save();
            }
            return redirect(route("fee.create",$asset->id));

        }
        else
        {
            return back()->with(["errors"=>$validation->errors()->all()]);
        }
    }

    
    public function show($id)
    {
        $asset = Asset::findorfail($id);
        return view("admin.asset.show",compact("asset"));
    }

    public function edit($id)
    {
        $asset = Asset::findorfail($id);
        return view("admin.asset.edit",compact("asset"));
    }

  
    public function update(Request $request, $id)
    {
        Asset::findorfail($id);
        $validation = Validator::make($request->all(),[
            "token"=>"required",
            "ticker"=>"required",
            "buy_date"=>"required",
            "buy_price"=>"required",
            "purchased_amount"=>"required",
            "amount_acquired"=>"required",
        ]);

        if ($validation->passes()) {
            $token = $this->getCryptoCurrencyInformation($request->token);
            $asset = Asset::findorfail($id);
            if (!empty($request->sell_price) && !empty($request->sell_date) && !empty($request->sell_amount) && !empty($request->sell_fee)) {
                if ($request->sell_amount > $asset->amount_acquired) {
                    return back()->with(["errors"=>array("Sell Amount is more than current amount acquired")]);
                }
                Sell::where("token",$asset->token)->delete();
                $sell = new Sell();
                $sell->token = $asset->token;
                $sell->sell_price = $request->sell_price;
                $sell->sell_date = $request->sell_date;
                $sell->sell_amount = $request->sell_amount;
                $sell->sell_fee = $request->sell_fee;
                $sell->sell_fee_usd = $sell->sell_fee * $sell->sell_price;
                $sell->total_sold_price = $sell->sell_price * $sell->sell_amount - $sell->sell_fee_usd;
                $sell->current_holdings_total = ($sell->sell_amount * $sell->sell_price) - ($sell->sell_amount * $asset->buy_price);
                $sell->profit_loss_number =  $sell->total_sold_price - $sell->current_holdings_total;
                $sell->profit_loss_percentage = $sell->profit_loss_number / $sell->current_holdings_total;
                $sell->save();
                //put if and subtract asset buy_price - sell price
                //here if sell amount - amount we have which is holdings delete assets
                $asset_holdings = $asset->amount_acquired;
                $sell_holdings = $sell->sell_amount - $sell->sell_fee;
                if ($asset->amount_acquired - $sell->sell_amount == 0) {
                    $asset->delete();
                }
                //update assets as well as put in sell
                $asset->token = $request->token; 
                $asset->ticker = $request->ticker; 
                $asset->buy_date = $request->buy_date;
                $asset->buy_price = $request->buy_price;
                $asset->exchange = $request->exchange;
                $asset->sold_asset = $request->sold_asset;
                $asset->purchased_amount = $request->purchased_amount;
                $asset->amount_acquired = $request->amount_acquired;
                $asset->amount_spent = $asset->buy_price * $asset->purchased_amount;
                $asset->profit_loss_number = ($token->price * $asset->amount_acquired) - $asset->amount_spent;
                $percentage = $asset->profit_loss_number / $asset->amount_spent;
                $asset->profit_loss_percentage =  $percentage * 100;
                $asset->current_value_usd = $token->price * $asset->purchased_amount;
                $asset->save();   

                //update fees 
                return redirect(route("fee.create",$asset->id));
            }   
            else
            {
                //if it's just update
                $asset->token = $request->token; 
                $asset->ticker = $request->ticker; 
                $asset->buy_date = $request->buy_date;
                $asset->buy_price = $request->buy_price;
                $asset->exchange = $request->exchange;
                $asset->sold_asset = $request->sold_asset;
                $asset->purchased_amount = $request->purchased_amount;
                $asset->amount_acquired = $request->amount_acquired;
                $asset->amount_spent = $asset->buy_price * $asset->purchased_amount;
                $asset->profit_loss_number = ($token->price * $asset->amount_acquired) - $asset->amount_spent;
                $percentage = $asset->profit_loss_number / $asset->amount_spent;
                $asset->profit_loss_percentage =  $percentage * 100;
                $asset->current_value_usd = $token->price * $asset->purchased_amount;
                $asset->save();   

                return redirect(route("fee.create",$asset->id));

            }

            return redirect(route("asset.index"));
        }
        else
        {
            return back()->with(["errors"=>$validation->errors()->all()]);
        }
    }


    public function destroy($id)
    {
        $asset = Asset::findorfail($id);
        $asset->delete();
        return redirect(route("asset.index"));
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
