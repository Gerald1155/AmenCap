@extends('multiauth::layouts.app')
@section('content')
<div class="container">
    <h3 class="mt-2">
        Tutorial: {{$tutorial->name}}
    </h3>
   <div class="row">
            <div class="col-lg-12 border mt-3 mb-3 p-1"> 
                <div class="row">
                    <div class="col-lg-4">
                        <img src="{{$tutorial->cover()}}" class="img-thumbnail mb-2" alt="cover">
                    </div>
                    <div class="col-lg-8 p-3">
                        <h4> {{$tutorial->name}} </h4>
                        <hr>
                        {!! $tutorial->tutorial !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <a href="{{route('tutorial.edit',$tutorial->id)}}" class="btn btn-block btn-primary"> Edit </a>    
                    </div>   
                    <div class="col-6">
                        <form action="{{route('tutorial.destroy',$tutorial->id)}}" method="POST"> @csrf @method("DELETE") <button type="submit" class="btn btn-block btn-danger"> Delete </button> </form>
                    </div>   
                </div> 
               </div>
   </div>
</div>
@endsection