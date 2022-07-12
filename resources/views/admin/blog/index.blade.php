@extends('multiauth::layouts.app')
@section('content')
<div class="container">
    <h3 class="mt-2">
        Blogs - <a href="{{route('blog.create')}}"> Create blog </a>
    </h3>
    <br>
   <div class="row">
       @foreach ($blogs as $blog)
       <div class="col-lg-4 border p-3"> 
        <img src="{{$blog->cover()}}" class="img-thumbnail mb-2" alt="cover">
        <br>
        <h4> {{$blog->title}} </h4> 
        <br> 
        <div class="row">
            <div class="col-6">
                <a href="{{route('blog.show',$blog->id)}}" class="btn btn-block btn-primary"> More </a>    
            </div>   
            <div class="col-6">
                <form action="{{route('blog.destroy',$blog->id)}}" method="POST"> @csrf @method("DELETE") <button type="submit" class="btn btn-block btn-danger"> Delete </button> </form>
            </div>   
        </div> 
       </div>
       @endforeach

   </div>
</div>
@endsection