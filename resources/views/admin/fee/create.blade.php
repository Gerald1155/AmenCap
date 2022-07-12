@extends('multiauth::layouts.app')
@section('content')
<title> Add a new asset  </title>
<div class="container">
    <h4 class="mt-2">
        Adding Fee For {{$asset->token}} . 
    </h4>
    <h5> Fee isn't required.  </h5>
    <br>
   <div class="row">
    <div class="col-lg-12">
        <form action="{{route('fee.store')}}" method="post">
            @csrf
            @method("POST")
            <div class="row mb-3">
               <input type="hidden" name="asset_id" value="{{$asset->id}}">
                <div class="col-lg-4 mt-2">
                    <label> * Date </label>
                    <input type="text" class="form-control" name="date">
                </div>
                <div class="col-lg-4 mt-2">
                    <label> * Trx Description </label>
                    <input type="text" class="form-control" name="trx_description">
                </div>
                <div class="col-lg-4 mt-2">
                    <label> * Type of Fee </label>
                    <input type="text" class="form-control" name="type_of_fee">
                </div>
                <div class="col-lg-4 mt-2">
                    <label> * Currency Price </label>
                    <input type="text" class="form-control" name="currency_price">
                </div>
                <div class="col-lg-4 mt-2">
                    <label> * Fee Currency</label>
                    <input type="text" class="form-control" name="fee_currency">
                </div>
                <div class="col-lg-4 mt-2">
                    <label> * Amount (Fee Currency)</label>
                    <input type="text" class="form-control" name="amount_fee_currency">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <button type="submit" class="btn btn-block btn-primary"> Add Fee for {{$asset->token}} </button>
                </div>
                <div class="col-6">
                    <a href="{{route("admin.home")}}" class="btn btn-block btn-success"> Home </a>
                </div>
            </div>

        </form>
    </div>
   </div>
</div>


@endsection