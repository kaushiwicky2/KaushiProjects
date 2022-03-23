

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

        .pageContainer{

           /*   background-color: #ddd; */
         }
        .reportTitle{
font-size: 18;
font-family: 'Verdana, Geneva, Tahoma, sans-serif';
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


    #area-chart,
#line-chart,
#bar-chart,
#stacked,
#pie-chart{
  min-height: 250px;
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
    <h3 align="center">Overall Asset Inspection Time View</h3>
   <br /><br />
    <?php include 'index.php';?>
</td>
<td style="width: 60%;">
<div class="blue" style="width: 940px;"></div>
    <h3 align="center">Asset Inspections In Each Site</h3>
   <br /><br />

   <div class"row">
   <div  class="col-sm-6 text-center">
             <div id="stacked" ></div>
   </div>
   </div>
</td>
</tr>
</table>

   <div class="float-child3">

    </div>
  </div>

  <div class="float-child4">

    </div>
  </div>



  <br /><br />

   <div id="line-chart"></div><br /><br />

   <div id="area-chart"></div><br /><br />

   <div id="pie-chart"></div><br /><br />

   <div id="bar-chart"></div><br /><br />

  </div>





</body>

</html>

<script>
    const data2 = [
        
      { y: 'PM-PZ2 Mowing WAM 6', a: 50, b: 90, c:50},
      { y: 'PM-PZ3 Mowing VicRoads Area', a: 65,  b: 75, c:30},
      { y: 'SG S Win/Sum RideOnMow Monthly', a: 50,  b: 50, c:20},
      { y: 'SG S Summer Mow Twice Weekly', a: 75,  b: 60, c:10},
      { y: 'SG-Sportsground Detail Monthly', a: 80,  b: 65, c:70},
      { y: 'PM-PZ1 Z1PS PreSchools', a: 90,  b: 70, c:60},
      { y: 'PM-PZ2 Mowing WAM 2 ', a: 100, b: 75, c:20},
      { y: 'PM-PZ2 Mowing WAM 1 ', a: 115, b: 75, c:40},
    ],
    config2 = {
      data: data2,
      xkey: 'y',
      ykeys: ['a', 'b','c'],
      labels: ['On Time', 'Due','Late'],
      fillOpacity: 0.6,
      hideHover: 'auto',
      behaveLikeLine: true,
      resize: true,
      pointFillColors:['#ffffff'],
      pointStrokeColors: ['black'],
      lineColors:['gray','red']
  };


  var data3 = [
      { y: '2014', a: 50, b: 90},
      { y: '2015', a: 65,  b: 75},
      { y: '2016', a: 50,  b: 50},
      { y: '2017', a: 75,  b: 60},
      { y: '2018', a: 80,  b: 65},
      { y: '2019', a: 90,  b: 70},
      { y: '2020', a: 100, b: 75},
      { y: '2021', a: 115, b: 75},
      { y: '2022', a: 120, b: 85},
      { y: '2023', a: 145, b: 85},
      { y: '2024', a: 160, b: 95}
    ],
    config3 = {
      data: data3,
      xkey: 'y',
      ykeys: ['a', 'b'],
      labels: ['Total Income', 'Total Outcome'],
      fillOpacity: 0.6,
      hideHover: 'auto',
      behaveLikeLine: true,
      resize: true,
      pointFillColors:['#ffffff'],
      pointStrokeColors: ['black'],
      lineColors:['gray','red']
  };
config3.element = 'area-chart';
Morris.Area(config3);
config3.element = 'line-chart';
Morris.Line(config3);
config2.element = 'bar-chart';
Morris.Bar(config2);
config2.element = 'stacked';
config2.stacked = true;
Morris.Bar(config2);
Morris.Donut({
  element: 'pie-chart',
  data: [
    {label: "Late", value: 30},
    {label: "On Time", value: 15},
    {label: "Due", value: 45},
   
  ]
});
</script>