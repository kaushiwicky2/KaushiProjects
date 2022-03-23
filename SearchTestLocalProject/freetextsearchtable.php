<html>

<head>
    <title> Search for Device Information </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        .bodycontainer {
            padding: 250px;
        }
    </style>
</head>

<body>
   <div class="bodycontainer"> 
       
    <?php

    // php code to search data in mysql database and set it in input text
 
    $tabledata =    "<table width='100%' border='0'>";

     if (isset($_POST['search'])) { 
        // deviceid to search
        $deviceid = $_POST['deviceid'];
        
        // connect to mysql
        $connect = mysqli_connect("us-cdbr-east-05.cleardb.net", "bef405b358942a", "be31f73d", "heroku_f831c90fbf509fd");
        $query1 = "SELECT `poct_device_id`,`poct_device_generic_name`, `device_model`, `poct_device_manufacture_name` FROM `poct_device` WHERE `poct_device_id` = $deviceid LIMIT 1";
       
        $query = "SELECT `poct_device_id`,`poct_device_generic_name`, `device_model`, `poct_device_manufacture_name` FROM `poct_device` WHERE `poct_device_generic_name` like '%$deviceid%'";
       
         $query3 = "SELECT * FROM poct_device WHERE poct_device_id IN (
            SELECT poct_device_id FROM poct_device_has_disease WHERE disease_id IN (
            SELECT disease_id FROM disease WHERE disease_name LIKE '%gen%')) 
            OR poct_device_id = 1
            OR poct_device_manufacture_name LIKE '%Anidra200%' 
            OR poct_device_generic_name LIKE '%Ani%' 
            OR device_type LIKE '%Inh%' 
            OR user_user_id IN (SELECT user_id FROM user WHERE user_firstname LIKE '%Kaushi%' OR user_lastname LIKE '%Minh%' )";
             
             $query4 ="SELECT `poct_device_id`,`poct_device_generic_name`, `device_model`, `poct_device_manufacture_name` FROM `poct_device` WHERE `poct_device_id` IN (
                SELECT `poct_device_id` FROM `poct_device_has_disease` WHERE `disease_id` IN (
                SELECT `disease_id` FROM `disease` WHERE `disease_name` LIKE `%gen%` OR `disease_api_key` LIKE `%01%`)) 
                OR `poct_device_manufacture_name` LIKE `%Anidra200%` 
                OR `poct_device_generic_name` LIKE `%Ani%` 
                OR `device_type` LIKE `%INh%`
                OR `user_user_id` IN (SELECT `user_id` FROM user WHERE `user_firstname` LIKE '%Kaushi%' OR `user_lastname` LIKE `MINh`)";
            $result = mysqli_query($connect, $query);

        
        if( $result){
            // success! check results
          //  echo "inside the result if $result";
        while ($row = mysqli_fetch_assoc($result)) {
            $tabledata .= "<tr><td><iframe src='https://drive.google.com/file/d/1ABzNSkNTyqeqVlrtYLB7u_JjNY5sGh-3/preview' width='100' height='100' allow='autoplay'></iframe></td>
                               <td>

                               <table>
                               <tr>
                               <td>
                               <table>
                               <tr>
                               <td>
                               <table>
                               <tr><td>Device ID: {$row['poct_device_id']}</td></tr>
                               <tr> <td>Device Model: {$row['device_model']}</td></tr>
                               <tr><td>Device Manufacturer Name: {$row['poct_device_manufacture_name']}</td>
                               </tr>
                               </table></td>
                               <td>
                               <table>
                               <tr><td></td></tr>
                               <tr><td></td></td></tr>
                               <tr><td>Device Generic Name: {$row['poct_device_generic_name']}</td>
                               </tr>
                               </table>
                               
                               
                               </td>
                               </tr>
                               </table>
                               </td>
                               </tr>
                               <tr>
                               <td>This Device Mesures something something and the range of values is something something</td>
                                
                               </tr>
                               </table>
                               
                               
                               
                               </td> 
                               
                                
                                
                                </tr>\n";
        }
        
             }
            else{
           //  failure! check for errors and do something else
            echo "if failed";
            } 

        $tabledata .= "</table>";
    }


    ?>






    <table>
        <tr>
            <td>
                <form action="freetextsearchtable.php" method="post">

                    Free Text Search <input type="text" name="deviceid" size="100">

                    <input type="submit" name="search" value="Find">
                </form>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                echo $tabledata;
                ?>
            </td>
        </tr>
    </table>
    </div>
</body>

</html>