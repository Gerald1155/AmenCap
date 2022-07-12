@extends('multiauth::layouts.app')
@section('content')
<title> Edit non stable coin : {{$coin->token}} </title>
<div class="container">
    <h4 class="mt-2">
        Edit Non Stable Coin : {{$coin->token}}
    </h4>
    <br>
   <div class="row">
    <div class="col-lg-12">
        <form action="{{route('nonstable.update',$coin->id)}}" method="post">
            @csrf
            @method("PATCH")
            <div class="row mb-3">
                <div class="col-lg-4 mt-2">
                    <label> * Token </label>
                    <input type="text" class="form-control" name="token" value="{{$coin->token}}">
                </div>
                <div class="col-lg-4 mt-2">
                    <label> * Avg Buy Price </label>
                    <input type="text" class="form-control" name="avg_buy_price" value="{{$coin->avg_buy_price}}">
                </div>
                <div class="col-lg-4 mt-2">
                    <label> * Purchased Amount </label>
                    <input type="text" class="form-control" name="purchased_amount" value="{{$coin->purchased_amount}}">
                </div>
                <div class="col-lg-4 mt-2">
                    <label> * Holdings</label>
                    <input type="text" class="form-control" name="holdings" value="{{$coin->holdings}}">
                </div>
                <div class="col-lg-4 mt-2">
                    <label> * Amount Spent</label>
                    <input type="text" class="form-control" name="amount_spent" value="{{$coin->amount_spent}}">
                </div>
            </div>  
            <button type="submit" class="btn btn-block btn-primary"> Update {{$coin->token}} </button>
        </form>
    </div>
   </div>
</div>


@endsection