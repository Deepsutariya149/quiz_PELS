<?php
session_start();

if(isset($_SESSION['rid']))
{
header("location:r1.php"); 
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
            <h4 class="head-h4" id="timer">420</h4>
            <h4 class="head-h4">Seconds till Quiz ends</h4>
          </div>
        </div>
      </div>
      <!-- **************** mid section ********************** -->
      <div class="jumbotron testBox" id="test-box">
        <div id="startDiv" style="display: block;">
          <h1 id="title">Welcome to HardWare Hunt!</h1>
          <h5 id="description">
            Note: Right Answer +10 seconds
            Wrong Answer -10 seconds
          </h5>
          <input id="name-input" type="text" placeholder="Enter your name" />
          <br /><button
            id="start-BTN"
            type="submit"
            class="btn btn-primary allBtns"
          >
            Click to start
          </button>
        </div>
        <!-- setting up for questions section once user clicks start BTN -->
        <div id="question-box" style="display: none;">
          <div id="question"></div>
          <div id="answers">
            <button
              type="button"
              class="btn btn-primary allBtns"
              id="choiceA"
              onclick="checkAnswer('A')"
            ></button>
            <br /><button
              type="button"
              class="btn btn-primary allBtns"
              id="choiceB"
              onclick="checkAnswer('B')"
            ></button>
            <br /><button
              type="button"
              class="btn btn-primary allBtns"
              id="choiceC"
              onclick="checkAnswer('C')"
            ></button>
      
          </div>
        </div>
        <!-- setting up the score part at the end of the quiz -->
        <div id="score-card" style="display: none;">
          <h1 id="congrats">Lets see how you did!</h1>
          <h4 id="name-and-score"></h4>
          <h5 id="nice-job"></h5>
          <!-- <button id="retake" class="btn btn-primary allBtns"></button> -->
        </div>
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
