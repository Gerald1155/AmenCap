@extends('multiauth::layouts.app')
@section('content')
<title> Create FAQ </title>
<div class="container">
    <h4 class="mt-2">
        Create FAQ
    </h4>
    <br>
   <div class="row">
    <div class="col-lg-12">
        <form action="{{route('faq.store')}}" method="post">
            @csrf
            @method("POST")
            <label> Question </label>
            <input type="text" class="form-control" name="question" placeholder="Question">
            <br>
            <label> Answer </label>
            <textarea name="answer" id="answer" class="form-control" cols="30" rows="10" placeholder="answer"></textarea>
            <br>
            <button type="submit" class="btn btn-block btn-primary"> Create FAQ </button>
        </form>
    </div>
   </div>
</div>

@endsection