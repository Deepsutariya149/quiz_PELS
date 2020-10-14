
<?php
session_start();
$_SESSION['oid']='1';

if(isset($_SESSION['uid']))
{
header("location:index1.html");	
}
?>
<?php

if(isset($_GET['msg']))
{
	echo "<script>alert('Wrong ID Password')</script>";
}

?>
<!DOCTYPE html>
<html>
<head>
	   <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Hardware Hunt</title>
    <link rel="stylesheet" href="assets/styles/reset.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="assets/styles/quizStyle.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,900|Muli:300,400,500,700&display=swap"
      rel="stylesheet"
    />
    <!-- favcon -->
    <link rel="icon" type="image/png" href="assets/images/ADIT-01.png" />
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>

<body>
<h4>Note :</h4><h5>Username and Password is the combination of both key which you find in found 1 and round 2</h5>
	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form action="round3logindb.php" method="post"> 

		

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="un" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="pwd">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		
	</form>
<div style="text-align: center;">
    <h2 style="font-style: bold">On the occasion of PELS DAY 2020</h2></div>
    <footer class="footer row">
      <div class="foot-icons">
        <a class="icons"
          ><img
            style="height: 100%;"
            src="assets/images/CVM-01.png"
            alt="Ruff web development logo"
        /></a>

        <!-- github -->
        <a class="icons" target="_blank" 
          ><img style="height: 100%;" src="assets/images/IEEE Power & Energy Society Chapter.png"
        /></a>

        <a
          class="icons"
          target="_blank"
         
          ><img style="height: 100%;" src="assets/images/PELSday.png"
        /></a>
        <!-- Linked in -->
        <a
          class="icons"
          target="_blank"
         
          ><img style="height: 100%;" src="assets/images/ADIT-01.png"
        /></a>
      </div>
    </footer>
    <script
      src="https://code.jquery.com/jquery-3.4.1.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
    

</body>
</html>
