<?php
session_start();
if(isset($_SESSION['oid']))
{
header("location:round3login.php");	
}

if(isset($_GET['msg']))
{
  echo "<script>alert('Wrong Answer')</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
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
  </head>

  <body>
    <div class="holder">
      <!-- ************** timer header ********************* -->
      <div class="row" id="timerContainer">
        <div class="col-md-6" id="timer-left-side">
          
        </div>
        <div class="col-md-6" id="timer-right-side">
          <div id="timer-holder">
         
          </div>
        </div>
      </div>
      <!-- **************** mid section ********************** -->
      <div>
        
      <h4 class="jumbotron testBox" id="test-box" style="text-align: center;">
        Congratulations !<br><br>
        Your complete your Round 2
      <br><br>
      Note Down Key:- PELS ADIT SB

       <form action="round3login.php" method="POST" style="text-align: center; margin-top: 70px;">
         
         <button>Round 3</button>
       </form>
      </div>
    </div>

    <!-- **************** footer section ********************** -->

    <!-- footer -->
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

    <!-- ********************** script links ****************** -->
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
    <script src="codeQuiz.js"></script>
  </body>
</html>
