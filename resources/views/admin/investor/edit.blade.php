@extends('multiauth::layouts.app')
@section('content')
<title> Update credentials for investors </title>
<div class="container">
    <h4 class="mt-2">
        Update Credentials for investors
    </h4>
    <br>
   <div class="row">
    <div class="col-lg-12">
        <form action="{{route('investor.update',$investor->id)}}" method="post">
            @csrf
            @method("PATCH")
            <label> Name </label>
            <input type="text" class="form-control" name="name" value="{{$investor->name}}" placeholder="name">
            <br>
            <label> Email for login </label>
            <input type="text" class="form-control" name="email" value="{{$investor->email}}"  placeholder="email">
            <br>
            <label> Balence - Current Balence : {{number_format($investor->balence,0)}} </label>
            <input type="text" class="form-control" name="balence" placeholder="Balence" value="{{$investor->balence}}">
            <br>
            <label> Password for login </label>
            <input type="text" class="form-control" name="password" placeholder="password">
            <br>
            
            <label> Password Confirmation </label>
            <input type="text" class="form-control" name="password_confirmation" placeholder="password confirmation">
            <br>
            <button type="submit" class="btn btn-block btn-primary"> Update credentials  </button>
        </form>
    </div>
   </div>
</div>
@endsection