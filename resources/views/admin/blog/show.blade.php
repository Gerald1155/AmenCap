@extends('multiauth::layouts.app')
@section('content')
<style>
    img {
   max-width: 100%;
   height: auto !important;
       }
</style>
<div class="container">
    <h3 class="mt-2">
        Blog: {{$blog->name}}
    </h3>
   <div class="row">
            <div class="col-lg-12 border mt-3 mb-3 p-1"> 
                <div class="row">
                    <div class="col-lg-4">
                        <img src="{{$blog->cover()}}" class="img-thumbnail mb-2" alt="cover">
                    </div>
                    <div class="col-lg-8 p-3">
                        <h4> {{$blog->title}} </h4>
                        <hr>
                        {!! $blog->blog !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <a href="{{route('blog.edit',$blog->id)}}" class="btn btn-block btn-primary"> Edit </a>    
                    </div>   
                    <div class="col-6">
                        <form action="{{route('blog.destroy',$blog->id)}}" method="POST"> @csrf @method("DELETE") <button type="submit" class="btn btn-block btn-danger"> Delete </button> </form>
                    </div>   
                </div> 
               </div>
   </div>
</div>
@endsection