<?php
require '../backend/dbcon/db.inc.php';
session_start();

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$filename = $_FILES["fileToUpload"]["name"];
$file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
$file_ext = substr($filename, strripos($filename, '.')); // get file name
$title = $_POST['title'];
$email = $_SESSION['email'];
$author = $_SESSION['username'];
if(empty($filename)){
  header('location: ../build/index.php?error=np-image-selected');
  exit();
}else{
if(empty($title)){
    header('location: ../build/index.php?error=empty-title');
    exit();
}
else{
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
        $uploadOk = 1;
  } else {
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
  // Rename file
  $newfilename = md5($file_basename) . $file_ext;
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir .$newfilename)) {
    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    header('location: ../build/index.php?upload-success');
    $sql = "INSERT INTO `user_data`(`title` , img_name , Email , Author) VALUES ('$title' , '$newfilename', '$email' , '$author')";
$result = mysqli_query($conn , $sql);
if($result){
    $_SESSION['title'] = $title; 
  }
else {
  header('Location: ../../build/index.php?error=upload-failed-to-database');
  exit();
}
  } else {
    header('location: ../build/index.php?error=Sorry-there-was-an-error-uploading-your-file.');

    // echo "Sorry, there was an error uploading your file.";
  }
}}}
?>