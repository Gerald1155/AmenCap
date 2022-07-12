@extends('multiauth::layouts.app')
@section('content')
<div class="container">
    <h3 class="mt-2">
        Non Stable Coin Staking Earnings : {{$coin->token}} - {{$coin->ticker}}
    </h3>
     <div class="row">
            <div class="col-lg-12  mt-3 mb-3"> 
                <div class="row table-responsive" style="display: block;margin-left:auto;margin-right:auto;">
                    <table id="table" class="table table-hover " style="color:#14203b;border: 0.5px solid #14203b;">
                        <thead>
                        <tr>
                           <th>Token</th>
                           <th>Ticker</th>
                           <th>Date</th>
                           <th>Amount Earned</th>
                           <th>Value(USD)</th>
                        </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td style="text-transform: capitalize">{{$coin->token}}</td>
                              <td>{{$coin->ticker}}</td>
                              <td>{{$coin->date}}</td>
                              <td>{{$coin->amount_earned}}</td>
                              <td>${{number_format($coin->value,2)}}</td>
                           </tr>
                        </tbody>
                     </table>
                </div>  
          </div>
          <div class="col-6">
            <a href="{{route('staking.edit',$coin->id)}}" class="btn btn-block" style="background: #14203b;color:white"> Edit </a>    
          </div>   
          <div class="col-6 ">
                <form action="{{route('staking.destroy',$coin->id)}}" method="POST"> @csrf @method("DELETE") <button type="submit" class="btn btn-block" style="color:white;background:#14203b "> Delete </button> </form>
          </div> 
        </div>
   
</div>
@endsection