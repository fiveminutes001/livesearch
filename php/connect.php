<?php

//SESSION START	
session_start();

//ERRORS DISPLAY
error_reporting(E_ALL);
ini_set('display_errors', 'On');

//GET FUNCTION TO GET DB DETAILS FROM FAR FILE//OUTPUT 00
include "get_connection_details.php";

//GET DB DETAILS
$path = 'data';
$db_details = getfile($path);

$host = $db_details[0];
$username = $db_details[1];
$password = $db_details[2];
$db = $db_details[3];

//CREATING CONNECTION
$con = mysqli_connect($host, $username, $password, $db);

//CHECKING CONNECTION
if ($con) {
    echo '<i class="fa fa-check-square-o" style="font-size:24px;color:purple;"></i>';
    echo 'connection ok';
} else {
    die('Could not connect: ' . mysqli_error($con));
}

//SELECTING DATABASE
mysqli_select_db($con, $db);

//ENABLING HEBREW
mysqli_query($con, "SET character_set_client=utf8mb4");
mysqli_query($con, "SET character_set_connection=utf8mb4");
mysqli_query($con, "SET character_set_database=utf8mb4");
mysqli_query($con, "SET character_set_results=utf8mb4");
mysqli_query($con, "SET character_set_server=utf8mb4");

//SETTING TIME	
$sql_Time = "SET time_zone = '+03:00';";
$query = mysqli_query($con, $sql_Time);
