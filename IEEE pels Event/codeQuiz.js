
// creating <tag> variables for the first step when page loads
var userName = $('#name-input');
var startBTN = $('#start-BTN');
var questionsLeft = $('#questions-left');
var question = $('#question');
var choiceA = $('#choiceA');
var choiceB = $('#choiceB');
var choiceC = $('#choiceC');
var txt = "Round 2";
var congratsMessage = $('#congrats');
var nameScore = $('#name-and-score');
// render the progress number
var count = 0;
// count is for the questions you get correct it will be added to the score variable text
var questionsThatAreLeft = 10;
// ********* Timer Script *********************
var secondsLeft = 420;
function timeLeft() {
    var timerInterval = setInterval(function () {
        secondsLeft--;
        $('#timer').text(secondsLeft);
        if (secondsLeft <= 0) {
            endQuiz();
            clearInterval(timerInterval);
            console.log('not clearing interval');
        }
    }, 1000);  //milliseconds
}
// clear localstorage when page loads
localStorage.clear();
// get the name from the local storage


//now "on click" for inputting name and storing to local storage
$('#start-BTN').on('click', function () {
    // need to log name to local storage and keep for end of quiz
    var getName = $("#name-input");
    localStorage.setItem("name", getName.val());

    // need to start timer
    changeColor();
    timeLeft();
    // need to clear test div and add questions and answer butns
    hideItems();
    // switch questionsLeft to show how many questions are left
    questionLeft();
    // start displaying answer buttons when quiz starts
    renderQuestion();
    $('#question-box').css({ 'display': 'block' });

})

// adding function to hide the first section
function hideItems() {
    $('#startDiv').hide();
}
// changing color of the timer to red
function changeColor() {
    $('#timer').css({ "color": "#FC4349" });
}
// change questionsLeft to display how many are left function
function questionLeft() {
    $('#questions-left').text('You have' + ' ' + questionsThatAreLeft + ' ' + 'questions left');
}
// ********* objects for questions *********************
var questions = [
    {
        question: '1.AC power in a load can be controlled by using ',
        answerA: 'Two SCR’s in parallel ',
        answerB: 'Two SCR’s in series',
        answerC: 'Three SCR’s in series',
		
        correct: 'A'
    },
    {
        question: '2.On what factors is the rated voltage selected for an induction motor?',
        answerA: 'Motor rating',
        answerB: 'Starting current',
        answerC: 'Both',
		
        correct: 'C'
    },
    {
        question: '3.A three phase 4 pole, induction motor is supplied from 50HZ supply. Then its synchronous speed will be?',
        answerA: '1000rpm',
        answerB: '1500rpm',
        answerC: '1600rpm',
		
        correct: 'B'
    },
    {
        question: '4.Which of the following is not a routine test on transformer? ',
        answerA: 'Core insulation voltage test',
        answerB: 'Impedance test',
        answerC: 'Radio interference test',
		
        correct: 'C'
    },
    {
        question: '5.The leakage flux of the transformer depends upon ________ ? ',
        answerA: 'Load current',
        answerB: 'Load current and voltage',
        answerC: 'Load current, voltage and frequency',
		
        correct: 'A'
    },
    {
        question: '6.Conduit pipes are normally used to protect _______ cables.',
        answerA: 'Armored',
        answerB: 'Unsheathed cables',
        answerC: 'PVC sheathed cables',
		
        correct: 'B'
    },
    {
        question: '7.The corona is considerably affected by which of the following? ',
        answerA: 'Size of the conductor',
        answerB: 'Shape of the conductor',
        answerC: 'Both',
		
        correct: 'C'
    },
    {
        question: '8.Which of the following material is not used for transmission and distribution of electrical power? ',
        answerA: 'Copper',
        answerB: 'Aluminum',
        answerC: 'Tungsten',
		
        correct: 'C'
    },
    {
        question: '9.A DC welding generator has?',
        answerA: 'lap winding',
        answerB: 'wave winding',
        answerC: 'duplex winding',
		
        correct: 'A'
    },
    {
        question: '10.In a 3 phase half wave rectifier, when firing angle is less than 90 degree, then the average dc output voltage becomes___________?',
        answerA: 'Positive',
        answerB: 'Negative',
        answerC: 'Zero',
		
        correct: 'A'
    }

]

// creating variables for this use
var lastquestion = questions.length - 1;
var runningQuestion = 0;

// render it to the page
function renderQuestion() {
    var q = questions[runningQuestion];
    question.text(q.question);
    choiceA.text(q.answerA);
    choiceB.text(q.answerB);
    choiceC.text(q.answerC);
	
};


// check if answer was correct
function checkAnswer(answer) {
    if (answer === questions[runningQuestion].correct) {
        count++;
        console.log(count);
        var savedName = localStorage.getItem("name");
        // console.log(savedName);
        console.log(savedName);
        nameScore.text(savedName.toUpperCase() + ' Your score was ' + count + ' out of 10' );

	

	
       // questions left goes down 
        questionsThatAreLeft--;
        //need to make question count go down in the text
        questionLeft();
        // if the suer gets it right, add 10 seconds
        secondsLeft += 10;
        console.log('working');
        //need to make the question switch now
        if (runningQuestion < lastquestion) {
            runningQuestion++;
            renderQuestion();
        }
        endQuiz();
        // user grade
        if (count === 10) {
         
			$('#nice-job').text('Key:- IEEE PELS DAY');
	  
                  
        } else if (count >= 8) {
		
	document.write("<h4>Congratulations</h4><h5>You give Your minimum right Aanswer</h5><p>Note Down Key=IEEE PELS DAY <br>" + txt.link("r1.php") + "</p>");			
		
			
        } else {
            $('#nice-job').text('you are not qualified for the next Round ');
        }
    } else {
        // need to switch questions when answer is wrong too
        if (runningQuestion < lastquestion) {
            runningQuestion++;
            renderQuestion();
        }
        questionsThatAreLeft--;
        //need to make it go down in the text
        questionLeft();
        // time reduced by 10 seconds if worng
        secondsLeft -= 10;
        console.log('not working');
        endQuiz();
    }

}
// end quiz
function endQuiz() {
    if (secondsLeft <= 0 || count === 10 || questionsThatAreLeft === 0) {
        // need to hide the question div
        $('#question-box').css({ 'display': 'none' });
        //need to show the score-card
        $('#score-card').css({ 'display': 'block' });
        // change color of progress bar
        $('#timerContainer').css({ 'background': '#FC4349' });
        // need to stop and reset timer
        $('#timer').hide();
    }
}


