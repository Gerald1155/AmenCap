<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Codenixsv\CoinGeckoApi\CoinGeckoClient;
use Carbon;
use App\Models\Asset;
use App\Models\ProfitLoss;
use App\Models\StableCoin;
use App\Models\NonStableCoin;
use App\Models\Balence;
class TestController extends Controller
{   

    public function __construct()
    {
        $this->middleware("role:super");
    }

    public function index()
    {
        return view("admin.update.index");
    }




    public function balence_of_year(Request $request)
    {
        if ($request->ajax()) {
            Balence::where("time_line","year")->delete();
            $spend_holdings = $this->spent_holdings();
            $stable_coin_profit = $this->stable_coin_profit();
            $i = 0;
            $the_first_day = date('1-1-'.'Y');
            $toady = date('d-m-Y');
            $diff = strtotime($toady) - strtotime($the_first_day);
            $weeks_between = abs(round($diff / 86400)) / 7;
            while ($i < floor($weeks_between)) {
                $t = $this->dates_of_year()[$i];
                $profit_loss = ProfitLoss::where("time_line","year")->where("time",$t)->get();
                $calculate_profit = $this->profit_calculate($profit_loss);
                $before = $calculate_profit += $stable_coin_profit;
                $total = $before + $spend_holdings;
                $percentage = $before / $spend_holdings;
                $new_balence = new Balence();
                $new_balence->time = $this->dates_of_year()[$i];
                $new_balence->balence = $total;
                $new_balence->time_line = "year";
                $new_balence->balence_percentage = $percentage;
                $new_balence->save();
                $i++;
            }
            return response()->json(["status"=>200,"message"=>"Balance and Chart Updated Successfully for year."]);
        }
    }

    public function balence_of_90_days(Request $request)
    {
        if ($request->ajax()) {
            Balence::where("time_line","3month")->delete();
            $spend_holdings = $this->spent_holdings();
            $stable_coin_profit = $this->stable_coin_profit();
            $i = 0;
            while ($i < 12) {
                $t = $this->dates_of_three_month()[$i];
                $profit_loss = ProfitLoss::where("time_line","3month")->where("time",$t)->get();
                $calculate_profit = $this->profit_calculate($profit_loss);
                $before = $calculate_profit += $stable_coin_profit;
                $total = $before + $spend_holdings;
                $percentage = $before / $spend_holdings;
                $new_balence = new Balence();
                $new_balence->time = $this->dates_of_three_month()[$i];
                $new_balence->balence = $total;
                $new_balence->time_line = "3month";
                $new_balence->balence_percentage = $percentage;
                $new_balence->save();
                $i++;
            }
            return response()->json(["status"=>200,"message"=>"Balance and Chart Updated Successfully for 3 month."]);
        }

    }

    public function balence_of_month(Request $request)
    {
        if ($request->ajax()) {
            Balence::where("time_line","month")->delete();
            $spend_holdings = $this->spent_holdings();
            $stable_coin_profit = $this->stable_coin_profit();
            $i = 0;
            while ($i < 30) {
                $t = $this->dates_of_month()[$i];
                $profit_loss = ProfitLoss::where("time_line","month")->where("time",$t)->get();
                $calculate_profit = $this->profit_calculate($profit_loss);
                $before = $calculate_profit += $stable_coin_profit;
                $total = $before + $spend_holdings;
                $percentage = $before / $spend_holdings;
                $new_balence = new Balence();
                $new_balence->time = $this->dates_of_month()[$i];
                $new_balence->balence = $total;
                $new_balence->time_line = "month";
                $new_balence->balence_percentage = $percentage;
                $new_balence->save();
                $i+=3;
            }
            return response()->json(["status"=>200,"message"=>"Balance and Chart Updated Successfully for month."]);
        }
        else
        {
            return abort(404);
        }

    }

