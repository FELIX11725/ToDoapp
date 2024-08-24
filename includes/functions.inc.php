<?php

function emptyInputSignup($name,$email,$username,$password,$pwdrepeat){
$result;
if(empty($name) || empty($email) || empty($username) || empty($password) || empty($pwdrepeat) ){
    $result = true;

}else{
    $result=false;
}
return $result;
}


// function wrongName($name){
//     $result;
// if (!preg_match("/^[a-zA-Z]+$/", $name)) {
//     $result=true;

// }else{
//     $result=false;
// }
// return $result;
// }

function invalidUid($username){
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result=true;
    }else{
        $result=false;
    }

    return $result;

}

function invalidEmail($email){
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
     $result=true;   
    }else{
        $result=false;
    }
    return $result;

}

function passmatch($password,$pwdrepeat){
    $result;
    if($password!==$pwdrepeat){
     $result=true;   
    }else{
        $result=false;
    }
    return $result;

}

//check if username exists

function UidExists($conn, $username, $email){
   $sql ="SELECT * FROM users WHERE useruid = ? OR useremail=?;";
   $stmt = mysqli_stmt_init($conn);
   if(!mysqli_stmt_prepare($stmt, $sql)){
       header("location:../signup.php?error=stmtfailed");
       exit();
   }

   mysqli_stmt_bind_param($stmt, "ss", $username, $email);
   mysqli_stmt_execute($stmt);

   $resultData=mysqli_stmt_get_result($stmt);

   if($row=mysqli_fetch_assoc($resultData)){

    return $row;

   }else{
    $result=false;
    return $result;
}

mysqli_stmt_close($stmt);

}


//check if user is created function definition

function createUser($conn,$username,$name,$email,$password){
    $sql ="INSERT INTO users (username,useruid,useremail,userpassword) values(?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location:../signup.php?error=stmtfailed");
        exit();
    }

    $hashedpass =password_hash($password, PASSWORD_DEFAULT);
 
    mysqli_stmt_bind_param($stmt,"ssss",$name,$username,$email,$hashedpass);
    mysqli_stmt_execute($stmt);
    
    mysqli_stmt_close($stmt);

    header("location:../signup.php?error=none");
    exit();

 
//     $resultData=mysqli_stmt_get_result($stmt);
 
//     if($row=mysqli_fetch_assoc($resultData)){
 
//      return $row;
 
//     }else{
//      $result=false;
//      return $result;
//  }
 
 
}

function emptyInputLogin($name,$email,$password){
  $result;

  if(empty($name) || empty($email) || empty($password)){
    $result=true;
  }
  else{
    $result=false;
  }
  return $result;
}

function loginUser($conn,$name,$email,$password){

    $nameexists= UidExists($conn, $email, $email);

    if ($nameexists===false){

        header("location:../login.php?=wronglogin");
        exit();
        
    }

    $pwdhashed= $nameexists["userpassword"];
    $checkpwd=password_verify($password,$pwdhashed);

    if($checkpwd===false){
        header("location:../login.php?error=wrong login password");
        exit();
    }elseif ($checkpwd===true) {
        session_start();
        $_SESSION["usersId"]= $nameexists["userid"];
        $_SESSION["userUId"]= $nameexists["useruid"];

        header("location: ../index.php?error=sessiontracked");
        exit();
    }
}