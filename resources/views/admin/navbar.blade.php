<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
 font-family: 'Open Sans', sans-serif;
  font-size: 16px;
  line-height: 1.5;
  background-color:skyblue;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}
select{
  height: 5px;
  width: 100px;
  position: fixed;
  top: 10;
  left: 20;
  background-color: transparent;
  padding-top: 60px;

}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 15px;
  color:#6203fc;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.name{
    color: #6203fc;
    margin-left: 20px;
    font-size: 1.9rem;
}
.icon{
background-color: transparent;
border-radius:0;
border:none;
}
#mySidenav {
  transition: width .2s;
}
</style>
</head>
<body>
        <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

           <header>
                    <div class="image-text">

                            <span class="name">Welcome </span>
                    </div>

                </header>                    
        <li class="nav-link">
            <a href="{{route('dashboard')}}">
                <i class='bx bx-home-alt icon' ></i>
                <span class="text nav-text">Home</span>
            </a>
        </li>

        <li class="nav-link">
            <a href="{{route('profile')}}">
                <i class='bx bx-user icon' ></i>
                <span class="text nav-text">Profile</span>
            </a>
        </li>
        <li class="nav-link">
            <a href="{{route('selectCategory')}}">
                <i class='bx bx-barcode icon' ></i>
                <span class="text nav-text">Select Category</span>
            </a>
        </li>

        <li class="nav-link">
            <a href="{{route('freeBooks')}}">
                <i class='bx bx-book icon' ></i>
                <span class="text nav-text">Free Books</span>
            </a>
        </li>
        <li class="nav-link">
            <a href="{{route('leaderBoard')}}">
                <i class='bx bx-crown icon'></i>
                <span class="text nav-text">Leaderboard</span>
            </a>
        </li>
        <li class="nav-link">
            <a href="{{route('contactUs')}}">
                <i class='bx bx-envelope icon' ></i>
                <span class="text nav-text">Contact Us</span>
            </a>
        </li>
        <li class="nav-link">
            <a href="{{route('terms')}}">
                <i class='bx bx-info-circle icon' ></i>
                <span class="text nav-text">Terms&Conditions</span>
            </a>
        </li>
        <li class="nav-link">
            <a href="{{route('rate')}}">
                <i class='bx bx-wallet icon' ></i>
                <span class="text nav-text">Rate US</span>
            </a>
        </li>
        </ul>
        <div class="bottom-content">
        <li class="nav-link">
            <a href="{{route('logout')}}">
                <i class='bx bx-log-out icon' ></i>
                <span class="text nav-text">Logout</span>

            </a>
        </li> 
        </div>
        </div>
        </span>
    
        <nav class="navbar navbar-expand-lg  navbar-light bg-dark">
            <span style="font-size:30px;cursor:pointer;color:white;width:40px;margin-left:15px" onclick="openNav()">&#9776;</span>
            
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </nav>

</body>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.body.style.overflow = "hidden";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.body.style.overflow = "auto";
}

document.addEventListener("click", function(event) {
  if (!event.target.closest("#mySidenav") && !event.target.closest(".navbar")) {
    closeNav();
  }
});
</script>
   
</html> 
