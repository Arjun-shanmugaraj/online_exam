<!DOCTYPE html>
  <!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <title>ONLINE EXAM | DASHBOARD</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
</head>
<style type="text/css">
.codl{   
        margin: 20px;
        height: fit-content;
       padding: 10px;
       width: fit-content;
       background-color: rgba(155, 155, 155, 0.4);
      -webkit-backdrop-filter: blur(5px);
      border-radius: 10px;
      backdrop-filter: blur(5px);
      padding: 20px;
      margin: 10px;
      font-weight: bold;
}

h5{
    border: 1px solid black;
    width: fit-content;
    border-radius: 10px;
    padding: 10px;
}
.container{
    width:100%;
    color: black;
}
p{
    margin-top: 200px;
    border: 1px solid gray;
    border-radius: 5px;
    width: fit-content;
    padding: 5px;
}
img{
    border-radius:30px;
    margin-left:30px;
    height:50px;
    width:40;
    margin-bottom: 19px;
}
a{
    color: white;
    text-decoration: none;

}
.containers{
    height: 100%;
    width: 90%;
    padding: 20px;
    margin-left: 10%;
    border-radius: 10px;
}
.row{
    padding: 15px;
    margin-right: 20px;
    width: 100%;
    border-radius: 10px;
    background-color:#262525;
}
</style>
<body>
@include('student/navbar');

<div class="containers">
    <center>
        
<h5>ONLINE EXAM</h5>
    </center>
        @foreach($data as $arj)
    <div class="row mt-4">
    <div class="col">
        <a href="{{route('selexam',$arj-> eid)}}" style="text-decoration:none; color: white;">
                        <h4 style="margin-left: 30px;">{{$arj->ename}}</h4>
                        
        </a>
    </div>
      </div>
@endforeach
</div>
<hr>
<div class="containers">
    <center>
        
<h5 class=" mb-3" >E-Books</h5>
    </center>
     @foreach($user as $arj)
    <div class="row mt-3">
    <div class="col-9">
            <span style="color: white;">{{$arj->name}}</span>

     </div>
     <div class="col-3">             
        <a href="{{route('download',$arj->id)}}" title="Download">
                <i class="fa fa-cloud-download fa-2x"></i>
        </a>
    </div>
</div>
@endforeach
</div>  
</body>
</html>