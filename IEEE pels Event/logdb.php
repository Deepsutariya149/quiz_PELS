<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"schema");
$u=$_POST['un'];
$p=$_POST['pwd'];
$q="select * from users where email='$u' and phone='$p'";
$q=mysqli_query($con,$q);
$f=mysqli_fetch_array($q);
var_dump($f);

if($f['email']==$u && $f['phone']==$p)
{echo "userlogin";
session_start();
$_SESSION['id']=$f['id'];
$_SESSION['name']=$f['name'];
header("location:index.php");
}

else
{
header("location:login.php?msg=Wrong id password");
}

?>