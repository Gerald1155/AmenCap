@extends('multiauth::layouts.app')
@section('content')
<div class="container">
    <h3 class="mt-2">
        Tutorials - <a href="{{route('tutorial.create')}}"> Create Tutorial </a>
    </h3>
    <br>
   <div class="row">
       @foreach ($tutorials as $tutorial)
       <div class="col-lg-4 border p-3"> 
        <img src="{{$tutorial->cover()}}" class="img-thumbnail mb-2" alt="cover">
        <br>
        <h4> {{$tutorial->name}} </h4> 
        <br> 
        <div class="row">
            <div class="col-6">
                <a href="{{route('tutorial.show',$tutorial->id)}}" class="btn btn-block btn-primary"> More </a>    
            </div>   
            <div class="col-6">
                <form action="{{route('tutorial.destroy',$tutorial->id)}}" method="POST"> @csrf @method("DELETE") <button type="submit" class="btn btn-block btn-danger"> Delete </button> </form>
            </div>   
        </div> 
       </div>
       @endforeach

   </div>
</div>
@endsection