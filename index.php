<?php
 
  include_once 'header.php';

?>

    <!-- Main Content: Signup Form -->
     
    <div class="home-container">

    <?php
                 
                 if (isset($_SESSION["userUId"])) {
                      echo "<p>Welcome " . $_SESSION["userUId"] . "</p>";
                      
                 }      
            
            
            //     else{
                
                

            // echo "<li><a href='signup.php'>Signup</a></li>";
            // echo "<li><a href='login.php'>Login</a></li>";

            //      }
            

            ?>
         
          <h1>Welcome to the TODO Application!</h1>
        
        <p>
            TODOApp is a platform designed to help you manage your tasks, stay informed with real-time information updates, and much more. Our mission is to provide you with simple yet powerful tools to improve your daily life.
        </p>

        <h2>Features</h2>
        <ul>
            <li>Task Management: Organize your to-do list and keep track of your progress.</li>
            <li>Daily Updates: Get the latest information for your location.</li>
            <li>User-Friendly Interface: Enjoy a clean and intuitive interface that’s easy to use.</li>
        </ul>

        <h2>Why Choose Us?</h2>
        <p>
            At YourWebsite, we prioritize simplicity and efficiency. Whether you’re planning your day or checking the weather, our platform is designed to give you the information you need quickly and easily.
        </p>
        <p>
            Join us today and start enjoying a more organized and informed life!
        </p>

        <a href="signup.php" class="btn">Get Started</a>
    </div>


   <?php
   
   include_once 'footer.php';
   
    ?>
