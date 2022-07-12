@extends('multiauth::layouts.app')
@section('content')

<style>
body {
  padding: 16px;
  background-color: #e8e8e8;
}

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
        <div class="col-lg-6">
            {{-- each hour --}}
            {{-- prices of last 24 hour for one asset - now we have --}}
            @for ($i = 0; $i < 289; $i+=12)
            Date {{json_encode($chart_eth[$i][0])}}<br/>
            @endfor
          </div>
    </div>
</div>


@endsection