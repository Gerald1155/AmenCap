@extends('multiauth::layouts.app')
@section('content')
<div class="container">
    <h3 class="mt-2">
        Non Stable Coins staking Earning - <a href="{{route('staking.create')}}"> Add A New Non Stable coin Staking Earnings </a>
    </h3>
    <br>
   <div class="row">
       @foreach ($stakings as $staking)
       <div class="col-lg-4 border p-3"> 
        <h3> Asset : {{$staking->token}} - Ticker : {{$staking->ticker}} </h3> 
        <h5> Value : ${{number_format($staking->value)}} </h5> 
        <br>
        <div class="row">
            <div class="col-6">
                <a href="{{route('staking.show',$staking->id)}}" class="btn btn-block btn-primary"> More </a>    
            </div>   
            <div class="col-6">
                <form action="{{route('staking.destroy',$staking->id)}}" method="POST"> @csrf @method("DELETE") <button type="submit" class="btn btn-block btn-danger"> Delete </button> </form>
            </div>   
        </div> 
       </div>
       @endforeach

   </div>
</div>
@endsection