<?php

$host="localhost";
$user="root";
$pass="";
$db="login";
$conn=new mysqli($host,$user,$pass,$db);
if($onn->connect_error){
    echo "Failed to connect DB".$conn->connect_error;
}
?>