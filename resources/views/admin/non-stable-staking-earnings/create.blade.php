@extends('multiauth::layouts.app')
@section('content')
<title> Add a new non stable coin staking earnings </title>
<div class="container">
    <h4 class="mt-2">
        Add a new non stable coin staking earnings
    </h4>
    <br>
   <div class="row">
    <div class="col-lg-12">
        <form action="{{route('staking.store')}}" method="post">
            @csrf
            @method("POST")
            <div class="row mb-3">
                <div class="col-lg-4 mt-2">
                    <label> * Token </label>
                    <select name="token" class="form-control" id="">
                        @foreach (App\Models\NonStableCoin::orderBy("created_at","DESC")->get() as $coin)
                            <option value="{{$coin->token}}">{{$coin->token}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-4 mt-2">
                    <label> * date </label>
                    <input type="text" class="form-control" name="date">
                </div>
                <div class="col-lg-4 mt-2">
                    <label> * Amount Earned </label>
                    <input type="text" class="form-control" name="amount_earned">
                </div>
            </div>  
            <button type="submit" class="btn btn-block btn-primary"> Add Non Stable Coin staking earnings </button>
        </form>
    </div>
   </div>
</div>


@endsection