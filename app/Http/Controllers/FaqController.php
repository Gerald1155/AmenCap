<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;
use Illuminate\Support\Facades\Validator;
class FaqController extends Controller
{
    public function __construct()
    {
        $this->middleware("role:super");
    }
   
    public function index()
    {
        $faqs = Faq::orderBy("created_at","DESC")->Get();
        return view("admin.faq.index",compact("faqs"));
    }

   
    public function create()
    {
        return view("admin.faq.create");
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(),[
            "question"=>"required",
            "answer"=>"required"
        ]);

        if ($validation->passes()) {
            $faq = Faq::create($request->except(["_token","_method"]));
            return redirect()->route("faq.index");
        }
        else
        {
            return back()->with(['errors'=>$validation->errors()->all()]);
        }
        
    }

   
    public function show($id)
    {
        $faq = Faq::findorfail($id);
        return view("admin.faq.show",compact("faq"));
    }

    public function edit($id)
    {
        $faq = Faq::findorfail($id);
        return view("admin.faq.edit",compact("faq"));
    }

    
    public function update(Request $request, $id)
    {
        Faq::findorfail($id);
        $validation = Validator::make($request->all(),[
            "question"=>"required",
            "answer"=>"required"
        ]);

        if ($validation->passes()) {
            $faq = Faq::where('id',$id)->update($request->except(["_token","_method"]));
            return redirect()->route("faq.index");
        }
        else
        {
            return back()->with(['errors'=>$validation->errors()->all()]);
        }
    }

   
    public function destroy($id)
    {
        $faq = Faq::findorfail($id);
        $faq->delete();
        return redirect()->route("faq.index");
    }
}
