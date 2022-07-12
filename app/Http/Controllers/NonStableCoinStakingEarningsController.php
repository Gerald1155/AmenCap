<?php

namespace App\Http\Controllers;

use App\Models\NonStableCoinStakingEarnings;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use GuzzleHttp\HandlerStack;
use Kevinrob\GuzzleCache\CacheMiddleware;
use Kevinrob\GuzzleCache\Storage\Psr6CacheStorage;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Kevinrob\GuzzleCache\Strategy\PrivateCacheStrategy;
use Kevinrob\GuzzleCache\Strategy\GreedyCacheStrategy;
use Illuminate\Support\Facades\Validator;
class NonStableCoinStakingEarningsController extends Controller
{

    public function __construct()
    {
        $this->middleware("role:super");
    }

    public function index()
    {
        $stakings = NonStableCoinStakingEarnings::orderBy("created_at","DESC")->get();
        return view("admin.non-stable-staking-earnings.index",compact("stakings"));
    }


    public function create()
    {
        return view("admin.non-stable-staking-earnings.create");
    }
   
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(),[
            "token"=>"required",
            "date"=>"required",
            "amount_earned"=>"required",
        ]);
        if ($validation->passes()) {
            $token = $this->getCryptoCurrencyInformation($request->token);
            $staking = New NonStableCoinStakingEarnings();
            $staking->token = $request->token;
            $staking->ticker = $token->symbol;
            $staking->amount_earned = $request->amount_earned;
            $staking->date = $request->date;
            $staking->value = $staking->amount_earned * $token->price;
            $staking->save();

            return Redirect(route("staking.index"));
        }
        else
        {
            return back()->with(["errors"=>$validation->errors()->all()]);
        }
    }


    public function show($id)
    {
        $coin = NonStableCoinStakingEarnings::findorfail($id);
        return view("admin.non-stable-staking-earnings.show",compact("coin"));
    }

    public function edit($id)
    {
        $coin = NonStableCoinStakingEarnings::findorfail($id);
        return view("admin.non-stable-staking-earnings.edit",compact("coin"));
    }


    public function update(Request $request, $id)
    {
        NonStableCoinStakingEarnings::findorfail($id);
        $validation = Validator::make($request->all(),[
            "token"=>"required",
            "date"=>"required",
            "amount_earned"=>"required",
        ]);
        if ($validation->passes()) {
            $token = $this->getCryptoCurrencyInformation($request->token);
            $staking = NonStableCoinStakingEarnings::find($id);
            $staking->token = $request->token;
            $staking->ticker = $token->symbol;
            $staking->amount_earned = $request->amount_earned;
            $staking->date = $request->date;
            $staking->value = $staking->amount_earned * $token->price;
            $staking->save();

            return Redirect(route("staking.index"));
        }
        else
        {
            return back()->with(["errors"=>$validation->errors()->all()]);
        }
    }

    public function destroy($id)
    {
        $coin = NonStableCoinStakingEarnings::findorfail($id);
        $coin->delete();
        return Redirect(route("staking.index"));
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
