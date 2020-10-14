<?php

$ans=$_POST['r4ans'];

if($ans=='Jumper')
{echo "Right";
session_start();
$_SESSION['r4']='1';
header("location:r5.php");
}

else
{
header("location:r4.php?msg=Wrong Answer");
}

?>