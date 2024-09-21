<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ONLINE EXAM | EXAM CATEGORY</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>
<style type="text/css">
    
.container{
    height: 200px;
    width: 100%;
    color: white;
    padding: 20px;
    margin-left: 25%;
    border-radius: 10px;
}
.col{
    margin-top: 5%;
    padding: 15px;
    height: fit-content;
    width: 100%;
    border-radius: 10px;
    background-color:#262525;
}
h4{
/*    padding:10px;*/
}
img{
    border-radius:30px;
    height:50px;
    width:40;
    margin-left: 10px;
}
</style>
<body>
    @include('student/navbar');

    <div class="container">
    
<h5>Exams </h5>
<hr>
@foreach($data as $arj)
<div class="col">
            <h4>{{$arj->ename}}</h4>
            <hr>
                        <div class="row">
                            <div class="col-4">
                                
            <p><i class="bi bi-question-circle" ></i>{{$questionsCount}}Qns</p>
                            </div>
                            <div class="col-4">
                                
            <p><i class="bi bi-clock-history" ></i>{{$arj->time}}mins</p>
                            </div>
                            <div class="col-4">
                                
            <p><i class="bi bi-check-circle" ></i> <span>{{$arj->mark}}mark</span></p>
                            </div>
            </div>
            <a href="{{route('examIns',$arj->eid)}}">
                
            <button class="btn btn-primary" style="margin-left:2px;">EXAM</button>
            </a>
    </div>
@endforeach
</div>
</body>
</html>  