<?php
session_start();

session_destroy();
session_start();
$_SESSION['last']='1';
header("location:login.php");


?>
