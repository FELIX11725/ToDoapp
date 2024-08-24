<?php

if(isset($_POST["submit"])){
     $name=$_POST["name"];
     $email=$_POST["email"];
     $password=$_POST["password"];

     require_once 'dbh.inc.php';
     require_once 'functions.inc.php';

        
     if(emptyInputLogin($name,$email,$password)!==false){
        header("location:../signup.php?error=emptyInput");
        exit();

    }

    loginUser($conn,$name,$email,$password);


    }
    else{
        header("location:../login.php");
        exit();
    }