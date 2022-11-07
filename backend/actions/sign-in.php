<?php

require '../dbcon/db.inc.php';

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

$result = mysqli_query($conn , $sql );
$num  = mysqli_num_rows($result);

if($num == 1){
    while($row= mysqli_fetch_assoc($result)){
        if(password_verify($reqPass , $row['Password'])){

        
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['email']= $reqEmail;
        $username = $row['Name'];
        $userPhone = $row['Phone'];
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