<?php

$ans=$_POST['r5ans'];

if($ans=='Conductor')
{echo "Right";
session_start();
$_SESSION['r5']='1';
header("location:overr.php");
}

else
{
header("location:r5.php?msg=Wrong Answer");
}

?>