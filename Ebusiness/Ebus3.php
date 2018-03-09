<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
          <meta charset="UTF-8">
        <title>RECEIPT</title>
          <!--linking to css -->
         <link rel="stylesheet" href="Shop_pages.css" type="text/css" />
    </head>
    <body>
                  <div class="one">
                      
        
  <a href="homepage.html">Homepage</a>
  <a href ="../Ebusiness/Ebus1.php"> Products </a>
</div>
<div id="receipt">
        <h1>RECEIPT</h1>
          <!--info to last page-->
                 <?php
                 $_SESSION["user_email"] = $_POST["user_email"];
              $_SESSION["user_name"] = $_POST["user_name"];
              ?>
              
        <?php
        // Echo session variables that were set on previous page
        echo "Total Price is " . $_SESSION["total"] . "</br>";
        echo "Name: " . $_SESSION["user_name"] . "</br>";
        echo "Email: " . $_SESSION["user_email"] . "</br>";
        ?>
        </div>
        
        
            
               <a href="../homepage.html" class="end">Home</a>
        
        <a href="../homepage.html" class="end">Home</a>
    </body>
</html>