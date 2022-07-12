<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PasswordChangeController extends Controller
{
    public function __construct()
    {
        $this->middleware("role:super");
    }

    public function store(Request $request)
    {
        $message = [
            "oldpassword.required" => "Old Password Required"
        ];
        $validation = Validator::make($request->all(), [
            "oldpassword"=>"required",
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ],$message);

        if ($validation->passes()) {
            if (Hash::check($request->oldpassword,auth()->user()->password)) {
                
                $user = User::find(auth()->user()->id);
                $user->password = bcrypt($request->password);
                $user->save();
                return back()->with(["success"=>array("Password Changed Successfully")]);
            }
            else
            {
                return back()->with(["errors"=>array("Old password is wrong")]);
            }   
        }
        else
        {
            return back()->with(['errors'=>$validation->errors()->all()]);

        }
    }
    
}
