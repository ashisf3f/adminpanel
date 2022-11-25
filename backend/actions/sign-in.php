<?php

require '../dbcon/db.inc.php';
session_start();
$reqEmail = $_POST['email'];
$reqPass  = $_POST['password'];

if(empty($reqEmail)){
    header("location:  ../../build/pages/sign-in.php?error=empty-email");
    exit();
}
if(empty($reqPass)){
    header("location: ../../build/pages/sign-in.php?error=empty-password");
    exit();
}

// $sql = "SELECT * from data_info Where   Email='$email' AND Password = '$password'";
$sql = "SELECT * from sign_up Where   Email='$reqEmail'";
$exitPost = "SELECT * FROM `user_data` WHERE Email='$reqEmail'";
$result = mysqli_query($conn , $sql );
$result1 = mysqli_query($conn , $exitPost );
$num  = mysqli_num_rows($result);
$num1  = mysqli_num_rows($result1);
if($num1 == 1){
        while($row = mysqli_fetch_array($result1)){
          $title =   $row['title'];
          $_SESSION['exist_title'] = $title;
        }
}

if($num == 1){
    while($row= mysqli_fetch_assoc($result)){
        if(password_verify($reqPass , $row['Password'])){
                setcookie('loginfo' , true , time()+60*60*30);
                setcookie('email' , $reqEmail , time()+60*60*30);
        
        $_SESSION['loggedin'] = true;
        $_SESSION['email']= $reqEmail;
        $username = $row['Name'];
        $userPhone = $row['Phone'];
        $fb = $row['facebook'];
        $ig = $row['instagram'];
        $tweet = $row['twitter'];
        if($fb == null){
            $_SESSION['facebook'] = "";
        }
        else {
            $_SESSION['facebook']  = $fb;
        }
        if($ig == null){
            $_SESSION['instagram'] = "";
        }
        else {
            $_SESSION['instagram']  = $ig;
        }
        if($tweet == null){
            $_SESSION['twitter'] = " ";
        }
        else {
            $_SESSION['twitter']  = $tweet;
        }
       
        // $_SESSION['facebook']  = $fb;
        
            $_SESSION['phone']= $userPhone;
                $_SESSION['username'] = $username;
        header("Location: ../../build/index.php");
        }
    
    else{
        header("Location: ../../build/pages/sign-in.php?error=invalid-password");
    
    }
}
}
else{
    header("Location: ../../build/pages/sign-in.php?error=invalid-credintials");
    exit();
}
// echo $email.$password;