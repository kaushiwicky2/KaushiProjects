<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
            /* background: rgba(255, 26, 104, 0.2); */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .chartBox {
            width: 600px;
            padding: 20px;
            border-radius: 20px;
        /*     border: solid 3px rgba(255, 26, 104, 1); */
            background: white;
        }
    </style>
</head>

<body>

    <div class="chartCard">
        <div class="chartBox">
            <canvas id="myChart"></canvas>
            <canvas id="myChart2"></canvas>
        </div>
    </div>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // setup 
        const data = {
            //  labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            datasets: [{
                    label: 'Weekly Sales',
                    data: [{
                            x: 'IT',
                            y: 18,
                            sales: [1, 2, 3, 4, 5, 6, 0]
                        },
                        {
                            x: 'Drink',
                            y: 12,
                            sales: [1, 2, 3, 4, 5, 6, 1]
                        },
                        {
                            x: 'Fruit',
                            y: 6,
                            sales: [1, 2, 3, 4, 5, 6, 2]
                        },
                        {
                            x: 'Flower',
                            y: 9,
                            sales: [1, 2, 3, 4, 5, 6, 3]
                        },
                        {
                            x: 'Tree',
                            y: 12,
                            sales: [1, 2, 3, 4, 5, 6, 4]
                        },
                        {
                            x: 'CLothes',
                            y: 3,
                            sales: [1, 2, 3, 4, 5, 6, 5]
                        },
                        {
                            x: 'Food',
                            y: 9,
                            sales: [1, 2, 3, 4, 5, 6, 6]
                        },
                    ],
                    backgroundColor: [
                        'rgba(255, 26, 104, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(0, 0, 0, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 26, 104, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(0, 0, 0, 1)'
                    ],
                    borderWidth: 1
                },
                {
                    label: 'Weekly Cost',
                    data: [{
                            x: 'IT',
                            y: 18,
                            cost: [9, 2, 3, 4, 5, 6, 0]
                        },
                        {
                            x: 'Drink',
                            y: 12,
                            cost: [9, 2, 3, 4, 5, 6, 1]
                        },
                        {
                            x: 'Fruit',
                            y: 6,
                            cost: [9, 2, 3, 4, 5, 6, 2]
                        },
                        {
                            x: 'Flower',
                            y: 9,
                            cost: [9, 2, 3, 4, 5, 6, 3]
                        },
                        {
                            x: 'Tree',
                            y: 12,
                            cost: [9, 2, 3, 4, 5, 6, 4]
                        },
                        {
                            x: 'CLothes',
                            y: 3,
                            cost: [9, 2, 3, 4, 5, 6, 5]
                        },
                        {
                            x: 'Food',
                            y: 9,
                            cost: [9, 2, 3, 4, 5, 6, 6]
                        },
                    ],
                    backgroundColor: [
                        'rgba(255, 26, 104, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(0, 0, 0,1)'
                    ],
                    borderColor: [
                        'rgba(255, 26, 104, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(0, 0, 0, 1)'
                    ],
                    borderWidth: 1
                }
            ]
        };
        // config 
        const config = {
            type: 'bar',
            data,
            options: {

                scales: {
                    x: {
                        stacked: true
                    },

                    y: {
                        stacked: true,
                        beginAtZero: true
                    }


                }
            }
        };



        // render init block

        const ctx = document.getElementById('myChart');
        const myChart = new Chart(
            ctx,
            config
        );

        //chart  nu 2

        const data2 = {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            datasets: [{
                label: 'Weekly Sales',
                data: [18, 12, 6, 9, 12, 3, 9],
                backgroundColor: 'rgba(0, 0, 0, 0.2)',
                borderColor: 'rgba(0, 0, 0, 1)',

                borderWidth: 1
            }]
        };
        // config 
        const config2 = {
            type: 'bar',
            data: data2,
            options: {
                scales: {
                    y: {

                        beginAtZero: true
                    }
                }
            }
        };

        // render init block
        const myChart2 = new Chart(
            document.getElementById('myChart2'),
            config2
        );

        function clickHandler(click) {
            const points = myChart.getElementsAtEventForMode(click, 'nearest', {
                intersect: true
            }, true);
            if (points.length == 1) {
                const bg = points[0].element.options.backgroundColor;
                const bc = points[0].element.options.borderColor;
                const label = points[0].element.$context.raw.x;
                
//                datasets / index



                const cost = points[0].element.$context.raw.cost;
                const sales = points[0].element.$context.raw.sales;
                console.log(points[0].index);
                console.log(points[0].datasetIndex);
                
                

                myChart2.config.data.datasets[0].backgroundColor = bg;
                myChart2.config.data.datasets[0].borderColor = bc;
                myChart2.config.data.datasets[0].label = label;

                if (points[0].datasetIndex==0) {
                    myChart2.config.data.datasets[0].data = sales;                } else {
                    
                }
                if (points[0].datasetIndex==1) {
                    myChart2.config.data.datasets[0].data = cost;                } else {
                    
                }
               
                myChart2.update();
            }

            console.log(points.length);

        }

        ctx.onclick = clickHandler;
    </script>

</body>

</html>