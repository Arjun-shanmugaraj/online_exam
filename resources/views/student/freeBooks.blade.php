<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
</head>

<style type="text/css">
		
.container{
    height: 100%;
    width: 100%;
    margin: 10% ;
    color: white;
    padding: 20px;
    margin-right: 10px;
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
@include('student/navbar')
<div class="container"style="margin-top:50px;">
    
<h5 class="mt-3 mb-3" style="color: white;">E-Books</h5>
     @foreach($data as $arj)
    <div class="row mt-3">
    <div class="col-9">
            <span   >{{$arj->name}}</span>
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