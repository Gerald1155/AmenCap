<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Asset;
use App\Models\Fee;
class FeeController extends Controller
{

    public function __construct()
    {
        $this->middleware("role:super");
    }

   
    public function create($id)
    {
        $asset = Asset::findorfail($id);
        return view("admin.fee.create",compact("asset"));
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(),[
            "asset_id"=>"required|numeric",
            "trx_description"=>"required",
            "type_of_fee"=>"required",
            "fee_currency"=>"required",
            "amount_fee_currency"=>"required",
            "currency_price"=>"required"
        ]);

        if ($validation->passes()) {
            $fee = new Fee();
            $fee->asset_id = $request->asset_id;
            $fee->date = $request->date;
            $fee->trx_description = $request->trx_description;
            $fee->type_of_fee = $request->type_of_fee;
            $fee->fee_currency = $request->fee_currency;
            $fee->currency_price = $request->currency_price;
            $fee->amount_fee_currency = $request->amount_fee_currency;
            $fee->amount_usd = $request->amount_fee_currency * $request->currency_price;
            $fee->save();

            $asset = Asset::findorfail($request->asset)->first();
            $asset->amount_acquired = $asset->amount_acquired - $request->fee_currency;
            $asset->save();
            
            return redirect()->route("admin.asset");
        }
        else
        {
            return back()->with(["errors"=>$validation->errors()->all()]);
        }
    }

    public function edit($id)
    {
        $fee = Fee::findorfail($id);
        return view("admin.fee.edit",compact("fee"));
    }

    
    public function update(Request $request, $id)
    {
        
    }

}
