@extends('multiauth::layouts.app')
@section('content')
<title> Add a new non stable coin </title>
<div class="container">
    <h4 class="mt-2">
        Add a new non stable coin
    </h4>
    <br>
   <div class="row">
    <div class="col-lg-12">
        <form action="{{route('nonstable.store')}}" method="post">
            @csrf
            @method("POST")
            <div class="row mb-3">
                <div class="col-lg-4 mt-2">
                    <label> * Token </label>
                    <input type="text" class="form-control" name="token">
                </div>
                <div class="col-lg-4 mt-2">
                    <label> * Avg Buy Price </label>
                    <input type="text" class="form-control" name="avg_buy_price">
                </div>
                <div class="col-lg-4 mt-2">
                    <label> * Purchased Amount </label>
                    <input type="text" class="form-control" name="purchased_amount">
                </div>
                <div class="col-lg-4 mt-2">
                    <label> * Holdings</label>
                    <input type="text" class="form-control" name="holdings">
                </div>
                <div class="col-lg-4 mt-2">
                    <label> * Amount Spent</label>
                    <input type="text" class="form-control" name="amount_spent">
                </div>
            </div>  
            <button type="submit" class="btn btn-block btn-primary"> Add Non Stable Coin </button>
        </form>
    </div>
   </div>
</div>


@endsection