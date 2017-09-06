<?php
require './database/db.php';
session_start();
$page = 'user';
include "header.php"
?>
<?php
$userLocation = 'login';
include "header2.php"
?>
<div class="dark">
<div class = "section2">
<div class = "card">
    <img  align="middle"class="userlogo"src="img/userLogin.png" alt="userlogo">
    <div class = "container2">
    
    <form action = "userLogin.php" method="POST">
        <input type="email" name="email" value="" placeholder="Email">
        <input type="password" name="password" value="" placeholder="Password">
        <div class = "btnSameLine">
         <button  type = "submit" value="Login"id="login"class="button_4">Login</button>
         <button type="submit" value="forgot" class="button_5">Forgot ?</button>
        </div>
    </form>


    </div>
    </div>
</div>
</div>

