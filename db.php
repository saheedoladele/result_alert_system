<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'result_alert';

//connection 
 $connect = mysqli_connect($host, $username, $password, $database); 
 if(!$connect){
 	echo "Database Connection Fail";
 }
?>