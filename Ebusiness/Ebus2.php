<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
          <meta charset="UTF-8">
        <title>Enter Details</title>
         <link rel="stylesheet" href="Shop_pages.css" type="text/css" />
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="Ebus2.validator.js"></script>
        
       
    </head>
    <body>
        
             <div class="one">
        <!--dividing header from rest of page/text-->
  <a href="../homepage.html">Return</a>
  <a href="Aboutus.html">About Us </a>
  <a href="aboutcloud.html">About Cloud</a>
  <a href ="../Ebusiness/Ebus1.php"> Products </a>
</div>
</br>
</br>
</br>
</br>
</br>
</br>
  <!--Essential information-->
<div id="cash">
        <h4>Enter your details below</h4>
        
        
            <form action="Ebus3.php" method="POST">
                    <label for="user_name">Your Name</label>
                    <input type="text" id="user_name" name="user_name" placeholder="Full Name">
                    
                    <br><br>
                    

                    <label for="user_email">Email</label>
                    <input type="text" id="user_email" name="user_email" placeholder="fluffyltd@gmail.com">
                    
                    <br><br>


                    <label for="user_pin">PIN</label>
                    <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
                    </br>
                    </br>
                    </br>
                    

                <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
            </form>
            
            <br/>
            <button onClick="validateDetails()">Validate</button>
              <!--getting that info to the last page-->
            <?php
            // Set session variables
            $_SESSION["total"] = $_POST["total"];
            
            
            ?>
        </div>
    </body>
</html>