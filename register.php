<?php
$page = 'user';
include "header.php"
?>
<?php
$userLocation = 'register';
include "header2.php"
?>

<div class="dark">
<div class = "section2">
<div class = "card">
     <div class = "container3">
    
    <form action = "userLogin.php" method="POST">
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
<<<<<<< HEAD
         <h1 class = "textStyle2">Already Have An Account?</h1>
=======
         <h1 class = "textStyle2"> <a href="login.php">Already Have An Account?</a></h1>
>>>>>>> f0b4bf7f6ed53539b1f36b3f1d1a7a1a514116a1
         </div>
    </form>


    </div>
    </div>
</div>
</div>