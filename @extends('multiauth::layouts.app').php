@extends('multiauth::layouts.app')
@section('content')

<style>
  /* See http://www.chartjs.org/docs/latest/general/responsive.html */
  .chart-container {
    position: relative;
    height: 100%;
    width: 100%;
  }
  
  .isResizable {
    background-color: #ffffff;
    margin: 0px auto;
    padding: 5px;
    border: 1px solid #d8d8d8;
    overflow: hidden;
    /* Not usable in IE */
    /* resize: both; */
    
    width: 800px;
    height: 400px;
    min-width: 280px;
    min-height: 280px;
    max-width: 1200px;
    max-height: 600px;
  }
  
  #updateChart {
      background: white;
      border: 1px solid #d8d8d8;
      width: 160px;
      padding: 10px;
  }
</style>

<div class="container">
  <div class="row">
        <div class="col-lg-12">
              @foreach ($assets as $asset)
                  {{$asset->holdings * $bitcoinInfo->price}} <br>
              @endforeach
            <div>
                <canvas id="chart"></canvas>
              </div>
        </div>
    </div>
</div>


<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>


 
   
@endsection