@extends('multiauth::layouts.app')
@section('content')
<title> Edit Asset</title>
<div class="container">
    <h4 class="mt-2">
        Edit Asset
    </h4>
    <br>
   <div class="row">
    <div class="col-lg-12">
        <form action="{{route('asset.update',$asset->id)}}" method="post">
            @csrf
            @method("PUT")
            <div class="row mb-3">
                <div class="col-lg-4 mt-2">
                    <label> * Token </label>
                    <input type="text" class="form-control" name="token" value="{{$asset->token}}">
                </div>
                <div class="col-lg-4 mt-2">
                    <label> * Ticker </label>
                    <input type="text" class="form-control" name="ticker" value="{{$asset->ticker}}">
                </div>
                <div class="col-lg-4 mt-2">
                    <label> * Buy Date </label>
                    <input type="text" class="form-control" name="buy_date" value="{{$asset->buy_date}}">
                </div>
                <div class="col-lg-4 mt-2">
                    <label> * Buy Price </label>
                    <input type="text" class="form-control" name="buy_price" value="{{$asset->buy_price}}">
                </div>
                <div class="col-lg-4 mt-2">
                    <label> * Sold Asset </label>
                    <input type="text" class="form-control" name="sold_asset" value="{{$asset->sold_asset}}">
                </div>
                <div class="col-lg-4 mt-2">
                    <label> * Purchased Amount</label>
                    <input type="text" class="form-control" name="purchased_amount" value="{{$asset->purchased_amount}}">
                </div>
                <div class="col-lg-4 mt-2">
                    <label> * Amount Acquired</label>
                    <input type="text" class="form-control" name="amount_acquired" value="{{$asset->amount_acquired}}">
                </div>
                <div class="col-lg-4 mt-2">
                    <label> Exchange | not required </label>
                    <input type="text" class="form-control" name="exchange" value="{{$asset->exchange}}">
                </div>
            </div>
            <br>
            <hr>
            <br>
            <h4> Sell </h4>
            <div class="row mb-3">
                <div class="col-lg-4 mt-2">
                    <label> * Sell Date </label>
                    <input type="text" class="form-control" value="" name="sell_date">
                </div>
                <div class="col-lg-4 mt-2">
                    <label> * Sell Price </label>
                    <input type="text" class="form-control" value="" name="sell_price">
                </div>
                <div class="col-lg-4 mt-2">
                    <label> * Sell Amount</label>
                    <input type="text" class="form-control" value="" name="sell_amount">
                </div>  
                <div class="col-lg-4 mt-2">
                    <label> * Sell Fee </label>
                    <input type="text" class="form-control" value="" name="sell_fee">
                </div>
            </div>

            <button type="submit" class="btn btn-block btn-primary"> Update Asset </button>
        </form>
    </div>
   </div>
</div>


@endsection