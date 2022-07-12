@extends('multiauth::layouts.app')
@section('content')
<title> Edit Blog </title>
<div class="container">
    <h4 class="mt-2">
        Edit Blog : {{$blog->title}}
    </h4>
    <br>
   <div class="row">
    <div class="col-lg-12">
        <form action="{{route('blog.update',$blog->id)}}" method="post">
            @csrf
            @method("PATCH")
            <label> Title </label>
            <input type="text" class="form-control" name="title" value="{{$blog->title}}" placeholder="title">
            <br>
            <label> Short Description </label>
            <textarea name="short_des" class="form-control" cols="30" rows="10" placeholder="short description">{{$blog->short_des}}</textarea>
            <br>
            <label> Blog </label>
            <textarea name="blog" id="blog" cols="30" rows="10" placeholder="blog">{!! $blog->blog !!}</textarea>
            <br>
            <button type="submit" class="btn btn-block btn-primary"> Edit Blog </button>
        </form>
    </div>
   </div>
</div>
<script src="https://cdn.ckeditor.com/4.17.1/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'blog' );
</script>

@endsection