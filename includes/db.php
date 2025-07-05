<?php 
$dbHost = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "gadgets";

$conn = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

if(!$conn){
    die("Successfully connected to db");
}
?>
