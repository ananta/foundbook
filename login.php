<?php
ob_start();
require './database/db.php';
session_start();
$page = 'user';
include "header.php";
$userLocation = 'login';
include "header2.php";

if(isset($_POST["login"])){

    // $sql = "SELECT * FROM USERS WHERE "
}
?>
<div class="dark">
<div class = "section2">
<div class = "card">
    <img  align="middle"class="userlogo"src="img/userLogin.png" alt="userlogo">
    <div class = "container2">
    <?php
    if(isset($_SESSION['signupMessage'])){    
    echo "<h3 class = 'sucess'>".$_SESSION['signupMessage']."</h3>";
    unset($_SESSION['signupMessage']);
}
?>
    <form action = "" method="POST">
        <input type="email" name="email" value="" placeholder="Email">
        <input type="password" name="password" value="" placeholder="Password">
        <div class = "btnSameLine">
         <button  type = "submit" value="login"id="login"class="button_4" name = "login">Login</button>
         <button type="submit" value="forgot" class="button_5">Forgot ?</button>
        </div>
    </form>


    </div>
    </div>
</div>
</div>

<?php
include "footer.php"
?>