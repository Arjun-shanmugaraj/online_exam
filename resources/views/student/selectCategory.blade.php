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
    color: white;
    padding: 20px;
    border-radius: 10px;
}
.col{
    margin-top: 5px;
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
        <h2>Select Exam Categories</h2>
        @foreach($data as $arj)
    <div class="col">
        <a href="{{route('selexam',$arj->eid)}}" style="text-decoration:none; color: white;">
            <h4 style="margin-left: 13px;margin-top:5px;">{{$arj->ename}}</h4>
        </a>
    </div>
@endforeach
      </div>
</body>

</html>  