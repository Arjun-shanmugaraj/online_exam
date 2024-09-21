    <!DOCTYPE html>
    <html>
    <head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>ONLINE EXAM | EXAM</title>
    	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    </head>
    <style type="text/css">
        .col{   
            height: fit-content;
            width: 100%;
            background-color: #4b4b4f;
            -webkit-backdrop-filter: blur(5px);
            backdrop-filter: blur(15px);
            padding: 20px;
            border-radius: 5px;
            margin-top: 5px;
            font-weight: bold;
        }
        h5{
            width: fit-content;
            padding: 10px;
        }
        .container{
            color: white;
        }
        i{
            font-size:20px;
            border-radius: 20px;
            border: 1px solid white;
        }
        table{
            border-spacing: 200em;
        }
        #btn{
            float: right;
            margin-right: 40%;
        }
         .btn1{
            margin-top: 5px;
            border-radius:80px;
            width: 30px;
            height: 30px;
        }
        .quiz-container {
                width: 100%;
                background-color: transparent;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            /* Style the question text */
            .question {
                font-size: 18px;
                font-weight: bold;
                margin-bottom: 10px;
            }

            /* Style the radio buttons */
            .radio-button {
                margin-bottom: 10px;
            }

            /* Hide the radio button circle */
            .radio-button input[type="radio"] {
                display: none;
            }

            /* Style the radio button labels */
            .radio-button label {
                margin-right: 20px;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
                cursor: pointer;
            }

            /* Style the selected radio button label */
            .radio-button input[type="radio"]:checked + label {
                background-color: #337ab7;
                color: #fff;
            }
    </style>
    <body>
    @include('student/navbar')
    <div class="container"> 
    <table>
        <tr>
            <td>
                <button class="bx bx-pause btn1 icons" id="pause-resume-button"></button>
            </td>
            <td>
        <div id="timer-display"></div>
            </td>
        </tr>
    </table>    

        @foreach($question as $question)
      <a href="{{route('analytics',$question->ename)}}"> 
    <button class="btn btn-primary">submit</button>
    </a>            
        <h1 id="name" hidden>{{ $user->fname}}</h1>
        <h1 id="email" hidden>{{ $user->email}}</h1>
        <div id="questions">
    <span id="ename">{{$question->ename}}</span> :
    <hr>
    <h4 id="qusid" hidden >{{$question->qusid}}</h4>
    <div class="col">Q:
        <span id="id">{{$question->id}}</span>
        <hr>
        <div class="row" >   
            <p id="question">{{$question->question}}</p>
        </div>
    </div>
    <div class="quiz-container">
        <div class="radio-button">
            <div class="col">
                <div class="row">
                    
            <input type="radio" id="op1" name="sel_ans" value="{{$question->op1}}">
            <label for="op1">A){{$question->op1}}</label>
                </div>
            </div>
            <div class="col">
                <div class="row">
            <input type="radio" id="op2" name="sel_ans" value="{{$question->op2}}">
            <label for="op2">B){{$question->op2}}</label>
        </div>
    </div><div class="col">
                <div class="row">
            <input type="radio" id="op3" name="sel_ans" value="{{$question->op3}}">
            <label for="op3">C){{$question->op3}}</label>
        </div>
    </div>
    <div class="col">
                <div class="row">
            <input type="radio" id="op4" name="sel_ans" value="{{$question->op4}}">
            <label for="op4">D) {{$question->op4}}</label>
        </div>
    </div>
        </div>

    </div>
    <div class="col option" hidden >
        <div class="row">
            (d)<span id="ans">{{$question->ans}}</span>
        </div>
    </div>
    @endforeach
    </div>
    </div>
    <div class="container">
      <div class="row" >
        <div class="col-4 mt-3" style="background-color:transparent;" >
                <button class="btn btn-primary" id="previous-btn">Previous</button>
        </div>
        <div class="col-8 mt-3" style="background-color:transparent;">
                <button class="btn btn-primary" id="next-btn">Next</button>
        </div>
    </div>
    </div>
    </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
 
              let timerInterval;
    let paused = false;
    let startTime = {{$time}} * 60 * 1000; // 180 minutes
    let currentTime = startTime;

    function startTimer() {
      timerInterval = setInterval(() => {
        currentTime -= 1000;
        let hours = Math.floor(currentTime / 3600000);
        let minutes = Math.floor((currentTime % 3600000) / 60000);
        let seconds = Math.floor((currentTime % 60000) / 1000);
        document.getElementById("timer-display").innerHTML = `${hours.toString().padStart(2, "0")}:${minutes.toString().padStart(2, "0")}:${seconds.toString().padStart(2, "0")}`;
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
                    var currentId = {{$question->id}};
                    var usersCount = {{$users->count()}};
                    // alert("cur id "+currentId+"user count"+usersCount);
                    $('#next-btn').click(function(){
                        var name=$("#name").text();
                        var email=$("#email").text();
                        var ename=$("#ename").text();
                        // alert("EX:"+ename);
                        var time =$("#timer-display").text();
                        var sel_ans=$("input[name='sel_ans']:checked").val();
                        // alert(sel_ans);
                        var ans =$("#ans").text();
                        var qusid=$("#qusid").text();
                        var question =$("#question").text();
                        var qus_status = sel_ans? 0 : 1; // set qus_status to 0 if a radio button is selected, 1 otherwise
                        if (!sel_ans) {
                        sel_ans = 'Not Attempted'; // or any other default value you prefer
                    }   
                        $("input[name='sel_ans']").prop("checked", false); // unselect radio button
                        $.ajax({
                            url: '{{ route('getNextData') }}',
                            type: 'GET',
                            data: {
                                currentId: currentId,
                                ename: ename,
                            },
                            success: function(data) {
                                if (data.message) {
                                    confirm("Are you sure you want to submit the exam?");
                                window.location.href = "{{route('analytics',$question->ename)}} ";

                                } else {
                                    $('#ename').text(data.ename);
                                    $('#qusid').text(data.qusid);
                                    $('#id').text(data.id);
                                    $('#question').text(data.question);
                                    $('#op1').val(data.op1);
                                    $('label[for="op1"]').text('A) ' + data.op1);
                                    $('#op2').val(data.op2);
                                    $('label[for="op2"]').text('B) ' + data.op2);
                                    $('#op3').val(data.op3);
                                    $('label[for="op3"]').text('C) ' + data.op3);
                                    $('#op4').val(data.op4);
                                    $('label[for="op4"]').text('D) ' + data.op4);
                                    $('#ans').text(data.ans);
                                    currentId = data.id;
                                    // alert("CUR ID"+currentId);
                                    // Insert data into insertanswer
                                    $.ajax({
                                        url: '{{ route('insertanswer') }}',
                                        type: 'GET',
                                        data: {
                                            name:name,
                                            email:email,
                                            question:question,
                                            ename:ename,
                                            time:time,
                                            sel_ans:sel_ans, 
                                            qus_status:qus_status,
                                            ans:ans,
                                            qusid:qusid,
                                        },
                                        success: function(response) {
                                        // alert("Success");

                                        console.log(response);
                                    }
                                });
                                }
                            }
                        });
                    });
                    $('#previous-btn').click(function(){
                        var ename=$("#ename").text();
                        $.ajax({
                            url: '{{ route('getPreviousData') }}',
                            type: 'GET',
                            data: {
                                currentId: currentId,
                                ename: ename,
                            },
                            success: function(data) {
                                if (data.message) {
                                    alert(data.message);
                                } else {
                                    $('#ename').text(data.ename);
                                    $('#qusid').text(data.qusid);
                                    $('#id').text(data.id);
                                    $('#question').text(data.question);
                                    $('#op1').val(data.op1);
                                    $('label[for="op1"]').text('A) ' + data.op1);
                                    $('#op2').val(data.op2);
                                    $('label[for="op2"]').text('B) ' + data.op2);
                                    $('#op3').val(data.op3);
                                    $('label[for="op3"]').text('C) ' + data.op3);
                                    $('#op4').val(data.op4);
                                    $('label[for="op4"]').text('D) ' + data.op4);
                                    $('#ans').text(data.ans);
                                    currentId = data.id;
                                }
                            }
                        });

    });
                });
    </script>
    </html>   