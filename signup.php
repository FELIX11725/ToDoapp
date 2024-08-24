

<?php
 
 include_once 'header.php';

 ?>



<section class="signup-form">
<div class="signup-container">
        <h2>TODOApp Sign in</h2>
        <form method="post" action="includes/signup.inc.php">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <label for="repeat-password">Repeat Password</label>
            <input type="password" id="repeat-password" name="repeat-password" required>

            <button type="submit" name="submit">Sign Up</button>
        </form>
    </div>
</section>

<?php
   
   if(isset($_GET["error"])){
    if($_GET["error"]=="emptyinput"){
        echo "<p>Fill in all the fields</p>";
    }else if ($_GET["error"]=="invaliduid"){
        echo "<p>choose a proper username</p>";
    }else if ($_GET["error"]=="invalidEmail"){
        echo "<p>choose a proper email</p>";
    }
//     }else if($_GET["error"]=="wrongname"){
//         echo "<p>Enter proper name </p>";
// }
   else if ($_GET["error"]=="passwordsdontmatch"){
    echo "<p>choose a proper password</p>";
   }else if ($_GET["error"]=="statementfailed"){
    echo "<p>something went wrong, try again!</p>";
   }else if ($_GET["error"]=="username taken"){
    echo "<p>username already taken</p>";
   }else if ($_GET["error"]=="none"){
    echo "<p>You have signed up!!!</p>";
   }
}

?>


    <?php
    
    include_once 'footer.php';
    
     