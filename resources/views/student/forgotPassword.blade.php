<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ONLINE EXAM | LOGIN</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style type="text/css">
body{
  background-color: skyblue;
  color: black;
}
  .wrapper1{
    width: 100%;
    height: 100%;
    padding-bottom: 20%;
    border-radius: 10px;
  }
  .container1{
    padding: 20px;
    width: 100%;
    border-top: 2px solid black;
    margin-top: 10px;
    border-top-left-radius: 40px;
    height: 20%;
    border-bottom: none;
  }
  h2{
    background-color: blue;
    width:50%;
    margin: 10px;
    padding:5px;
    border-radius: 10px;
  }
  #myInput {
  /* Background color */
  background-color:white; /* or black */

  /* Text color */
  color: black; /* or white */

  /* Border color */
  border: 1px solid black; /* or black */

  /* Border radius */
  border-radius: 5px;

  /* Padding */
  padding: auto;

  /* Font properties */
  font-size: 16px;
  font-family: Arial, sans-serif;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}
.shad{
  padding:30px;
  margin-top: 10px;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
  shadow-lg p-3 mb-5
}
p{
  margin-top: 10px;
}
</style>
<body>
  <div class="wrapper1">
  @if($errors->any())
        <script>
            alert("Invalid email or password");
        </script>
    @endif
</form>
<form action="" method="post">
      <div class="container1">
        <div class="shad">
          <center>
            <h2 style="color: white;">OTP</h2>          
          </center>
          <div class="input-group mt-4">
            <input type="email" class="form-control" id="myInput" name="email"  placeholder="Email">
            <!-- <input type="email" class="form-control" id="myInput" name="email"  placeholder="Email" > -->
          </div>
          <center>
<div class="row">
  <div class="col">
          <button type="submit" name="submit" class="btn btn-primary mt-3">Sent OTP</button>
  </div>
</div>
          </center>
        </div>                
        @method('GET')
      </form>
    </div>
  </body>
  </html> 
