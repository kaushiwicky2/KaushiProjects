<!-- <?php

$connect = mysqli_connect("localhost", "root", "1234", "charttesting");
$query = "SELECT * FROM account";
$result = mysqli_query($connect, $query);
$chart_data = '';
while ($row = mysqli_fetch_array($result)) {
    $chart_data .= "{ year:'" . $row["year"] . "', profit:" . $row["profit"] . ", purchase:" . $row["purchase"] . ", sale:" . $row["sale"] . "}, ";
}
$chart_data = substr($chart_data, 0, -2);
?> -->

<?php

$connect = mysqli_connect("localhost", "root", "1234", "dashboard_project");
$query = "SELECT * FROM rmp_data";
$result = mysqli_query($connect, $query);
$chart_data_sitecode = '';
while ($row = mysqli_fetch_array($result)) {
    $chart_data_sitecode .= "{ Site_Code:'" . $row["site_code"] . "'}, ";
}
$chart_data_sitecode = substr($chart_data_sitecode, 0, 2);

$chart_data_ontime = '';
$chart_data_ontime_count = 0;

while ($row = mysqli_fetch_array($result)) {
    if ( $row["status"]=='ONTIME'){
        $chart_data_ontime_count++;

    }
    
    $chart_data_ontime = "{ on_time:'" +$chart_data_ontime_count+ "'}, ";
}

$chart_data_due = '';
$chart_data_due_count = 0;

while ($row = mysqli_fetch_array($result)) {
    if ( $row["status"]=='DUE'){
        $chart_data_due_count++;

    }
    
    $chart_data_due = "{ due:'" +$chart_data_due_count+ "'}, ";
}
$chart_data_late = '';
$chart_data_late_count = 0;

while ($row = mysqli_fetch_array($result)) {
    if ( $row["status"]=='LATE'){
        $chart_data_late_count++;

    }
    
    $chart_data_late = "{ late:'" +$chart_data_late_count+ "'}, ";
}
?>


<!DOCTYPE html>
<html>
<head>
    <style>
        * {
            box-sizing: border-box;
        }

        .row {
            margin-left: -5px;
            margin-right: -5px;
        }

        .column {
            float: left;
            width: 50%;
            padding: 5px;
        }

        /* Clearfix (clear floats) */
        .row::after {
            content: "";
            clear: both;
            display: table;
            color: #111;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }

        th,
        td {
            text-align: left;
            padding: 16px;
            color: #222;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        /* Responsive layout - makes the two columns stack on top of each other instead of next to each other on screens that are smaller than 600 px */
        @media screen and (max-width: 600px) {
            .column {
                width: 100%;
            }
        }

        /* .pageContainer{

            background-color: #ddd;
         } */
        .reportTitle{
font-size: 18;
font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        .float-container {
    /* border: 3px solid #fff; */
    padding: 5px;

}

.float-child1 {
    width: 20%;
    float: left;
    padding-left: 15px;

}
.float-child2 {
    width: 80%;
    float: left;
    padding: 5px;


}
body{
    font-family:Verdana, Geneva, Tahoma, sans-serif;
}
    </style>

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

</head>

<body>
<div class="float-container">

  <div class="float-child1">
    <div class="green"><img src="images/logo_brimbank.png" alt="BrimBankLogo" width="100" height="90">
    </div>
  </div>

  <div class="float-child2">
    <div class="blue">
    <h1 class="reportTitle">
    ASSET INSPECTION REPORT - RMP
    </h1>
    </div>
  </div>

</div>
<div class="container" style="width:1200px;">
<table class="pageContainer">

<tr>
    <td style=" width: 40%;">
    <div class="green">
    <h3 align="center">Overall Asset Inspection Time Report</h3>
   <br /><br />
    <?php include 'index.php';?>
</td>
<td style="width: 60%;">
<div class="blue" style="width: 940px;"></div>
    <h3 align="center">Asset Inspections By Site Code</h3>
   <br /><br />


    <div id="chart"></div>

</td>
</tr>
</table>

   <div class="float-child3">

    </div>
  </div>

  <div class="float-child4">

    </div>
  </div>




  <!--  <div id="chart2"></div>
   <div id="chart3"></div>
   <div id="chart4"></div> -->
  </div>





</body>

</html>

<script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data_late; ?>],
 xkey:'year',
 ykeys:['on_time', 'due', 'late'],
 labels:['On Time', 'Due', 'Late'],
 hideHover:'auto',
 stacked:true
});

/* 
Morris.Line({
 element : 'chart2',
 data:[<?php echo $chart_data; ?>],
 xkey:'year',
 ykeys:['profit', 'purchase', 'sale'],
 labels:['Profit', 'Purchase', 'Sale'],
 hideHover:'auto',
});


Morris.Area({
 element : 'chart3',
 data:[<?php echo $chart_data; ?>],
 xkey:'year',
 ykeys:['profit', 'purchase', 'sale'],
 labels:['Profit', 'Purchase', 'Sale'],
 hideHover:'auto',
});

Morris.Bar({
 element : 'chart4',
 data:[<?php echo $chart_data; ?>],
 xkey:'year',
 ykeys:['profit', 'purchase', 'sale'],
 labels:['Profit', 'Purchase', 'Sale'],
 hideHover:'auto'
}); */
</script>

