<?php

$server = "localhost";
$user = "root";
$db_pwd = "root";
$db = "address_book";

$conn = mysqli_connect($server, $user, $db_pwd, $db);

//let's check the connection.

if(!$conn){
    die("Unable to connect to the database: ".mysqli_connect_error());
}
?>