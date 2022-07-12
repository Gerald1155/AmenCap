window.chartColors = {
    darkblue: '#14203b',
    blue: '#049cbc',
};

window.randomScalingFactor = function() {
    return (Math.random() > 0.5 ? 1.0 : -1.0) * Math.round(Math.random() * 100);
};

    $array_year = [];
    $(".balence_year").each(function (index, element) {
        $array_year.push(element.value)                  
    });

    $array_year_dates = [];
    $(".balence_year_dates").each(function (index, element) {
        $array_year_dates.push(element.value)                  
    });
    var config = {
    type: 'line',
    data: {
        labels: $array_year_dates.reverse(),
        datasets: [{
            label: "Balance Of Year",
            fill: false,
            backgroundColor: window.chartColors.blue,
            borderColor: window.chartColors.darkblue,
            data: $array_year.reverse(),
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
    var ctx = document.getElementById("chart_year").getContext("2d");
    window.myLine = new Chart(ctx, config);
};

//Update type of chart 
$('#updateChart').click(function(e) {
    var chart = window.myLine;
    var types = ['line', 'bar', 'bubble'];

    chart.config.type = types[Math.floor(Math.random()*3)];
    chart.destroy();

    var ctx = document.getElementById("chart_year").getContext("2d");
    window.myLine = new Chart(ctx, chart.config);
});
