<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bar Chart Test 1</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }

        .chartMenu {
            width: 100vw;
            height: 40px;
            background: #1A1A1A;
            color: rgba(255, 26, 104, 1);
        }

        .chartMenu p {
            padding: 10px;
            font-size: 20px;
        }

        .chartCard {
            width: 100vw;
            height: calc(100vh - 40px);
            background: rgba(255, 26, 104, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .chartBox {
            width: 700px;
            padding: 20px;
            border-radius: 20px;
            border: solid 3px rgba(255, 26, 104, 1);
            background: white;
        }
    </style>
</head>

<body>
  
    <div class="chartCard">
        <div class="chartBox">
            <canvas id="myChart"></canvas>
        </div>
    </div>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // setup 
        const data = {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            datasets: [{
                    label: 'Weekly Sales',
                    data: [18, 12, 6, 9, 12, 3, 9],
                    backgroundColor: 'rgba(255, 26, 104, 0.2)',
                    borderColor: 'rgba(255, 26, 104, 1)',
                    tension: 0.4,
                    yAxisID: 'y'
                },

                {
                    label: 'Percentage',
                    data: [10, 22, 36, 49, 52, 63, 79],
                    backgroundColor: 'rgba(0, 26, 104, 0.2)',
                    borderColor: 'rgba(0, 26, 104, 1)',
                    tension: 0.4,
                    yAxisID: 'percentage'
                }
            ]
        };

        // config 
        const config = {
            type: 'line',
            data,
            options: {
                scales: {
                    x:{
                        title:{
                            display:true,
                            text:'Days of the Week'
                        },
                    },
                    y: {
                        beginAtZero: true,
                        title:{
                            display:true,
                            text:'Weekly Sales in $'
                        },
                        type: 'linear',
                        position: 'left'
                    },
                    percentage: {
                        beginAtZero: true,
                        title:{
                            display:true,
                            text:'Weekly Sale %'
                        },
                        type: 'linear',
                        position: 'right',
                        grid: {
                            drawOnChartArea: false
                        },
                        ticks: {
                            callback: function(value , index , ticks ) {
                                return value+'%';
                            }
                        }
                    }
                }
            }
        };

        // render init block
        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
    </script>

</body>

</html>