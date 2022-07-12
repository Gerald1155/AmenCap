<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sell;

class SellController extends Controller
{
    public function __construct()
    {
        $this->middleware("role:super");
    }

    public function index()
    {
        $sold = Sell::orderBy("created_at","ASC")->get();
        return view("admin.sell.index",compact("sold"));
    }

    public function edit($id)
    {
        $sell = Sell::findorfail($id);
        return view("admin.sell.edit",compact("sell"));
    }

    public function update(Request $request,$id)
    {
        Sell::findorfail($id);
        $sell = Sell::find($id);
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

        return redirect(route("admin.sell.index"));
    }
}
