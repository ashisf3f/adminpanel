<?php
session_start();

session_unset();
session_destroy();

header('Location: ../../build/pages/sign-in.php');
exit();

?>