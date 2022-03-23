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
            
            background-color: #ddd;
        }
        .reportTitle{
font-size: 18;
font-family: 'Courier New', Courier, monospace;
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
    </style>
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

   
            <table class="pageContainer">

                <tr>
                    <td style="background-color: #632; width: 40%;">dss
                         <?php include 'piechart2.php'; ?>
                </td>
                <td style="background-color: #252;width: 60%;">dss
                        <!-- <?php include 'linechart.php'; ?> -->
                </td>
                </tr>
            </table>
        
</body>

</html>