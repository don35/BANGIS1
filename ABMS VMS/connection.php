<?php 
$con = mysqli_connect('localhost', 'root', '', 'vcm');
if(mysqli_connect_error())
{
    echo "Database Connection Error!";
    exit;
}
?>