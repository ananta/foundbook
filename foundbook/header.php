
<!DOCTYPE html>
<html lang="en">
    <head>

<style>
<?php
include 'css/style.css';
?>

</style>
        <title>Foundbook | Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Lost and Found Platform to help people find their lost asset">
        <meta name = "keyword" content="lost mobile,lost dog, lost person, found person, found child, found person, found mobile, lost document, found document,foundbook">
        <meta name ="author" content = "Ananta Bastola">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        
    </head>
    <body>
     <header>
         <div class="container">
             <div id="branding">
                 
                 <img src="img/foundbook.png" alt="foundbook logo">
             </div>
<<<<<<< HEAD
                 <nav class = "nav-bar">
=======
                 <nav>
>>>>>>> f0b4bf7f6ed53539b1f36b3f1d1a7a1a514116a1
                     <ul>
                         <li class ="<?php if ($page=="home"){echo "active";}else{echo"inactive";};?>"><a id="home"href="index.php">Home</a></li>
                         <li class ="<?php if ($page=="about"){echo "active";}else{echo"inactive";}?>"><a id="aboutPageId"href="about.php">About</a></li>
                         <li class ="<?php if ($page=="contact"){echo "active";}else{echo"inactive";}?>"><a href="contact.php">Contact</a></li>
                         <li><img onclick = "window.location.replace('login.php')"class = "<?php if($page=="user"){echo "userActive";}?>"src="img/user.png" alt="lala"></li>
                         
                         </ul>
                 </nav>
         </div>
     </header>