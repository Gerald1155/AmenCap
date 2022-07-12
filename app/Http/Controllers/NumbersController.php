<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\USD;
use Illuminate\Support\Facades\Validator;
class NumbersController extends Controller
{
    public function __construct()
    {
        $this->middleware("role:super");
    }

    public function index()
    {
        $usds = USD::orderby("created_at",'DESC')->get();
        return view("admin.usds.index",compact("usds"));
    }


    public function edit($id)
    {
        $usd = USD::findorfail($id);
        return view("admin.usds.edit",compact("usd"));
    }
    

    public function update(Request $request,$id)
    {
        Usd::findorfail($id);
        $validation = Validator::make($request->all(),[
            "number"=>"required|numeric",
        ]);

        if ($validation->passes()) {
            $usd = USD::where("id",$id)->update($request->except(["name","_token","_method"]));
            return redirect()->route("admin.home");
        }
        else
        {
            return back()->with(["errors"=>$validation->errors()->all()]);
        }
    }
}
