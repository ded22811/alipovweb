<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "cars";

$conn =  mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("- connect" . mysqli_connect_error());
}
