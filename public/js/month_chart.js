window.chartColors = {
    darkblue: '#14203b',
    blue: '#049cbc',
};

window.randomScalingFactor = function() {
    return (Math.random() > 0.5 ? 1.0 : -1.0) * Math.round(Math.random() * 100);
};

    $array_month = [];
    $(".balence_month").each(function (index, element) {
        $array_month.push(element.value)                  
    });

    $array_month_dates = [];
    $(".balence_month_dates").each(function (index, element) {
        $array_month_dates.push(element.value)                  
    });
    var config = {
    type: 'line',
    data: {
        labels: [``+$array_month_dates[9]+``,``+$array_month_dates[8]+``,``+$array_month_dates[7]+``,``+$array_month_dates[6]+``,``+$array_month_dates[5]+``,``+$array_month_dates[4]+``,``+$array_month_dates[3]+``,``+$array_month_dates[2]+``,``+$array_month_dates[1]+``,``+$array_month_dates[0]+``],
        datasets: [{
            label: "Last 30 Days",
            fill: false,
            backgroundColor: window.chartColors.blue,
            borderColor: window.chartColors.darkblue,
            data: [
               $array_month[9],
               $array_month[8],
               $array_month[7],
               $array_month[6],
               $array_month[5],
               $array_month[4],
               $array_month[3],
               $array_month[2],
               $array_month[1],
               $array_month[0],
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
    var ctx = document.getElementById("chart_month").getContext("2d");
    window.myLine = new Chart(ctx, config);
};

//Update type of chart 
$('#updateChart').click(function(e) {
    var chart = window.myLine;
    var types = ['line', 'bar', 'bubble'];

    chart.config.type = types[Math.floor(Math.random()*3)];
    chart.destroy();

    var ctx = document.getElementById("chart_month").getContext("2d");
    window.myLine = new Chart(ctx, chart.config);
});
