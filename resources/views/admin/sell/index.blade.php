@extends('multiauth::layouts.app')
@section('content')
<div class="container">
    <h3 class="mt-2">
        Sold Assets
    </h3>
    <table id="table" class="table table-hover" style="color:#14203b;border: 0.5px solid #14203b;">
        <thead>
        <tr>
           <th>Token</th>
           <th>Sell Date</th>
           <th>Sell Price</th>
           <th>Sold Amount</th>
           <th>Sell Fee</th>
           <th>Sell Fee USD</th>
           <th>Total Sold Price</th>
           <th>Current Holdings Total</th>
           <th>Profit Loss Number</th>
           <th>Profit Loss Percentage</th>
           <th>Edit</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($sold as $i=>$sell)
           <tr>
              <td style="text-transform: capitalize">{{$sell->token}}</td>
              <td>{{$sell->sell_date}}</td>
              <td>$ {{number_format($sell->sell_price)}}</td>
              <td>{{$sell->sell_amount}}</td>
              <td>{{$sell->sell_fee}}</td>
              <td>${{$sell->sell_fee_usd}}</td>
              <td>${{number_format($sell->total_sold_price)}}</td>
              <td>${{$sell->current_holdings_total}}</td>
              <td>${{number_format($sell->profit_loss_number)}}</td>
              <td>{{$sell->profit_loss_percentage}}%</td>
              <td> <a href="{{route("sell.edit",$sell->id)}}"> Edit </a> </td>
           </tr>
        @endforeach
        </tbody>
     </table>
</div>
@endsection