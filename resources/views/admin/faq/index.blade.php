@extends('multiauth::layouts.app')
@section('content')
<div class="container">
    <h3 class="mt-2">
        Faq - <a href="{{route('faq.create')}}"> Create Faq </a>
    </h3>
    <br>
   <div class="row">
       @foreach ($faqs as $faq)
       <div class="col-lg-4 border p-3"> 
        <h3> Question : {{$faq->question}} </h3> 
        <br> 
        <div class="row">
            <div class="col-6">
                <a href="{{route('faq.show',$faq->id)}}" class="btn btn-block btn-primary"> More </a>    
            </div>   
            <div class="col-6">
                <form action="{{route('faq.destroy',$faq->id)}}" method="POST"> @csrf @method("DELETE") <button type="submit" class="btn btn-block btn-danger"> Delete </button> </form>
            </div>   
        </div> 
       </div>
       @endforeach

   </div>
</div>
@endsection