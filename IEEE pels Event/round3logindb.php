<?php

$u=$_POST['un'];
$p=$_POST['pwd'];


if($u=='IEEEPELSDAY' && $p=='ADITSBPELS')
{echo "userlogin";
session_start();
$_SESSION['uid']='1';
header("location:index1.html");
}

else
{
header("location:round3login.php?msg=Wrong id password");
}

?>