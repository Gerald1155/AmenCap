@extends('multiauth::layouts.app')
@section('content')
<div class="container p-3">
    <h3 class="mt-2">
        FAQ: {{$faq->question}}
    </h3>
   <div class="row">
            <div class="col-lg-12 border mt-3 mb-3 p-1"> 
                <div class="row">
                    <div class="col-lg-12 p-3">
                        <h4> {{$faq->question}} </h4>
                        <hr>
                        {{$faq->answer}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <a href="{{route('faq.edit',$faq->id)}}" class="btn btn-block btn-primary"> Edit </a>    
                    </div>   
                    <div class="col-6">
                        <form action="{{route('faq.destroy',$faq->id)}}" method="POST"> @csrf @method("DELETE") <button type="submit" class="btn btn-block btn-danger"> Delete </button> </form>
                    </div>   
                </div> 
               </div>
   </div>
</div>
@endsection