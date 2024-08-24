
<?php
 
 include_once 'header.php';

 ?>


       



<section class="login-form">
<div class="signup-container">
        <h2>TODOApp Login</h2>
        <form action="includes/login.inc.php" method="post">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>


            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

           
            <button type="submit" name="submit">Log In</button>
        </form>
    </div>
     
    <?php
   
   if(isset($_GET["error"])){
    if($_GET["error"]=="emptyinput"){
        echo "<p>Fill in all the fields</p>";
    }else if ($_GET["error"]=="wronglogin"){
        echo "<p>incorrect login credentials</p>";
    }
}
?>


</section>
    <?php
    
    include_once 'footer.php';
    
     ?>