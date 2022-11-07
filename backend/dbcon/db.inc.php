<?php

$server = 'localhost';
$uesrname  = 'root';
$password = '';
$database = 'adminpanel';

$conn = mysqli_connect($server , $uesrname , $password , $database);

if(!$conn){
    echo "connection failed";
}