    public function balence_of_week(Request $request)
    {
        if ($request->ajax()) {
            Balence::where("time_line","week")->delete();
            $spend_holdings = $this->spent_holdings();
            $stable_coin_profit = $this->stable_coin_profit();
            $i = 0;
            while ($i < 7) {
                $t = $this->dates_of_weeks()[$i];
                $profit_loss = ProfitLoss::where("time_line","week")->where("time",$t)->get();
                $calculate_profit = $this->profit_calculate($profit_loss);
                $before = $calculate_profit += $stable_coin_profit;
                $total = $before + $spend_holdings;
                $percentage = $before / $spend_holdings;
                $new_balence = new Balence();
                $new_balence->time = $this->dates_of_weeks()[$i];
                $new_balence->balence = $total;
                $new_balence->time_line = "week";
                $new_balence->balence_percentage = $percentage;
                $new_balence->save();
                $i++;
            }
            return response()->json(["status"=>200,"message"=>"Balance and Chart Updated Successfully for week."]);

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


    public function update_profit_loss_for_year(Request $request)
    {   
        if ($request->ajax()) {
            ProfitLoss::where("time_line","year")->delete();
            $assets = Asset::orderBy("created_at","ASC")->get();
            $the_first_day = date('1-1-'.'Y');
            $toady = date('d-m-Y');
            $diff = strtotime($toady) - strtotime($the_first_day);
            $weeks_between = abs(round($diff / 86400)) / 7;
            foreach ($assets as $asset) {
                $prices_of_year = $this->prices_of_year($asset->token);
                $dates_of_year = $this->dates_of_year();
                $i = 0;
                $now = Carbon\Carbon::now();
                while ($i < floor($weeks_between)) {
                    $profit_loss = new ProfitLoss();
                    $profit_loss->time = $dates_of_year[$i];
                    $profit_loss->time_line = "year";
                    $profit_loss->token = $asset->token;
                    $profit_loss->profit_loss_number = ($prices_of_year[$i] * $asset->holdings) - $asset->amount_spent;
                    $profit_loss->save();
                    $i++;
                }    
            }
            return response()->json(["status"=>200,"message"=>"Profit Loss Updated Successfully . Now you can update the balance and chart for year."]);
        }
        else
        {
            return abort(404);
        }
    }

    public function prices_of_year($token)
    {
        $the_first_day = date('1-1-'.'Y');
        $toady = date('d-m-Y');
        $diff = strtotime($toady) - strtotime($the_first_day);
        $weeks_between = abs(round($diff / 86400)) / 7;

        $now = Carbon\Carbon::now();
        $array = [];
        $client = new CoinGeckoClient();
        for ($i=0; $i < floor($weeks_between); $i++) { 
            $time = date('d-m-Y', strtotime($toady. " - ".$i." weeks"));
            $data = $client->coins()->getHistory($token,$time);
            array_push($array,$data["market_data"]["current_price"]["usd"]);
        }
        return $array;
    }

    public function dates_of_year()
    {
        $the_first_day = date('1-1-'.'Y');
        $toady = date('d-m-Y');
        $diff = strtotime($toady) - strtotime($the_first_day);
        $weeks_between = abs(round($diff / 86400)) / 7;
        //days in month
        $now = Carbon\Carbon::now();
        $days_in_month = Carbon\Carbon::now()->daysInMonth;
        $array_time = [];

        for ($i=0; $i < floor($weeks_between); $i++) { 
            $time = date('d-m-Y', strtotime($toady. " - ".$i." weeks"));
            array_push($array_time,$time);
        }
        return $array_time;
    }

    

    public function update_profit_loss_for_90_days(Request $request)
    {   
        if ($request->ajax()) {
            ProfitLoss::where("time_line","3month")->delete();
            $assets = Asset::orderBy("created_at","ASC")->get();
            foreach ($assets as $asset) {
                try{
                    $prices_of_3month = $this->prices_of_three_month($asset->token);
                }
                catch(\GuzzleHttp\Exception\ClientException $error){
                    sleep(60);
                }
                $dates_of_3month = $this->dates_of_three_month();
                $i = 0;
                while ($i < 12) {
                    $profit_loss = new ProfitLoss();
                    $profit_loss->time = $dates_of_3month[$i];
                    $profit_loss->time_line = "3month";
                    $profit_loss->token = $asset->token;
                    $profit_loss->profit_loss_number = ($prices_of_3month[$i] * $asset->holdings) - $asset->amount_spent;
                    $profit_loss->save();
                    $i++;
                }    
            }
            return response()->json(["status"=>200,"message"=>"Profit Loss Updated Successfully . Now you can update the balance and chart for 3 month."]);
        }
    }

    public function prices_of_three_month($token)
    {
        $toady = date('d-m-Y');
        //days in month
        $days_in_month = Carbon\Carbon::now()->daysInMonth;
        $array = [];
        $client = new CoinGeckoClient();
        for ($i=0; $i < 12; $i++) { 
            $time = date('d-m-Y', strtotime($toady. " - ".$i." weeks"));
            $data = $client->coins()->getHistory($token,$time);
            array_push($array,$data["market_data"]["current_price"]["usd"]);
        }
        return $array;
    }

    public function dates_of_three_month()
    {
        $toady = date('d-m-Y');
        //days in month
        $days_in_month = Carbon\Carbon::now()->daysInMonth;
        $array_time = [];
        for ($i=0; $i < 12; $i++) { 
            $time = date('d-m-Y', strtotime($toady. " - ".$i." weeks"));
            array_push($array_time,$time);
        }
        return $array_time;
    }

    public function update_profit_loss_for_30_days(Request $request)
    {   
        if ($request->ajax()) {
            ProfitLoss::where("time_line","month")->delete();
            $assets = Asset::orderBy("created_at","DESC")->Get();;
            foreach ($assets as $index=>$asset) {
                try{
                $prices_of_month = $this->prices_of_month($asset->token);
                }
                catch(\GuzzleHttp\Exception\ClientException $error){
                    sleep(60);
                }
                $dates_of_month = $this->dates_of_month();
                $i = 0;
                $counter = 0;
                while ($i < 30) {
                    $profit_loss = new ProfitLoss();
                    $profit_loss->time = $dates_of_month[$counter];
                    $profit_loss->time_line = "month";
                    $profit_loss->token = $asset->token;
                    $profit_loss->profit_loss_number = ($prices_of_month[$counter] * $asset->holdings) - $asset->amount_spent;
                    $profit_loss->save();
                    $i+=3;
                    $counter++;
                }
            }
            return  response()->json(["status"=>200,"message"=>"Profit Loss Updated Successfully . Now you can update the balance and chart for month."]);
        }
        else
        {
            
        }
    }

    public function prices_of_month($token)
    {
        $toady = date('d-m-Y');
        //days in month
        $days_in_month = Carbon\Carbon::now()->daysInMonth;
        $array = [];
        $client = new CoinGeckoClient();
        for ($i=0; $i < 30; $i+=3) { 
            $time = date('d-m-Y', strtotime($toady. " - ".$i." days"));
            $data = $client->coins()->getHistory($token,$time);
            array_push($array,$data["market_data"]["current_price"]["usd"]);
        }
        return $array;
    }

    public function dates_of_month()
    {
        $toady = date('d-m-Y');
        //days in month
        $days_in_month = Carbon\Carbon::now()->daysInMonth;
        $array_time = [];
        for ($i=0; $i < 30; $i+=3) { 
            $time = date('d-m-Y', strtotime($toady. " - ".$i." days"));
            array_push($array_time,$time);
        }
        return $array_time;
    }


    public function update_profit_loss_for_7_days(Request $request)
    {   
            if ($request->ajax()) {
                ProfitLoss::where("time_line","week")->delete();
                $assets = Asset::orderBy("created_at","ASC")->get();
                foreach ($assets as $asset) {
                    $prices_of_week = $this->prices_of_weeks($asset->token);
                    $dates_of_week = $this->dates_of_weeks();
                    $i = 0;
                    while ($i < 7) {
                        $profit_loss = new ProfitLoss();
                        $profit_loss->time = $dates_of_week[$i];
                        $profit_loss->time_line = "week";
                        $profit_loss->token = $asset->token;
                        $profit_loss->profit_loss_number = ($prices_of_week[$i] * $asset->holdings) - $asset->amount_spent;
                        $profit_loss->save();
                        $i++;
                    }    

                }
             return  response()->json(["status"=>200,"message"=>"Profit Loss Updated Successfully . Now you can update the balance and chart for week."]);
            }
            else
            {
                return abort(404);
            }
    }

    public function prices_of_weeks($token)
    {
        $toady = date('d-m-Y');
        //days in month
        $array = [];
        $client = new CoinGeckoClient();
        for ($i=0; $i < 7; $i++) { 
            $time = date('d-m-Y', strtotime($toady. " - ".$i." days"));
            $data = $client->coins()->getHistory($token,$time);
            array_push($array,$data["market_data"]["current_price"]["usd"]);
        }
        return $array;
    }

    public function dates_of_weeks()
    {
        $toady = date('d-m-Y');
        //days in month
        $array_time = [];
        for ($i=0; $i < 7; $i++) { 
            $time = date('d-m-Y', strtotime($toady. " - ".$i." days"));
            array_push($array_time,$time);
        }
        return $array_time;
    }

}
