<html>

<head>
    <style type="text/css">
        .chartBoxBarChart {
            width: 400px;
        }
    </style>
</head>

<body>
    <div class="chartBoxBarChart">
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
                labelLinks: ['https://www.google.com', 'https://www.amazon.com', 'https://www.google.com', 'https://www.amazon.com', 'https://www.google.com', 'https://www.google.com'],
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

        //config block
        const config2 = {
            type: 'bar',
            data,
            options: {
                indexAxis: 'y',
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        };


        //render block
        const myChart2 = new Chart(
            document.getElementById('myChart2'),
            config2
        );



        function clickableScales(chart, click) {
            const {
                ctx,
                canvas,
                scales: {
                    x,
                    y
                }
            } = chart;
            const top = y.top
            const left = y.left
            const right = y.right
            const bottom = y.bottom
           const height= y.height / y.ticks.length;

            //mouse coordinates
            let rect = canvas.getBoundingClientRect();
            const xCoor = click.clientX - rect.left;

            const yCoor = click.clientY - rect.top;

            for (let i = 0; i < y.ticks.length; i++) {
                if (xCoor >= left && xCoor <= right && yCoor >= top + (height * i) && yCoor <= top + height + (height * i)) {
                    console.log(chart.data.datasets[0].labelLinks[i]);
                    window.open(chart.data.datasets[0].labelLinks[i]);
                    /*   ctx.fillStyle = 'grey';
                      ctx.rect(left,top+(height*i),right,height);
                          ctx.fill();
                       */
                }
            }
        }

        myChart2.canvas.addEventListener('click', (e) => {
            clickableScales(myChart2, e)
        });
    </script>

</body>

</html>