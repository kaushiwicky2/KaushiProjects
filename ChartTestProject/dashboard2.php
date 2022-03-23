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
    </style>
</head>

<body>


    <div class="row">
    <div class="column">
            <table>

                <tr>
                    <td <?php include 'barchart2.php'; ?></td>

                </tr>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="column">
            <table>

                <tr>
                    <td> <?php include 'piechart2.php'; ?></td>

                </tr>
            </table>
        </div>
        
    </div>
</body>

</html>