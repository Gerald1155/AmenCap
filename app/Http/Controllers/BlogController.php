<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware("role:super");
    }

    public function index()
    {
        $blogs = Blog::orderBy("created_at","DESC")->get();
        return view("admin.blog.index",compact("blogs"));
    }

    public function create()
    {
        return view("admin.blog.create");
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(),[
            "title"=>"required",
            "short_des"=>"required",
            "blog"=>"required"
        ]);

        if ($validation->passes()) {
            $blog = Blog::create($request->except(["_method","_token"]));
            return redirect()->route('image.create',["Blog",$blog->id]);
        }
        else
        {
            return back()->with(['errors'=>$validation->errors()->all()]);
        }
    }

   
    public function show($id)
    {
        $blog = Blog::findorfail($id);
        return view("admin.blog.show",compact("blog"));
    }

    public function edit($id)
    {
        $blog = Blog::findorfail($id);
        return view("admin.blog.edit",compact("blog"));
    }

    public function update(Request $request, $id)
    {
        Blog::findorfail($id);
        $validation = Validator::make($request->all(),[
            "title"=>"required",
            "short_des"=>"required",
            "blog"=>"required"
        ]);

        if ($validation->passes()) {
            $blog = Blog::where('id',$id)->update($request->except(["_method","_token"]));
            return redirect()->route('image.create',["Blog",$id]);
        }
        else
        {
            return back()->with(['errors'=>$validation->errors()->all()]);
        }
    }

   
    public function destroy($id)
    {
        $blog = Blog::findorfail($id);
        if (count($blog->images) > 0) {
            foreach ($blog->images as $image) {
                if (file_exists(public_path($image->url))) {
                    @unlink($image);  
                    $image->delete();  
                }
            }
        }
        $blog->delete();
        return back()->with(['sucess',"blog Deleted Sucessfully"]);
    }
}
