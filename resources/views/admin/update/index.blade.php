@extends('multiauth::layouts.app')
@section('content')

<div class="container">
    <h4> Don't leave the page until you see the success message </h4>
    <hr>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12 p-0 " style="display: none" id="messages">
            <div class="alert alert-success alert-dismissible" >
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Successful : </strong> <span id="success_message">  </span> 
            </div>
        </div>
        <div class="col-lg-12 p-0 " style="display: none" id="process">
            <div class="alert alert-warning alert-dismissible" >
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Processing : Don't Close the Tab or click any button </strong> 
            </div>
        </div>
        <div class="col-md-3 mt-2 mb-2 border p-3 ">
            <h4> Update 24 Hour </h4>
            <hr>
            <p> 1st </p>
            <button class="btn btn-block btn-primary" id="update_profit_loss_day"> Update Total Profit Loss </button>
            <hr>
            <p> 2nd</p>
            <button class="btn btn-block btn-primary" id="update_chart_day"> Update Balance and Chart </button>
        </div>
        <div class="col-md-3 mt-2 mb-2 border p-3 ">
            <h4> Update 7 days </h4>
            <hr>
            <p> 1st </p>
            <button class="btn btn-block btn-primary" id="update_profit_loss_week"> Update Total Profit Loss </button>
            <hr>
            <p> 2nd</p>
            <button class="btn btn-block btn-primary" id="update_chart_week"> Update Balance and Chart </button>
        </div>
        <div class="col-md-3 mt-2 mb-2 border p-3 ">
            <h4> Update 30 days </h4>
            <hr>
            <p> 1st </p>
            <button class="btn btn-block btn-primary" id="update_profit_loss_month"> Update Total Profit Loss </button>
            <hr>
            <p> 2nd</p>
            <button class="btn btn-block btn-primary" id="update_chart_month"> Update Balance and Chart </button>
        </div>
        
        <div class="col-md-3 mt-2 mb-2 border p-3 ">
            <h4> Update 3 Month </h4>
            <hr>
            <p> 1st </p>
            <button class="btn btn-block btn-primary" id="update_profit_loss_3month"> Update Total Profit Loss </button>
            <hr>
            <p> 2nd</p>
            <button class="btn btn-block btn-primary" id="update_chart_3month"> Update Balance and Chart </button>
        </div>

        <div class="col-md-3 mt-2 mb-2 border p-3 ">
            <h4> Update Year </h4>
            <hr>
            <p> 1st </p>
            <button class="btn btn-block btn-primary" id="update_profit_loss_year"> Update Total Profit Loss </button>
            <hr>
            <p> 2nd</p>
            <button class="btn btn-block btn-primary" id="update_chart_year"> Update Balance and Chart </button>
        </div>

    </div>
</div>
@endsection