@extends('multiauth::layouts.app')
@section('content')
<title> Create tutorial </title>
<div class="container">
    <h4 class="mt-2">
        Create tutorial
    </h4>
    <br>
   <div class="row">
    <div class="col-lg-12">
        <form action="{{route('tutorial.store')}}" method="post">
            @csrf
            @method("POST")
            <label> Name </label>
            <input type="text" class="form-control" name="name" placeholder="name">
            <br>
            <label> Short Description </label>
            <textarea name="short_des" class="form-control" cols="30" rows="10" placeholder="short description"></textarea>
            <br>
            <label> Tutorial Content </label>
            <textarea name="tutorial" id="tutorial" cols="30" rows="10"></textarea>
            <br>
            <button type="submit" class="btn btn-block btn-primary"> Create tutorial and add a images  </button>
        </form>
    </div>
   </div>
</div>
<script src="https://cdn.ckeditor.com/4.17.1/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'tutorial' );
</script>

@endsection