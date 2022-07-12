@extends('multiauth::layouts.app')
@section('content')
<div class="container">
    <h3 class="mt-2">
        Main Numbers
    </h3>
    <br>
   <div class="row">
       @foreach ($usds as $usd)
       <div class="col-lg-4 border p-3"> 
        <h3> Name : {{$usd->name}} </h3> 
        <br> 
        <h4> Number : ${{number_format($usd->number,2)}} </h4>
        <div class="row">
            <div class="col-12">
                <a href="{{route('numbers.edit',$usd->id)}}" class="btn btn-block btn-primary"> Edit </a>    
            </div>   
        </div> 
       </div>
       @endforeach

   </div>
</div>
@endsection