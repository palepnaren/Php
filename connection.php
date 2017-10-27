<?php

$server = "localhost";
$user = "root";
$password = "root";
$db  = "users";

$conn = mysqli_connect($server, $user, $password, $db);

if(!$conn){
    die("Connection failed:" .mysqli_connect_error());
}

//echo "connection successfull...<br><br>";

?>