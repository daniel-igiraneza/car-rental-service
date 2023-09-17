<?php
$host="127.0.0.1";
$user="root";
$password="";
$db="carrental";
$con = mysqli_connect($host, $user, $password, $db);

if(!$con){
    echo "DB connected".mysqli_error($con);
}
?>