@extends('multiauth::layouts.app')
@section('content')
<title> Edit Sold Asset</title>
<div class="container">
    <h4 class="mt-2">
        Edit Sold Asset : {{$sell->token}}
    </h4>
    <br>
   <div class="row">
    <div class="col-lg-12">
        <form action="{{route('sell.update',$sell->id)}}" method="post">
            @csrf
            @method("PUT")
            <h4> Sell </h4>
            <div class="row mb-3">
                <div class="col-lg-4 mt-2">
                    <label> * Sell Date </label>
                    <input type="text" class="form-control" value="{{$sell->sell_date}}" name="sell_date">
                </div>
                <div class="col-lg-4 mt-2">
                    <label> * Sell Price </label>
                    <input type="text" class="form-control" value="{{$sell->sell_price}}" name="sell_price">
                </div>
                <div class="col-lg-4 mt-2">
                    <label> * Sell Amount</label>
                    <input type="text" class="form-control" value="{{$sell->sell_amount}}" name="sell_amount">
                </div>  
                <div class="col-lg-4 mt-2">
                    <label> * Sell Fee </label>
                    <input type="text" class="form-control" value="{{$sell->sell_fee}}" name="sell_fee">
                </div>
            </div>

            <button type="submit" class="btn btn-block btn-primary"> Update Asset </button>
        </form>
    </div>
   </div>
</div>


@endsection