<?php
// Database Connection Settings
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'foundbook';
$mysqli = new mysqli($host,$user,$pass,$db);
if($mysqli->connect_error){
  die('Connection Failed'.$mysqli->connect_error);
}else{
  
}
?>