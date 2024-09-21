<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ONLINE EXAM | INSTRUCTION</title>
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<style type="text/css">
    .col{   
        height: fit-content;
        width: 98%;
        background-color: #2e25cf;
        -webkit-backdrop-filter: blur(5px);
        border-radius: 12px;
        backdrop-filter: blur(15px);
        padding: 20px;
        margin-left: 20px;
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
        font-size: 15px;
    }
    .instructions {
        margin: 20px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 10px;
        background-color:skyblue;
        box-shadow: 0 0 10px rgba(10, 110, 110, 1.0);
    }
</style>
<body>
    @include('student/navbar');
    <div class="container">
        <div class="instructions">
            <h2><u>Instructions</u></h2>
            @foreach ($data as $arj)
            <ol>
                <li>Make sure you have a stable internet connection and a compatible device.</li>
                <li>Read each question carefully and choose the correct answer.</li>
                <li>Do not refresh the page or navigate away from the exam window.</li>
                <li>Do not use any external resources or materials during the exam.</li>
                <li>If you encounter any technical issues, contact the exam administrator immediately.</li>
            </ol>
            <h2><u>Timing</u></h2>
            <p>The exam will start automatically when you click the "Start Exam" button. You will have {{$arj->time}} min to complete the exam.</p>
            <h2>Submission</h2>
            <p>When you have completed the exam, click the "Submit" button to submit your answers.</p>
            <p><strong>Note:</strong> Once you submit your answers, you will not be able to go back and change them.</p>
        </div>
        <hr>
        <div class="col mt-3">
            <h4>{{$arj->ename}}</h4>
            <hr>
            <div class="row">
                <p class="mt-2"><i class="bi bi-question-circle" ></i>Total marks : {{$arj->total}}</p>
                <p><i class="bi bi-clock-history" ></i>	time :{{$arj->time}} mins</p>
                <p><i class="bi bi-check-circle" ></i> <span>marks for correct:{{$arj->mark}}</span></p>
            </div>
            <a href="{{route('selqus',$arj->eid)}}">
                <button class="btn btn-primary" style="margin-left:2px;">start Exam</button>
            </a>
        </div>
    @endforeach
</div>
</body>
</html>
