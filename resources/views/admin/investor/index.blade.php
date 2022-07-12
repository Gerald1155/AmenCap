@extends('multiauth::layouts.app')
@section('content')
<div class="container">
    <h3 class="mt-2">
        Investors - <a href="{{route('investor.create')}}"> Add new credentials for an investor </a>
    </h3>
    <br>
   <div class="row">
       @foreach ($investors as $investor)
       <div class="col-lg-4 border p-3"> 
        <h4> Name : {{$investor->name}} </h4> 
        <h4> Email : {{$investor->email}} </h4> 
        <h4> Balance : {{number_format($investor->balence)}} </h4> 
        <div class="row">
            <div class="col-6">
                <a href="{{route('investor.edit',$investor->id)}}" class="btn btn-block btn-primary"> Edit </a>    
            </div>   
            <div class="col-6">
                <form action="{{route('investor.destroy',$investor->id)}}" method="POST"> @csrf @method("DELETE") <button type="submit" class="btn btn-block btn-danger"> Delete </button> </form>
            </div>   
        </div> 
       </div>
       @endforeach

   </div>
</div>
@endsection