<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Balence;
use App\Models\NonStableCoin;
use App\Models\StableCoin;
use App\Models\NonStableCoinStakingEarnings;
use App\Models\USD;
use App\Models\Portfolio_Value;
class HomeController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {   
          $profit_loss_number = Portfolio_Value::where("name","profit_loss_number")->first()->portfolio_value;
          $current_value = Portfolio_Value::where("name","portfolio")->first()->portfolio_value;
          $profit_loss_percentage = Portfolio_Value::where("name","profit_loss_percentage")->first()->portfolio_value;
          $beginning_value = 2354889;
          $portfolio_interest = (auth()->user()->balence / $beginning_value) * 100;
         
          $profit_loss_percentage2 = $profit_loss_number / $beginning_value;
          $portfolio_value = auth()->user()->balence*$profit_loss_percentage2;

          $carbon = \Carbon\Carbon::now();
          $today = $carbon->format("d/m/Y");
        return view("home",compact("today","profit_loss_number","profit_loss_percentage","portfolio_interest","portfolio_value","current_value"));
    }

    
   
    
}
