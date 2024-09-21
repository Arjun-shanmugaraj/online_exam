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
        #ans{
        background-color:skyblue;
        color: black;
    }

</style>
<body>

@include('student/navbar');
    @foreach($question as $question)
<div class="container">
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
        <div class="col" id="op1">
            <div class="row" id="op1">
        <label for="op1" id="op1">A){{$question->op1}}</label>
            </div>
        </div>
        <div class="col" id="op2">
            <div class="row" id="op2">
        <label for="op2" id="op2">B){{$question->op2}}</label>
    </div>
</div><div class="col" id="op3">
            <div class="row" id="op3">
        <label for="op3" id="op3">C){{$question->op3}}</label>
    </div>
</div>
<div class="col" id="op4">
            <div class="row" id="op4">
        <label for="op4" id="op4">D) {{$question->op4}}</label>
    </div>
</div>
<div class="col" >
            <div class="row" >
        Answer:<label for="ans" id="ans">{{$question->ans}}</label>
    </div>
</div>
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
                var currentId = {{$question->id}};
                var usersCount = {{$users->count()}};
                // alert("cur id "+currentId+"user count"+usersCount);
                $('#next-btn').click(function(){
                     var ename=$("#ename").text();
                    $.ajax({
                        url: '{{ route('ansgetNextData') }}',
                        type: 'GET',
                        data: {
                            currentId: currentId,
                            ename:ename,
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
                                $('label[for="op1"]').text('A) ' +  data.op1);
                                $('#op2').val(data.op2);
                                $('label[for="op2"]').text('B) ' +  data.op2);
                                $('#op3').val(data.op3);
                                $('label[for="op3"]').text('C) ' +  data.op3);
                                $('#op4').val(data.op4);
                                $('label[for="op4"]').text('D) ' + data.op4);
                                $('#ans').val(data.ans);
                                $('label[for="ans"]').text(data.ans);
                                currentId = data.id;
                                // alert("CUR ID"+currentId);
                                // Insert data into insertanswer
                            }
                        }
                    });
                });
                $('#previous-btn').click(function(){
                    var ename=$("#ename").text();
                    $.ajax({
                        url: '{{ route('ansgetPreviousData') }}',
                        type: 'GET',
                        data: {
                            currentId: currentId,
                            ename:ename,
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