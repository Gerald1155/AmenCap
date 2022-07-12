window.chartColors = {
    darkblue: '#14203b',
    blue: '#049cbc',
};

window.randomScalingFactor = function() {
    return (Math.random() > 0.5 ? 1.0 : -1.0) * Math.round(Math.random() * 100);
};

    $array_week = [];
    $(".balence_week").each(function (index, element) {
        $array_week.push(element.value)                  
    });

    $array_week_dates = [];
    $(".balence_week_dates").each(function (index, element) {
        $array_week_dates.push(element.value)                  
    });
    var config = {
    type: 'line',
    data: {
        labels: [``+$array_week_dates[6]+``,``+$array_week_dates[5]+``,``+$array_week_dates[4]+``,``+$array_week_dates[3]+``,``+$array_week_dates[2]+``,``+$array_week_dates[1]+``,``+$array_week_dates[0]+``],
        datasets: [{
            label: "Last 7 Days",
            fill: false,
            backgroundColor: window.chartColors.blue,
            borderColor: window.chartColors.darkblue,
            data: [
               $array_week[6],
               $array_week[5],
               $array_week[4],
               $array_week[3],
               $array_week[2],
               $array_week[1],
               $array_week[0],
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
    var ctx = document.getElementById("chart_week").getContext("2d");
    window.myLine = new Chart(ctx, config);
};

//Update type of chart 
$('#updateChart').click(function(e) {
    var chart = window.myLine;
    var types = ['line', 'bar', 'bubble'];

    chart.config.type = types[Math.floor(Math.random()*3)];
    chart.destroy();

    var ctx = document.getElementById("chart_week").getContext("2d");
    window.myLine = new Chart(ctx, chart.config);
});
