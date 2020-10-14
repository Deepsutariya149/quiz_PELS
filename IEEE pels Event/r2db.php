<?php

$ans=$_POST['r2ans'];

if($ans=='Transformer')
{echo "Right";
session_start();
$_SESSION['r2']='1';
header("location:r3.php");
}

else
{
header("location:r2.php?msg=Wrong Answer");
}

?>