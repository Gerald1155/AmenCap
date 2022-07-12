<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Crypt; 
class InvestorController extends Controller
{
    public function __construct()
    {
        $this->middleware("role:super");
    }

    public function index()
    {
        $investors = User::orderBy("created_at","DESC")->get();
        return view("admin.investor.index",compact("investors"));
    }

    public function create()
    {
        return view("admin.investor.create");
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'balence'=>"required|regex:/^\d{1,13}(\.\d{1,4})?$/"
        ]);

        if ($validation->passes()) {
            $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'balence'=> $request->balence
        ]);

        return redirect()->route('investor.index');

        }
        else
        {
            return back()->with(['errors'=>$validation->errors()->all()]);

        }
    }

    public function show()
    {
        return abort(404);
    }

    public function edit($id)
    {
        $investor = User::findorfail($id);
        return view("admin.investor.edit",compact("investor"));
    }

    public function update(Request $request, $id)
    {
        $validation = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'balence'=>'required',
        ]);

        if ($validation->passes()) {
            $user = User::findorfail($id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->balence = $request->balence;
            $user->save();
            return redirect()->route('investor.index');

        }
        else
        {
            return back()->with(['errors'=>$validation->errors()->all()]);

        }
    }

   


    public function destroy($id)
    {
        $user = User::findorfail($id);
        $user->delete();
        return redirect()->route("investor.index");
    }


}
