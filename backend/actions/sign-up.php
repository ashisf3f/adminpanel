<?php

require '../dbcon/db.inc.php';

$uesrname = $_POST['username'];
$userEmail = $_POST['email'];
$userPhone = $_POST['phone'];
$userPass = $_POST['password'];
$confPass = $_POST['confpass'];


if(empty($uesrname)){
    header('location: ../../build/pages/sign-up.php?error=empty?username');
    exit();
}

  //email_validation
  if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
      // $emailErr = "Invalid email format";
      header('Location: ../../build/pages/sign-up.php?error=invalid email');
      exit();
  }
  // password validation
  if(strlen($userPass) < 6){
      header('Location: ../../build/pages/sign-up.php?error=invalid-password-length');
      exit();
  }
  if(!is_numeric($userPhone)){
    header('Location: ../../build/pages/sign-up.php?error=invalid-phone-number');
    exit();
  }

//   check whether the data exist aldready on database


$existSql = "SELECT * FROM `sign_up` WHERE Email = '$userEmail'";
$result = mysqli_query($conn , $existSql);
$numExistRow = mysqli_num_rows($result);

if($numExistRow > 0){
  header('Location: ../../build/pages/sign-up.php?error=user-exist-aldready');
  exit();
}


else{
// passowrd verification
if($userPass == $confPass){
  $password = password_hash($userPass , PASSWORD_DEFAULT);
  $sql = "INSERT INTO `sign_up`  (`Name`, `Phone`, `Email`, `Password`) VALUES ('$uesrname' ,'$userPhone', '$userEmail','$password')";
  $result = mysqli_query($conn , $sql);
  if($result){
    
    header('Location: ../../build/pages/sign-in.php');
  }
}
else {
  header('Location: ../../build/pages/sign-up.php?error=password-doesnot-match');
  exit();
}
}