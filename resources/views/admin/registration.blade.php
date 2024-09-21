<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
        <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
</head>
<style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
}

body{
    background-color: #c9d6ff;
    background: linear-gradient(to right, #e2e2e2, #c9d6ff);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    height: 100vh;
}

.container{
    background-color: #fff;
    border-radius: 30px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35);
    position: relative;
    overflow: hidden;
    width: 768px;
    max-width: 100%;
    min-height:100%;
}

.container p{
    font-size: 14px;
    line-height: 20px;
    letter-spacing: 0.3px;
    margin: 20px 0;
}

.container span{
    font-size: 12px;
}
    
.container a{
    color: #333;
    font-size: 13px;
    text-decoration: none;
    margin: 15px 0 10px;
}

.container button{
    background-color: #2da0a8;
    color: #fff;
    font-size: 12px;
    padding: 10px 45px;
    border: 1px solid transparent;
    border-radius: 8px;
    font-weight: 600;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    margin-top: 10px;
    cursor: pointer;
}
.container form{
    background-color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0 40px;
    height: 100%;
}

.container input{
    background-color: #eee;
    border: 1px solid grey;
    margin: 8px 0;
    color: black;
    padding: 10px 15px;
    font-size: 13px;
    border-radius: 8px;
    width: 100%;
    font-weight: bold;
    outline: none;
}

.form-container{
    position: absolute;
    top: 0;
    height: 100%;
    transition: all 0.6s ease-in-out;
}

.social-icons{
    margin: 20px 0;
}

.social-icons a{
    border: 1px solid #ccc;
    border-radius: 20%;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    margin: 0 3px;
    width: 40px;
    height: 40px;
}


</style>
<body>





<!-- // resources/views/admin/login.blade.php -->

<link rel="stylesheet" href="{{ asset('css/login.css') }}">

    <div class="container" id="container">
      <div class="form-container">
        <form method="POST" action="{{ route('admin/registration') }}" enctype="multipart/form-data">
          <h1>Create Account</h1>
          <div class="form-group">
          <label for="profile">Profile:</label>
          <input type="file" id="profile" name="img"  class="form-control">  
          <label for="firstname">Firstname:</label>
          <input type="text" id="firstname" name="firstname" value="{{ old('firstname') }}" class="form-control">
        @error('firstname')
            <div class="error">{{ $message }}</div>
        @enderror
        <label for="lastname">lastname:</label>
        <input type="text" id="lastname" name="lastname" value="{{ old('lastname') }}" class="form-control">
        @error('lastname')
            <div class="error">{{ $message }}</div>
        @enderror
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="{{ old('username') }}" class="form-control">
        @error('username')
            <div class="error">{{ $message }}</div>
        @enderror
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control">
        @error('email')
            <div class="error">{{ $message }}</div>
        @enderror
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" class="form-control">
        @error('password')
            <div class="error">{{ $message }}</div>
        @enderror
        <label for="password_confirmation">Retype Password:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
        @error('password_confirmation')
            <div class="error">{{ $message }}</div>
        @enderror
          </div>
              <button type="submit" class="btn btn-primary">Register</button>
    <p>Already have an account? <a href="{{route('adminlogin')}}">Login</a></p>
@method('GET')
        </form>
      </div>
    </div>
</body>
</html>