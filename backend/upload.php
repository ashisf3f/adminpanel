<?php
require '../backend/dbcon/db.inc.php';
session_start();

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$title = $_POST['title'];
$email = $_SESSION['email'];
if(empty($title)){
    header('location: ../build/index.php?error=empty-title');
    exit();
}
else{


$sql = "INSERT INTO `user_data`(`title` , Email) VALUES ('$title' , '$email')";
$result = mysqli_query($conn , $sql);
if($result){
    $_SESSION['title'] = $title;
  }
else {
  header('Location: ../../build/index.php?error=upload-failed-to-database');
  exit();
}


$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    // echo "File is an image - " . $check["mime"] . ".";
    // header('location : ../build/index.php?eri')
        $uploadOk = 1;
  } else {
    // echo "File is not an image.";
    header('location: ../build/index.php?error=file-is-not-an-image');
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
    header('location: ../build/index.php?error=Sorry-file-already-exists.');
//   echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    header('location: ../build/index.php?error=Sorry-your-file-is-too-large. ');
//   echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    header('location: ../build/index.php?error=Sorry-only-JPG-JPEG-PNG-&-GIF-files-are-allowed ');
//   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    header('location: ../build/index.php?error=Sorry-your-file-was-not-uploaded');
//   echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    header('location: ../build/index.php?upload-success');
  } else {
    header('location: ../build/index.php?error=Sorry-there-was-an-error-uploading-your-file.');

    // echo "Sorry, there was an error uploading your file.";
  }
}}
?>