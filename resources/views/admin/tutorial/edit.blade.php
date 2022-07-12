@extends('multiauth::layouts.app')
@section('content')
<title> Create tutorial </title>
<div class="container">
    <h4 class="mt-2">
        Edit tutorial : {{$tutorial->name}}
    </h4>
    <br>
   <div class="row">
    <div class="col-lg-12">
        <form action="{{route('tutorial.update',$tutorial->id)}}" method="post">
            @csrf
            @method("PATCH")
            <label> Name </label>
            <input type="text" class="form-control" name="name" value="{{$tutorial->name}}" placeholder="name">
            <br>
            <br>
            <label> Short Description </label>
            <textarea name="short_des" class="form-control" cols="30" rows="10" placeholder="short description">{{$tutorial->short_des}}</textarea>
            <br>
            <label> tutorial </label>
            <textarea name="tutorial" id="tutorial" cols="30" rows="10" placeholder="tutorial">{!! $tutorial->tutorial !!}</textarea>
            <br>
            <button type="submit" class="btn btn-block btn-primary"> Edit Tutorial </button>
        </form>
    </div>
   </div>
</div>
<script src="https://cdn.ckeditor.com/4.17.1/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'tutorial' );
</script>

@endsection