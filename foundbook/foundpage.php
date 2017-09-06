<!doctype html>
<html>
<head></head>
<title>Foundbook |Found Page</title>
<?php
include "headersearch.php"
?>

<style>
    container{
        text-align:left;
    }
    body{
        color:white;
    }
</style>
<body>
  
   
    <h2> FOUND </h2>
    <h3>POST PAGE</h3>
    <form action="landingpage.php" method="post">
      Category:
        <select name="">
            <option>Document</option>
                <option> Pet </option>
                <option>Person</option>    
        </select><br>
    Location:<input class="inputTypeSignup1" type="textbox" name="location" placeholder="Your Location"><br>
    Date:    <input class="inputTypeSignup1" type="textbox" name="date"     placeholder="Nepali Date"></br>
    Image: <img src=" "><br>
    Additional description:<br>
                <textarea rows="4" cols="50" name="description"></textarea><br>  
                        <input type="reset" name="reset" value="RESET">
                         <input type="submit" name="sub" value="SUBMIT"><br>
    </div>
 </section>
</form>
<?php
include "footer.php"
?>
    

</body>
</html>