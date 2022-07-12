@extends('multiauth::layouts.app')
@section('content')
<title> Create Blog </title>
<div class="container">
    <h4 class="mt-2">
        Create Blog
    </h4>
    <br>
   <div class="row">
    <div class="col-lg-12">
        <form action="{{route('blog.store')}}" method="post">
            @csrf
            @method("POST")
            <label> Title </label>
            <input type="text" class="form-control" name="title" placeholder="title">
            <br>
            <label> Short Description </label>
            <textarea name="short_des" class="form-control" cols="30" rows="10" placeholder="short description"></textarea>
            <br>
            <label> Blog </label>
            <textarea name="blog" id="blog" cols="30" rows="10" placeholder="blog"></textarea>
            <br>
            <button type="submit" class="btn btn-block btn-primary"> Create Blog and add a images  </button>
        </form>
    </div>
   </div>
</div>
<script src="https://cdn.ckeditor.com/4.17.1/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'blog' );
</script>

@endsection