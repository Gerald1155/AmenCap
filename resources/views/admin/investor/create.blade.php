@extends('multiauth::layouts.app')
@section('content')
<title> Create credentials for investors </title>
<div class="container">
    <h4 class="mt-2">
        Create Credentials for investors
    </h4>
    <br>
   <div class="row">
    <div class="col-lg-12">
        <form action="{{route('investor.store')}}" method="post">
            @csrf
            @method("POST")
            <label> Name </label>
            <input type="text" class="form-control" name="name" placeholder="name">
            <br>
            <label> Email for login </label>
            <input type="text" class="form-control" name="email" placeholder="email">
            <br>
            <label> Balence </label>
            <input type="text" class="form-control" name="balence" placeholder="Balence">
            <br>
            <label> Password for login </label>
            <input type="text" class="form-control" name="password" placeholder="password" value="Generational2022">
            <br>
            <label> Password Confirmation </label>
            <input type="text" class="form-control" name="password_confirmation" value="Generational2022" placeholder="password confirmation">
            <br>
            <button type="submit" class="btn btn-block btn-primary"> Create credentials </button>
        </form>
    </div>
   </div>
</div>
@endsection