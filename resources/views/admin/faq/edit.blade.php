@extends('multiauth::layouts.app')
@section('content')
<title> Edit Faq </title>
<div class="container">
    <h4 class="mt-2">
        Edit Faq : {{$faq->question}}
    </h4>
    <br>
   <div class="row">
    <div class="col-lg-12">
        <form action="{{route('faq.update',$faq->id)}}" method="post">
            @csrf
            @method("PATCH")
            <label> Question </label>
            <input type="text" class="form-control" name="question" value="{{$faq->question}}" placeholder="title">
            <br>
            <label> faq </label>
            <textarea name="answer" id="answer" cols="30" rows="10" class="form-control" placeholder="answer">{{$faq->answer}}</textarea>
            <br>
            <button type="submit" class="btn btn-block btn-primary"> Edit Faq </button>
        </form>
    </div>
   </div>
</div>


@endsection