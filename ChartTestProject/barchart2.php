<html>

<head>
    <style type="text/css">
        .chartBox {
            width: 400px;
        }
    </style>
</head>

<body>
    <div class="chartBox">
        <canvas id="myChart2"></canvas>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        //setup block

        const data = {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]

        };
        //option block

        const options2 = {
            plugins: {
                legend: {
                    display: true
                }
            },
            scales: {
            y: {
                beginAtZero: true
            }
        }
        };
        //config block
        const config2 = {
            type: 'bar',
            data,
            options2
        };


        //render block
        const myChart2 = new Chart(
            document.getElementById('myChart2'),
            config2
        );
    </script>

</body>

</html>