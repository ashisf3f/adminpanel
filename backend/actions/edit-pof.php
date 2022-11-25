<?php

require '../dbcon/db.inc.php';
session_start();
// $replaced = preg_replace("/\s+/", "", $str);
$newUserName = $_POST['username'];
$userFacebook = $_POST['facebook'];
$userInstagram = $_POST['instagram'];
$userTwitter = $_POST['twitter'];
$email = $_SESSION['email'];
                preg_replace("/\s+/", "", $newUserName);
                preg_replace("/\s+/", "", $userFacebook);
                preg_replace("/\s+/", "", $userInstagram);
                preg_replace("/\s+/", "", $userTwitter);

// for username
if(!empty($newUserName)){
$sql = "UPDATE `sign_up` SET `Name`='$newUserName', `facebook`='$userFacebook',`instagram`='$userInstagram',`twitter`='$userTwitter' WHERE Email='$email'" ;
$result = mysqli_query($conn , $sql);

if($result){
    // to update 
    $existSql =  "SELECT * from sign_up Where Email='$email'";
    $query = mysqli_query($conn , $existSql);
    $num  = mysqli_num_rows($query);
    if($num == 1){
        while($row = mysqli_fetch_assoc($query)){
            $newUser = $row['Name'];
            $newFb = $row['facebook'];
            $newIg = $row['instagram'];
            $newTweet = $row['twitter'];
            $_SESSION['newUsername'] = $newUser;
            $_SESSION['newInstagram'] = $newIg;
            $_SESSION['newFacebook'] = $newFb;
            $_SESSION['newTwitter'] = $newTweet;
        }

    }
    // echo "update success";
    header("location: ../../build/pages/profile.php?update?success");
    exit();
   
   
}

}

else{
    header("location: ../../build/pages/profile.php?upload?failed");
    exit();
}