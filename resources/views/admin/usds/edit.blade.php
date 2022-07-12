@extends('multiauth::layouts.app')
@section('content')
<title> Edit {{$usd->name}} </title>
<div class="container">
    <h4 class="mt-2">
        Edit {{$usd->name}}
    </h4>
    <br>
   <div class="row">
    <div class="col-lg-12">
        <form action="{{route('numbers.update',$usd->id)}}" method="post">
            @csrf
            @method("PUT")
            <div class="row mb-3">
                <div class="col-lg-6 mt-2">
                    <label> Name </label>
                    <input type="text" disabled class="form-control" value="{{$usd->name}}">
                </div>
               
                <div class="col-lg-6 mt-2">
                    <label> Number </label>
                    <input type="text" class="form-control" name="number" value="{{$usd->number}}">
                </div>
               
            </div>
            <br>
            <button type="submit" class="btn btn-block btn-primary"> Update Number </button>
        </form>
    </div>
   </div>
</div>


@endsection