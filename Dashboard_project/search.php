<?php

// php code to search data in mysql database and set it in input text

if(isset($_POST['search']))
{
    // deviceid to search
    $deviceid = $_POST['deviceid'];
    
    // connect to mysql
    $connect = mysqli_connect("us-cdbr-east-05.cleardb.net", "bef405b358942a", "be31f73d","heroku_f831c90fbf509fd");
    
    // mysql search query
    $query = "SELECT `poct_device_generic_name`, `device_model`, `poct_device_manufacture_name` FROM `poct_device` WHERE `poct_device_id` = $deviceid LIMIT 1";
    
    $result = mysqli_query($connect, $query);
    
    // if device id exist 
    // show data in inputs
    if(mysqli_num_rows($result) > 0)
    {
      while ($row = mysqli_fetch_array($result))
      {
        $devicename = $row['poct_device_generic_name'];
        $devicedescription = $row['device_model'];
        $manufacturer = $row['poct_device_manufacture_name'];
      }  
    }
    
    // if the id not exist
    // show a message and clear inputs
    else {
        echo "Undifined ID";
            $devicename = "";
            $devicedescription = "";
            $manufacturer = "";
    }
    
    
    mysqli_free_result($result);
    mysqli_close($connect);
    
}


else{
    $devicename = "";
    $devicedescription = "";
    $manufacturer = "";
}

?>

<html>
    <head>
<title> Search for Device Information </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<form action="search.php" method="post">

Device Id:<input type="text" name="deviceid"><br><br>
Device Name:<input type="text" name="devicename" value="<?php echo $devicename;?>"><br><br>
Device Description:<input type="text" name="devicedescription" value="<?php echo $devicedescription;?>"><br><br>
Manufacturer:<input type="text" name="manufacturer" value="<?php echo $manufacturer;?>"><br><br>
<input type="submit" name="search" value="Find">

   </form>

</body>

</html>
