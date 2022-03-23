<?php

$connect = mysqli_connect("localhost", "root", "1234", "dashboard_project");


/*  $query = "SELECT 'site_name', 'site_code', 'follow_up_months', 'status', 'inspection_due_date', 'inspection_date' FROM 'rmp_data'";
    */
$query1 = "SELECT COUNT(site_code) as latecount FROM rmp_data WHERE status='LATE'";
$query2 = "SELECT COUNT(site_code) as ontimecount FROM rmp_data WHERE status ='ONTIME'";
$query3 = "SELECT COUNT(site_code) as duecount FROM rmp_data WHERE status = 'DUE'";


$result1 = mysqli_query($connect, $query1);



if (mysqli_num_rows($result1) > 0) {
    while ($row = mysqli_fetch_array($result1)) {
        $latecount = $row['latecount'];
    }
}
$result2 =  mysqli_query($connect, $query2);

if (mysqli_num_rows($result2) > 0) {
    while ($row = mysqli_fetch_array($result2)) {
        $ontimecount = $row['ontimecount'];
    }
}

$result3 = mysqli_query($connect, $query3);
if (mysqli_num_rows($result3) > 0) {
    while ($row = mysqli_fetch_array($result3)) {
        $duecount = $row['duecount'];
    }
} else {
    echo "DB result load failed";
    $latecount = "25";
    $ontimecount = "40";
    $duecount = "35";
}
/*  echo  $latecount;
    echo  $ontimecount;
    echo  $duecount; */
/*   if(mysqli_num_rows($result) > 0)
    {
      while ($row = mysqli_fetch_array($result))
      {
        $site_name = $row['site_name'];
        $site_code = $row['site_code'];
        $follow_up_months = $row['follow_up_months'];
        $status = $row['status'];
        $inspection_due_date = $row['inspection_due_date'];
        $inspection_date = $row['inspection_date'];

      }   
    }*/

mysqli_free_result($result1);
mysqli_free_result($result2);
mysqli_free_result($result3);
mysqli_close($connect);

?>

<html>

<head>
    <style type="text/css">
      /* pie chart css */
      
      .chartBox {
            width: 400px;
        }
        .reportTitle{
font-size: 18;
font-family: 'Courier New', Courier, monospace;
        }
/* bar chart css */

.chartBoxBarChart {
            width: 400px;
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
            labels: ['LATE', 'ONTIME', 'DUE'],
            datasets: [{
                label: '# of Assets',
                data: [<?php echo $latecount; ?>, <?php echo $ontimecount; ?>, 15 /* <?php echo $duecount; ?> */ ],
                backgroundColor: [
                   

            'rgba(255, 206, 86, 0.8)',
            'rgba(0, 204, 0,0.8)',
            'rgba(255, 26, 104, 0.5)'

                ],
                borderColor: [
                    'rgba(255, 206, 86,1)',
            'rgba(0, 204, 0,1)',
            'rgba(255, 26, 104, 1)'

                ],
                borderWidth: 1
            }]

        };
        //option block

        const options = {
            title: {
                display: true,
                text: 'ASSET INSPECTION REPORT - RMP',
                fontSize: 25
            },
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