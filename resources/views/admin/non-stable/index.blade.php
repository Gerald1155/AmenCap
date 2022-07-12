@extends('multiauth::layouts.app')
@section('content')
<div class="container">
    <h3 class="mt-2">
        Stable Coins - <a href="{{route('nonstable.create')}}"> Add a new Non Stable Coin </a>
    </h3>
    <br>
   <div class="row">
       @foreach ($coins as $coin)
       <div class="col-lg-4 border p-3"> 
        <h3> Coin : {{$coin->token}} - Ticker : {{$coin->ticker}} </h3> 
        <h5> Profit / Loss : ${{number_format($coin->profit_loss_number)}} </h5> 
        <h5> Profit / Loss % : {{number_format($coin->profit_loss_precentage)}}% </h5> 
        <h5> Total Value : ${{number_format($coin->total_value)}} </h5> 
        <br>
        <div class="row">
            <div class="col-6">
                <a href="{{route('nonstable.show',$coin->id)}}" class="btn btn-block btn-primary"> More </a>    
            </div>   
            <div class="col-6">
                <form action="{{route('nonstable.destroy',$coin->id)}}" method="POST"> @csrf @method("DELETE") <button type="submit" class="btn btn-block btn-danger"> Delete </button> </form>
            </div>   
        </div> 
       </div>
       @endforeach

   </div>
</div>
@endsection