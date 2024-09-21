<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ONLINE EXAM | RATE</title>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
</head>
<style type="text/css">
  :root{
  --primary-colour: #191919;
  --secondary-colour: hsl(233 80% 70%);
 
  --star-colour: hsl(38 90% 55%);
}

body{
  width: 100vw;
  height: 100vh;
  
  overflow: hidden;
  
  background: var(--primary-colour);
  
  font-family: sans-serif;
  color: #fff;
}

.container1{
  position: relative;
  top: 20%;
  left: 50%;
  
  width: 40%;
  height: 20%;
  
  transform: translate(-50%, -50%) rotateY(180deg);
}

.container1 .container__items{
  display: flex;
  align-items: center;
  justify-content: center;
  
  gap: 0 .5em;
  
  width: 100%;
  height: 100%;
}

.container1 .container__items input{
  display: none;
}

.container1 .container__items label{
  width: 20%;
  aspect-ratio: 1;
  cursor: pointer;
}

.container1 .container__items label .star-stroke{
  display: grid;
  place-items: center;
  width: 100%;
  height: 100%;
  background: var(--secondary-colour);
  clip-path: polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%);
}

.container1 .container__items label .star-stroke .star-fill{
  width: 70%;
  aspect-ratio: 1;
  background: var(--primary-colour);
  clip-path: polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%);
}

.container1 .container__items input:hover ~ label .star-stroke,.container1 .container__items input:checked ~ label .star-stroke{
  background: var(--star-colour);
}

.container1 .container__items input:checked ~ label .star-stroke .star-fill{
  background: var(--star-colour);
}

.container1 .container__items label:hover .label-description::after{
  content: attr(data-content);
  position: fixed;
  left: 0;
  right: 0;
  
  margin-top: 1em;
  margin-inline: auto;
  
  width: 100%;
  height: 2em;
  
  color: #fff;
  
  text-align: center;
  font-size: 2rem;
  
  transform: rotateY(180deg);
}
.container1{
  margin-right: 60%;
}
.a1{
  margin-top: 45%;
  color: white;
  margin-bottom: -20%;
}
.btn{
margin-left: 42%;
margin-top: 22%;
}
</style>
<body>
  @include('student/navbar');

<center>
  <h1 class="a1">Please rate your Experience</h1>
    <input hidden id="username" class="form-control" readonly value="{{ Auth::check() ? Auth::user()->fname : '' }}">
    <input hidden id="email" class="form-control" readonly value="{{ Auth::check() ? Auth::user()->email : '' }}">
</center>
<div class="container1">
  <div class="container__items">
    <input type="radio" name="stars" id="st5">
    <label for="st5">
      <div class="star-stroke">
        <div class="star-fill"></div>
      </div>
      <div class="label-description" data-content="Excellent"></div>
    </label>
    <input type="radio" name="stars" id="st4">
    <label for="st4">
      <div class="star-stroke">
        <div class="star-fill"></div>
      </div>
      <div class="label-description" data-content="Good"></div>
    </label>
    <input type="radio" name="stars" id="st3">
    <label for="st3">
      <div class="star-stroke">
        <div class="star-fill"></div>
      </div>
      <div class="label-description" data-content="OK"></div>
    </label>
    <input type="radio" name="stars" id="st2">
    <label for="st2">
      <div class="star-stroke">
        <div class="star-fill"></div>
      </div>
      <div class="label-description" data-content="Bad"></div>
    </label>
    <input type="radio" name="stars" id="st1">
    <label for="st1">
      <div class="star-stroke">
        <div class="star-fill"></div>
      </div>
      
      <div class="label-description" data-content="Terrible"></div>
    </label>
  </div>
</div>
<span id="istar"></span>
  <button class="btn btn-primary">Submit</button>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    $(".btn").click(function(){
      var star = $('input[name="stars"]:checked');
      var rating = star.next('label').find('.label-description').data('content');
      var username=$("#username").val();
      var email=$("#email").val();  
        // alert(username + rating);
        $.ajax({
                    url:'http://127.0.0.1:8000/ratsubmit/',
                    type: 'GET',
                    data: {
                        '_token': '{{ csrf_token() }}',
                        username:username,
                        email:email,
                        rating:rating
                    },
                    success:function(response){
                        // alert('Successfully inserted');
                        window.location.href = "{{route('dashboard')}} ";
                    }
                });
    });
  });
</script>
</html>