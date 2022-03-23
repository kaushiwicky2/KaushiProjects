<?php

$con=mysqli_connect('127.0.0.1','root','1234','capstone_project');

if(!$con)
{
    die('Connection Error'.mysqli_error(mysqli_connect()));
    echo 'db connection unsuccessfull';
}

?>