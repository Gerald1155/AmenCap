@extends('multiauth::layouts.app')
@section('content')
<div class="container">
    <h3 class="mt-2">
        Asset - <a href="{{route('asset.create')}}"> Add a new asset </a>
    </h3>
    <br>
   <div class="row">
       @foreach ($assets as $asset)
       <div class="col-lg-4 border p-3"> 
        <h3> Asset : {{$asset->token}} </h3> 
        <br> 
        <div class="row">
            <div class="col-6">
                <a href="{{route('asset.show',$asset->id)}}" class="btn btn-block btn-primary"> More </a>    
            </div>   
            <div class="col-6">
                <form action="{{route('asset.destroy',$asset->id)}}" method="POST"> @csrf @method("DELETE") <button type="submit" class="btn btn-block btn-danger"> Delete </button> </form>
            </div>   
        </div> 
       </div>
       @endforeach

   </div>
</div>
@endsection