<?php
ob_start();
require './database/db.php';
session_start();
$page = 'user';
include "header.php";

$userLocation = 'register';
include "header2.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $firstName = trim($_POST['fName']);
    $lastName=trim($_POST['lName']);
    $phone=trim($_POST['phone']);
    $email=trim($_POST['email']);
    $password=trim($_POST['password']);
    $location=trim($_POST['location']);
    $gender = 'M';


$result = $connection->query("SELECT * FROM USERS WHERE mail='$email'") or die($connection->error());
if($result->num_rows > 0){
    $_SESSION['message']="User Exists With Same Email Information";
    header('location:error.php');
}else{
register($firstName,$lastName,$email,$password,$location,$gender,$connection);
    
}
}
function register($firstName,$lastName,$email,$password,$location,$gender, $connection){
    $sql ="INSERT INTO USERS (first_name,last_name,mail,password,address,gender)VALUES('$firstName','$lastName','$email', '$password', '$location', '$gender') ";
    
    //Add user to Database
    if($connection->query($sql) === TRUE){
      header('location:login.php');
      $_SESSION['signupMessage']="You Have Sucessfully Registered ".$firstName." !";
    }else{
      echo '<br>Registration Failed '.$connection->error;
    }
  
    $connection->close();
  }




?>

<div class="dark">
<div class = "section2">
<div class = "card">
     <div class = "container3">
    
    <form action = "" method="POST">
        <h1 class = "textStyle1">Welcome to Family!</h1>
        <img class = "babylogo"src="img/baby.png" alt="signup">
        <h3 class = "textStyle2">To join the Community, Please Provide the following infromation....</h3>
        <input  class = "inputTypeSignup"type="text" name="fName" placeholder="First Name">
        <input class = "inputTypeSignup"type="text" name="lName" placeholder="Last Name">
        <input class = "inputTypeSignup"type="Number" name = "phone" placeholder="Phone Number">

        <input class = "inputTypeSignup"type="email" name="email" value="" placeholder="Email">

        <input class = "inputTypeSignup"type="password" name="password" value="" placeholder="Password">
       <input class = "inputTypeSignup"type="password" name="password" value="" placeholder="Retype Password">
        <input class = "inputTypeSignup"type="location" name="location" value="" placeholder="Your Current Residing Location">
       <div class="btnSameLine">
        <button  type = "submit" value="Register"id="register"class="button_3">Register</button>

         <h1 class = "textStyle2"> <a href="login.php">Already Have An Account?</a></h1>
         </div>
    </form>


    </div>
    </div>
</div>
</div>
<?php
include "footer.php"
?>