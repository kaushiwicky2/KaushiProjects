<html>

<head>
    <style type="text/css">
        .chartBox {
            width: 500px;
        }
    </style>
</head>

<body>
    <div class="chartBox">
        <canvas id="myChart"></canvas>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        //setup block

        const data = {
            labels: ['On Time', 'Due', 'Late'],
            datasets: [{
                label: 'Asset Ins[ection Time Categories',
                data: [45, 25, 30],
                backgroundColor: [
                    /* 'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)', */

                    'rgb(77, 167, 77)',
            'rgb(122, 146, 163)',
            'rgb(11, 98, 164)',
                    
                ],
                borderColor: [
                   /*  'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)', */
                  
                    'rgb(77, 167, 77)',
            'rgb(122, 146, 163)',
            'rgb(11, 98, 164)',
                ],
                borderWidth: 1
            }]

        };
        //option block

        const options = {
            plugins: {
                legend: {
                    display: true
                }
            }
        };
        //config block
        const config = {
            type: 'pie',
            data,
            options
        };


        //render block
        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
    </script>

</body>

</html>