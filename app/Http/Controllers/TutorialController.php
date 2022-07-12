<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Tutorial;
class TutorialController extends Controller
{
    public function __construct()
    {
        $this->middleware("role:super");
    }

    public function index()
    {
        $tutorials = Tutorial::orderBy("created_at","DESC")->get();
        return view("admin.tutorial.index",compact("tutorials"));
    }

    public function create()
    {
        return view("admin.tutorial.create");
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(),[
            "name"=>"required",
            "short_des"=>"required",
            "tutorial"=>"required"
        ]);

        if ($validation->passes()) {
            $tutorial = Tutorial::create($request->except(["_method","_token"]));
            return redirect()->route('image.create',["Tutorial",$tutorial->id]);
        }
        else
        {
            return back()->with(['errors'=>$validation->errors()->all()]);
        }
    }

   
    public function show($id)
    {
        $tutorial = Tutorial::findorfail($id);
        return view("admin.tutorial.show",compact("tutorial"));
    }

    public function edit($id)
    {
        $tutorial = Tutorial::findorfail($id);
        return view("admin.tutorial.edit",compact("tutorial"));
    }

    public function update(Request $request, $id)
    {
        Tutorial::findorfail($id);
        $validation = Validator::make($request->all(),[
            "name"=>"required",
            "short_des"=>"required",
            "tutorial"=>"required"
        ]);

        if ($validation->passes()) {
            $tutorial = Tutorial::where('id',$id)->update($request->except(["_method","_token"]));
            return redirect()->route('image.create',["Tutorial",$id]);
        }
        else
        {
            return back()->with(['errors'=>$validation->errors()->all()]);
        }
    }

   
    public function destroy($id)
    {
        $tutorial = Tutorial::findorfail($id);
        if (count($tutorial->images) > 0) {
            foreach ($tutorial->images as $image) {
                if (file_exists(public_path($image->url))) {
                    @unlink($image);  
                    $image->delete();  
                }
            }
        }
        $tutorial->delete();
        return back()->with(['sucess',"Tutorial Deleted Sucessfully"]);
    }
}
