@extends('multiauth::layouts.app')
@section('content')
<div class="container">
    <h3 class="mt-2">
        Stable Coin : {{$coin->token}} - {{$coin->ticker}}
    </h3>
     <div class="row">
            <div class="col-lg-12  mt-3 mb-3"> 
                <div class="row table-responsive" style="display: block;margin-left:auto;margin-right:auto;">
                    <table id="table" class="table table-hover " style="color:#14203b;border: 0.5px solid #14203b;">
                        <thead>
                        <tr>
                           <th>Token</th>
                           <th>Ticker</th>
                           <th>Avg Price</th>
                           <th>Purchased Amount</th>
                           <th>Holdings</th>
                           <th>Amount Spent</th>
                           <th>Staking Earnings</th>
                           <th>Profit Loss (USD)</th>
                           <th>Profit Loss (%)</th>
                           <th>Total Value</th>
                        </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td style="text-transform: capitalize">{{$coin->token}}</td>
                              <td>{{$coin->ticker}}</td>
                              <td>${{$coin->avg_buy_price}}</td>
                              <td>${{number_format($coin->purchased_amount,2)}}</td>
                              <td>{{$coin->holdings}}</td>
                              <td>${{$coin->amount_spent}}</td>
                              <td>{{number_format($coin->staking_earnings,2)}}</td>
                              <td>${{number_format($coin->profit_loss_number,2)}}</td>
                              <td>{{$coin->profit_loss_precentage}}%</td>
                              <td>${{number_format($coin->total_value,2)}}</td>
                           </tr>
                        </tbody>
                     </table>
                </div>  
          </div>
          <div class="col-6">
            <a href="{{route('stable.edit',$coin->id)}}" class="btn btn-block" style="background: #14203b;color:white"> Edit </a>    
          </div>   
          <div class="col-6 ">
                <form action="{{route('stable.destroy',$coin->id)}}" method="POST"> @csrf @method("DELETE") <button type="submit" class="btn btn-block" style="color:white;background:#14203b "> Delete </button> </form>
          </div> 
        </div>
   
</div>
@endsection