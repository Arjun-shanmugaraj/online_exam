<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ONLINE EXAM | PROFILE</title>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>
<style type="text/css">
	.container{
		color: white;
	}
.container1{
    height: fit-content;
    width: 100%;
    padding: 35px;
    box-shadow:1px 1px 1px 3px;
    border-radius: 10px;
}
body{
    width: 100%;
}

table{
    color: black;
}
</style>
<body>
    
	@include('student/navbar');
    <div class="container">

        <img src="{{URL::asset('images/'.$data->img)}}" alt="profile Pic" height="120" width="120" style="border-radius: 160px;border:2px solid green;">
        <a href="{{route('editPro',$data->mobile)}}">
        <button class="btn btn-primary m-3" style="border:none;font-size: 1.3rem;"> <i class="bx bx-edit"></i> Edit Profile</button>
        </a>
        <div class="container mt-3">

        <div style="display: flex; align-items: center;">
  <span style="font-size: 2rem; font-weight: bold;">{{$data->fname}} {{$data->lname}}</span>    
</div>
<div style="display: flex; align-items: center;">
  <i class="bx bx-envelope icon" style="font-size: 2rem;"></i>
  <span>{{$data->email}}</span>
</div>
        </div>
        <div class="container1 mt-3" style="background-color: #EAE1D2;color:blue ;">
            <p style="font-size: 1.8rem;">Your presence</p>
            <div class="row">
                <div class="col">
            <h4>Name</h4>
            <p style="color: black;">{{ $data->fname }}</p>
                </div>
                <div class="col">
            <h4>Mobile</h4>
            <p style="color: black;">{{$data->mobile}}</p>
                </div>
            </div>
                <div class="row">
                    <div class="col">
            <h4>Education</h4>
            <p style="color: black;">{{$data->education}}</p>
                </div>
                <div class="col">
            <h4>DOB</h4>
            <p style="color: black;">{{$data->dob}}</p>
                </div>
            </div>
            <hr>
                 <div class="row">
                    <div class="col">
            <h4>City</h4>
            <p style="color: black;">{{$data->city}}</p>
                </div>
                    <div class="col">                    
            <h4>State</h4>
            <p style="color: black;">{{$data->state}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
            <h4>Gender :</h4>
            <p style="color: black;">{{$data->gender}}</p>
                </div>
                <div class="col">
            <h4>board </h4>
            <p style="color: black;">{{$data->board}}</p>
        </div>
            </div>      
    </div>
</div>
</body>
</html>