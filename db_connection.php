<?php

$server = "localhost";
$username = "root";
$password = "R@jan12#";
$database = "Information";
 
$conn = mysqli_connect($server, $username, $password, $database);

if(!$conn){
die('connection error'.mysqli_connect_error());
}


?>