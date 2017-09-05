<!doctype <html>
<html>
    <head>
    <?php
$page = "home";
include "headersearch.php";

?>
    </head>
        <title>Foundbook | Account Settings</title>
        <style>
            body{
                text-align:center;
                background: url("img\sitebg.JPG");
            }
            li.a{
                font-style:bold;
                font-size:20px;
            }
            h1{
                text-decoration :underline;
            }
        </style>
           
 
        <body>
            
            
                 
            <h1 >Account Settings</h1>
                
                <form>
                    <ul>
                    
                    <li class="a">Username:</li>        <input class="inputTypeSignup1"  type="textbox" name="username" placeholder="Enter username"><br><br>
                    <li class="a">Password:</li>        <input class="inputTypeSignup1" type="password" name="pass" placeholder="Enter password"><br><br>
                    <li class="a">Retype password:</li> <input class="inputTypeSignup1" type="password" name="pass1" placeholder="Retype password"><br><br>
                    <li class="a">Update location:<li> <input class="inputTypeSignup1" type="textbox" name="location" placeholder="Location"><br><br>
                    <li class="a">Contact Number:<li>  <input class="inputTypeSignup1" type="textbox" name="contactnum" placeholder="Optional"><br><br>
                                     <input class="button_1" type="reset" name="reset" value="RESET">
                                     <input class="button_1" type="submit" name="sub" value="SUBMIT"><br>
                
                </form>
                    
            </section>

        

        </body>
</html>