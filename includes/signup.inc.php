<?php

if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $pwdrepeat=$_POST['repeat-password'];

     require_once 'dbh.inc.php';
     require_once 'functions.inc.php';//file containing functions for error handling

//error handling

    //  if(wrongName($name)!==false){
    //     header("location:../signup.php?error=wrongname");
    //     exit();
    //  }  

    if(emptyInputSignup($name,$email,$username,$password,$pwdrepeat)!==false){

        header("location:../signup.php?error=emptyinput");
        exit();
    }
    
    
    if(invalidUid($username)!==false){
        header("location:../signup.php?error=invalidUid");
        exit();

    }

    if(invalidEmail($email)!==false){
        header("location:../signup.php?error=invalidemail");
        exit();

    }
    if(passmatch($password,$pwdrepeat)!==false){
            header("location:../signup.php?error=passwords dont match");
            exit();
    }
    if(UidExists($conn, $username,$email)!==false){
                header("location:../signup.php?error=usernametaken");
                exit();

            }
            // if(pwdshort($password)!==false){
            //     header("location:../signup.php?error=invalidUid");
            //     exit();

            // }

            createUser($conn,$username,$name,$email,$password);

}else{
    header("location:../signup.php");
    exit();
}