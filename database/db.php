<?php
// Database Connection Settings
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'foundbook';
$connection = mysqli_connect($host,$user,$pass,$db);
if(!$connection){
  die('Connection Failed'.$mysqli->connect_error);
}else{
  
}
?>