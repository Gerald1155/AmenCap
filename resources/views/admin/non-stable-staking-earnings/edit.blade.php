@extends('multiauth::layouts.app')
@section('content')
<title> Edit Non Stable Coin Staking Earnings : {{$coin->token}} </title>
<div class="container">
    <h4 class="mt-2">
        Edit Non Stable Coin Staking Earnings : {{$coin->token}}
    </h4>
    <br>
   <div class="row">
    <div class="col-lg-12">
        <form action="{{route('staking.update',$coin->id)}}" method="post">
            @csrf
            @method("PUT")
            <div class="row mb-3">
                <div class="col-lg-4 mt-2">
                    <label> * Token </label>
                    <select name="token" class="form-control" id="">
                        <option value="{{$coin->token}}" style="background: #14203b;color:white">{{$coin->token}} - Already Set </option>
                        @foreach (App\Models\NonStableCoin::orderBy("created_at","DESC")->get() as $d)
                            <option value="{{$d->token}}">{{$d->token}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-4 mt-2">
                    <label> * date </label>
                    <input type="text" class="form-control" name="date" value="{{$coin->date}}">
                </div>
                <div class="col-lg-4 mt-2">
                    <label> * Amount Earned </label>
                    <input type="text" class="form-control" name="amount_earned" value="{{$coin->amount_earned}}">
                </div>
            </div>  
            <button type="submit" class="btn btn-block btn-primary"> Edit Non Stable Coin Staking Earnings </button>
        </form>
    </div>
   </div>
</div>


@endsection