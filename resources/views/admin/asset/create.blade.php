@extends('multiauth::layouts.app')
@section('content')
<title> Add a new asset </title>
<div class="container">
    <h4 class="mt-2">
        Add a new asset
    </h4>
    <br>
   <div class="row">
    <div class="col-lg-12">
        <form action="{{route('asset.store')}}" method="post">
            @csrf
            @method("POST")
            <div class="row mb-3">
                <div class="col-lg-4 mt-2">
                    <label> * Token </label>
                    <input type="text" class="form-control" name="token">
                </div>
                <div class="col-lg-4 mt-2">
                    <label> * Ticker </label>
                    <input type="text" class="form-control" name="ticker">
                </div>
                <div class="col-lg-4 mt-2">
                    <label> * Buy Date </label>
                    <input type="text" class="form-control" name="buy_date">
                </div>
                <div class="col-lg-4 mt-2">
                    <label> * Buy Price </label>
                    <input type="text" class="form-control" name="buy_price">
                </div>
                <div class="col-lg-4 mt-2">
                    <label> * Sold Asset </label>
                    <input type="text" class="form-control" name="sold_asset">
                </div>
                <div class="col-lg-4 mt-2">
                    <label> * Purchased Amount</label>
                    <input type="text" class="form-control" name="purchased_amount">
                </div>
                <div class="col-lg-4 mt-2">
                    <label> * Amount Acquired</label>
                    <input type="text" class="form-control" name="amount_acquired">
                </div>
                <div class="col-lg-4 mt-2">
                    <label> Exchange | not required </label>
                    <input type="text" class="form-control" name="exchange">
                </div>
            </div>
            <button type="submit" class="btn btn-block btn-primary"> Add a new asset </button>
        </form>
    </div>
   </div>
</div>


@endsection