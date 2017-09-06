<!doctype html>
<html>
<head></head>
<title>Foundbook |Lost Page</title>
<?php
include "headersearch.php"
?>
<body>
  <section id="showcase">
    <div class="container">
        <form action="loginpage.php" method="post">
    <h2> LOST</h2>
    <h3>POST PAGE</h3>
    Category:
        <select name="">
            <option>Document</option>
                <option> Pet </option>
                <option>Person</option>    
        </select><br>
    Location:<input type="textbox" name="location" placeholder="Your Location"><br>
    Date:<input type="textbox" name="date" placeholder="Nepali Date"></br>
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