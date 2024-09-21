<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style type="text/css">
    body{
        background-color: black;
    }
    .btn1{
        margin-top: 5px;
        border-radius:80px;
        width: 30px;
        height: 30px;
    }
</style>
<body>
<table>
    <tr>
        <td>
            <button class="bx bx-pause btn1 icons" id="pause-resume-button"></button>
        </td>
        <td>
    <div id="timer">00:00</div>
        </td>
    </tr>
</table>
<div>{{$fname}}</div>
</body>
<script>
  let timerInterval;
  let paused = false;
  let startTime = 180 * 60 * 1000; // 180 minutes
  let currentTime = startTime;

  function startTimer() {
    timerInterval = setInterval(() => {
      currentTime -= 1000;
      let minutes = Math.floor(currentTime / 60000);
      let seconds = Math.floor((currentTime % 60000) / 1000);
      document.getElementById("timer").innerHTML = `${minutes}:${seconds.toString().padStart(2, "0")}`;
      if (currentTime <= 0) {
        clearInterval(timerInterval);
        alert("Time's up!");
      }
    }, 1000);
  }

  function pauseResumeTimer() {
    if (paused) {
      startTimer();
      paused = false;
      document.getElementById("pause-resume-button").innerHTML = "";
    } else {
      clearInterval(timerInterval);
      paused = true;
      document.getElementById("pause-resume-button").innerHTML = "";
    }
  }

  document.getElementById("pause-resume-button").addEventListener("click", pauseResumeTimer);
  startTimer();
</script>
</html>