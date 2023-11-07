<?php 
$host = "localhost";
$username = "root";
$password = "";
$database = "abms";

$con = mysqli_connect($host, $username, $password, $database);

if(!$con){
    echo "Failed to Establish Database Connection";
} 

?>