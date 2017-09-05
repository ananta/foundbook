<?php
$page = "home";
include "header.php";

?>
     <section id="showcase">
        <div class= "container">
            <h1>
                A Lost And Found Portal
            </h1>
            <p>Across The World!</p><h4>Contacting the owner has never been this easy</h4>
        </div>
     </section>
     <section id = "loginBanner">
         <div class="container">
             
            
             <form>
             <h1>It's Completely Free! You Can Signup Here</h1>
                
                <a href="register.php"> <button  id="signupp"class="button_1">Signup</button></a>
             </form>
         </div>
     </section>
     <section id="banner">
         <div class="container">
             <div class="box">
                 <img class="homeBox"src="img\docicon.png" alt="Document">
                 <h3>Lost Document and belongings?</h3>
                 <p>Extremely important documents such as Citizenship, Driving License, Property paperworks, E- Cards
                    etc usually don't contain proper means for contact. Also accessories and electronics Don't Panic,we are here to assist you in this
                    regards with our service.</p>
             </div>
             <div class="box">
                 <img class="homeBox"src="img\people.png" alt="People">
                 <h3>Report missing people across the globe</h3>
                 <p>Sometimes there occurs a situation where immediate action needs to be taken. 
                     This is one of them and one message can change the outcome drastically.
                     So lets be smart and quick to report such findings and mishaps internationally.</p>
                 </div>
             <div class="box">
                 <img class="homeBox"src="img\pet.png" alt="Logo">
                 <h3>Lost Pet?</h3>
                 <p>Nobody wants their dear pet to get lost.Once they are lost it is very difficult for them to return
                     back home.  We want to help the owners reunite with their pets.If you come across
                     any lost pet then you can put their description and picture in our website. We can all 
                     be some help. </p>
             </div>
             
         </div>
     </section>
<?php
include "footer.php"
?>