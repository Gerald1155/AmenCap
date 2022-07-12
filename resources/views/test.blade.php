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
        <div class="col-lg-12">
            @foreach ($balence as $value)
                <input type="hidden" class="balence" value="{{$value->balence}}">
            @endforeach
            <div class="isResizable">
                <div class="chart-container">
                  <canvas id="chart"></canvas>
                </div>
            </div>         
        </div>
    </div>
</div>

  <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
  <script
  src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"
  integrity="sha256-6XMVI0zB8cRzfZjqKcD01PBsAy3FlDASrlC8SxCpInY="
  crossorigin="anonymous"></script>

  <script>
            window.chartColors = {
            darkblue: '#14203b',
            blue: '#049cbc',
        };

        window.randomScalingFactor = function() {
            return (Math.random() > 0.5 ? 1.0 : -1.0) * Math.round(Math.random() * 100);
        };

            $array = [];
            $(".balence").each(function (index, element) {
                $array.push(element.value)                  
            });
            var config = {
            type: 'line',
            data: {
                labels: ["0h","1h","2h","3h","4h","5h","6h","7h","8h","9h","10h","11h","12h","13h","14h","15h","16h","17h","18h","19h","20h","21h","22h","23h","24h"],
                datasets: [{
                    label: "Last 24 Hours",
                    fill: false,
                    backgroundColor: window.chartColors.blue,
                    borderColor: window.chartColors.darkblue,
                    data: [
                       $array[0],
                       $array[1],
                       $array[2],
                       $array[3],
                       $array[4],
                       $array[5],
                       $array[6],
                       $array[7],
                       $array[8],
                       $array[9],
                       $array[10],
                       $array[11],
                       $array[12],
                       $array[13],
                       $array[14],
                       $array[15],
                       $array[16],
                       $array[17],
                       $array[18],
                       $array[19],
                       $array[20],
                       $array[21],
                       $array[22],
                       $array[23],
                    ],
                }]
            },
            options: {
                maintainAspectRatio: false,
                responsive: true,
                legend: {
                    position: 'top'
                },
                title: {
                    position: 'bottom',
                    display: true,
                    text:'Chart.js Resizable Chart'
                },
                tooltips: {
                    mode: 'index',
                    intersect: false,
                },
                hover: {
                    mode: 'nearest',
                    intersect: true
                },
                scales: {
                    xAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Hours'
                        }
                    }],
                    yAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Value'
                        }
                    }]
                }
            }
        };

        //Draw chart
        window.onload = function() {
            var ctx = document.getElementById("chart").getContext("2d");
            window.myLine = new Chart(ctx, config);
        };

        //Update type of chart 
        $('#updateChart').click(function(e) {
            var chart = window.myLine;
            var types = ['line', 'bar', 'bubble'];
        
            chart.config.type = types[Math.floor(Math.random()*3)];
            chart.destroy();

            var ctx = document.getElementById("chart").getContext("2d");
            window.myLine = new Chart(ctx, chart.config);
        });

  </script>
@endsection