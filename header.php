
<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reset.css">
       
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Slabo+27px&display=swap" rel="stylesheet">

      
 </head>
  <body>
    <!-- Navigation Bar -->
  <div class="wrapper">
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">About</a></li>

                <?php
                 
                 if (isset($_SESSION["userUId"])) {
                      echo "<li><a href='profile.php'>Profile</a></li>";
                      echo "<li><a href='dashboard.php'>Dashboard</a></li>";
                      echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";
                 }else{
                
                

            echo "<li><a href='signup.php'>Signup</a></li>";
            echo "<li><a href='login.php'>Login</a></li>";

                 }

            ?>
        </ul>
    </nav>
                </div>