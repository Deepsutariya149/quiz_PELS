<?php

$ans=$_POST['r3ans'];

if($ans=='Register')
{echo "Right";
session_start();
$_SESSION['r3']='1';
header("location:r4.php");
}

else
{
header("location:r3.php?msg=Wrong Answer");
}

?>