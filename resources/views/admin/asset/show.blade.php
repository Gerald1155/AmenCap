@extends('multiauth::layouts.app')
@section('content')
<div class="container">
    <h3 class="mt-2">
        Asset : {{$asset->token}}
    </h3>
    <table id="table" class="table table-hover" style="color:#14203b;border: 0.5px solid #14203b;">
        <thead>
        <tr>
           <th>Token</th>
           <th>Ticker</th>
           <th>Buy Date</th>
           <th>Sold Asset</th>
           <th>Exchange</th>
           <th>Buy Price </th>
           <th>Purchased Amount</th>
           <th>Amount Acquired</th>
           <th>Amount Spent</th>
           <th>Current Value Usd</th>
           <th>Profit Loss Number</th>
           <th>Profit Loss Percentage</th>
        </tr>
        </thead>
        <tbody>
           <tr>
              <td style="text-transform: capitalize">{{$asset->token}}</td>
              <td>{{$asset->ticker}}</td>
              <td>{{$asset->buy_date}}</td>
              <td>{{$asset->sold_asset}}</td>
              <td>{{$asset->exchange}}</td>
              <td>{{$asset->buy_price}}</td>
              <td>{{$asset->purchased_amount}}</td>
              <td>{{$asset->amount_acquired}}</td>
              <td>{{$asset->amount_spent}}</td>
              <td>${{$asset->current_value_usd}}</td>
              <td>{{$asset->profit_loss_number}}</td>
              <td>%{{$asset->profit_loss_percentage}}</td>
             
           </tr>
        </tbody>
     </table>

     <hr>
     @if ($asset->fee == true)
     <h3 class="mt-2">
        {{$asset->token}} Fees
     </h3>

     <table id="table" class="table table-hover" style="color:#14203b;border: 0.5px solid #14203b;">
        <thead>
        <tr>
           <th>Date</th>
           <th>Description</th>
           <th>Type Of Fee</th>
           <th>Currency Price</th>
           <th>Fee Currency</th>
           <th>Amount Fee Currency</th>
           <th>Amount Usd</th>
        </tr>
        </thead>
        <tbody>
           <tr>
              <td>{{$asset->fee->date}}</td>
              <td>{{$asset->fee->trx_description}}</td>
              <td>{{$asset->fee->type_of_fee}}</td>
              <td>{{$asset->fee->currency_price}}</td>
              <td>{{$asset->fee->fee_currency}}</td>
              <td>{{$asset->fee->amount_fee_currency}}</td>
              <td>$ {{$asset->fee->amount_usd}}</td>
           </tr>
        </tbody>
     </table>
     @else
      <h3 class="mt-2">
         No Fee Was Entered For This Asset
      </h3>
     @endif

</div>
@endsection