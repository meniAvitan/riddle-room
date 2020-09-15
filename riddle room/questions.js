for(let cnt_puestion = 1; cnt_puestion <= 18; cnt_puestion++){
  document.getElementById("count_question").innerHTML = cnt_puestion + "/18";
}

// let ans = {
//     question:"?איזה מן מהפרחים הבאים אינו נחשב צמח מוגן בישראל",
//     ans1:"https://images.pexels.com/photos/2343170/pexels-photo-2343170.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500",
//     ans2:"https://images.pexels.com/photos/2480072/pexels-photo-2480072.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500",
//     ans3:"https://images.pexels.com/photos/1104365/pexels-photo-1104365.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500",
//     ans4:"https://images.pexels.com/photos/1046348/pexels-photo-1046348.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
// };

// let ans = {
//   question:"",
//   ans1:"",
//   ans2:"",
//   ans3:"",
//   ans4:""
// };
let ans;

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      console.log(this.responseText);
     ans =JSON.parse(this.responseText);
    //console.log(newAns);
      // if(ans.question != newAns.question){
      //   start();
      // }
      showQuestion();
      typing();
     
      console.log(ans);
      
    }
    
}
request();


function request(){
  xhttp.open("GET", "question.txt", true);
  xhttp.send();
};
//setInterval(request,1000);




let ans_num = {
  ans_1: "1",
  ans_2: "2",
  ans_3: "3",
  ans_4: "4"
};

let ans_name = { 
  ans_name_1: "",
  ans_name_2: "",
  ans_name_3: "",
  ans_name_4: ""
}





var qurtIndex=0;
var questionTyping;

 function typing(){
   questionTyping = ans.question;
    if(qurtIndex < questionTyping.length){
        let question;
        question = document.getElementById("question");
        question.innerHTML += questionTyping.charAt(qurtIndex);
        qurtIndex++;
        setTimeout(typing,50);
        for (let i in ans) {
          if(i != "question"){
            document.getElementById(i).style.opacity = 0.1;
          }
        }   
    }
    else{
      startTimer();
      //ansFadeIn();
      

            for (let i in ans) {
              if(i != "question"){
                document.getElementById(i).style.opacity = 1;
                  
             }
          }  
        }
      }
      
      
    
// function ansFadeIn(){
//   for (let i in ans) {
//     if(i != "question"){
//         if(document.getElementById(i).style.opacity <= 1){
//           document.getElementById(i).style.opacity += 0.1;
//           setTimeout(ansFadeIn,10);
//         }
//       }
//   }
// }




function showQuestion(){
  for(let i in ans){
    console.log(ans[i]);
    
    if(i != "question"){
      document.getElementById(i).src = ans[i];
     
    }
    
    for(let a in ans_num){
      document.getElementById(a).innerHTML = ans_num[a];
    }
}
}
function start(){
  showQuestion();
  typing();
}
 





   
  




const FULL_DASH_ARRAY = 283;
const WARNING_THRESHOLD = 10;
const ALERT_THRESHOLD = 5;

const COLOR_CODES = {
  info: {
    color: "green"
  },
  warning: {
    color: "orange",
    threshold: WARNING_THRESHOLD
  },
  alert: {
    color: "red",
    threshold: ALERT_THRESHOLD
  }
};

const TIME_LIMIT = 60;
let timePassed = 0;
let timeLeft = TIME_LIMIT;
let timerInterval = null;
let remainingPathColor = COLOR_CODES.info.color;

document.getElementById("timer").innerHTML = `
<div class="base-timer">
  <svg class="base-timer__svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
    <g class="base-timer__circle">
      <circle class="base-timer__path-elapsed" cx="50" cy="50" r="45"></circle>
      <path
        id="base-timer-path-remaining"
        stroke-dasharray="283"
        class="base-timer__path-remaining ${remainingPathColor}"
        d="
          M 50, 50
          m -45, 0
          a 45,45 0 1,0 90,0
          a 45,45 0 1,0 -90,0
        "
      ></path>
    </g>
  </svg>
  <span id="base-timer-label" class="base-timer__label">${formatTime(
    timeLeft
  )}</span>
</div>
`;


function onTimesUp() {
  clearInterval(timerInterval);
}

function startTimer() {
  timerInterval = setInterval(() => {
    timePassed = timePassed += 1;
    timeLeft = TIME_LIMIT - timePassed;
    document.getElementById("base-timer-label").innerHTML = formatTime(
      timeLeft
    );
    setCircleDasharray();
    setRemainingPathColor(timeLeft);

    if (timeLeft === 0) {
      onTimesUp();
    }
  }, 1000);
}

function formatTime(time) {
  const minutes = Math.floor(time / 60);
  let seconds = time % 60;

  if (seconds < 10) {
    seconds = `0${seconds}`;
  }

  return `${minutes}:${seconds}`;
}

function setRemainingPathColor(timeLeft) {
  const { alert, warning, info } = COLOR_CODES;
  if (timeLeft <= alert.threshold) {
    document
      .getElementById("base-timer-path-remaining")
      .classList.remove(warning.color);
    document
      .getElementById("base-timer-path-remaining")
      .classList.add(alert.color);
  } else if (timeLeft <= warning.threshold) {
    document
      .getElementById("base-timer-path-remaining")
      .classList.remove(info.color);
    document
      .getElementById("base-timer-path-remaining")
      .classList.add(warning.color);
  }
}

function calculateTimeFraction() {
  const rawTimeFraction = timeLeft / TIME_LIMIT;
  return rawTimeFraction - (1 / TIME_LIMIT) * (1 - rawTimeFraction);
}

function setCircleDasharray() {
  const circleDasharray = `${(
    calculateTimeFraction() * FULL_DASH_ARRAY
  ).toFixed(0)} 283`;
  document
    .getElementById("base-timer-path-remaining")
    .setAttribute("stroke-dasharray", circleDasharray);
}


