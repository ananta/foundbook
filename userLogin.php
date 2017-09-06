<?php
include './database/db.php';
// print_r($_POST['fName']); 

$firstName = trim($_POST['fName']);
$lastName=trim($_POST['lName']);
$phone=trim($_POST['phone']);
$email=trim($_POST['email']);
$password=trim($_POST['password']);
$location=trim($_POST['location']);
$gender = 'M';

//Check if Email Exists in Database

$result = $connection->query("SELECT * FROM USERS WHERE mail='$email'") or die($mysqli->error());
if($result->num_rows > 0){
  $_SESSION['message']="User Exists With Same Email Information";
  header('location:error.php');
}else{
register($firstName,$lastName,$email,$password,$location,$gender,$connection);
 
}

function register($firstName,$lastName,$email,$password,$location,$gender, $mysqli){
  $sql ="INSERT INTO USERS (first_name,last_name,mail,password,address,gender)VALUES('$firstName','$lastName','$email', '$password', '$location', '$gender') ";
  
  //Add user to Database
  if($mysqli->query($sql) === TRUE){
    header('location:login.php');
  }else{
    echo '<br>Registration Failed '.$mysqli->error;
  }

  $mysqli->close();
}



?>

<!-- 
Array ( [fName] => Ananta [lName] => Bastola [phone] => 9846713460 [email] => anantarajbastola@gmail.com [password] => ananta [location] => Mahendrapool, Pokhara ) -->