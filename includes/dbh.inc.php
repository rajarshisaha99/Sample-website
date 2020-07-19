<?php

$servername = "localhost";
$dbUsername = "root";
$dbpassword = "";
$dbName = "loginsys";

$conn = mysqli_connect($servername, $dbUsername, $dbpassword, $dbName);

if(!$conn){
    die("Coonection failed: ".mysqli_connect_error());
}