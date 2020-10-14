<?php

$ans=$_POST['r1ans'];

if($ans=='Generator')
{echo "Right";
session_start();
$_SESSION['r1']='1';
header("location:r2.php");
}

else
{
header("location:r1.php?msg=Wrong Answer");
}

?>