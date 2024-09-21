<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ONLINE EXAM | REGISTRATION</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="
	sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style type="text/css">
body{
	background-color: skyblue;
	color: black;
	font-weight: bolder;
  font-family:Roman;
}
	.wrapper1{
		width: 100%;
		height: 100%;
		padding-bottom: 20%;
		border-radius: 10px;
/*		border: 1px solid black;*/
	}
	.container1{
		padding: 10px;
		width: 100%;
		border-top: 2px solid black;
		margin-top: 10px;
		border-top-left-radius: 40px;
		height: 20%;
		border-bottom: none;
	}
	h3{
		margin-bottom: -30px;
		margin-top: 45px;
		margin-left:25%;
	}
input[placeholder] {
  color:yellow; /* change the color to your desired value */
}
	#myInput {
  /* Background color */
  background-color: white; /* or black */

  /* Text color */
  color: black; /* or white */

  /* Border color */
  border: 1px solid black; /* or black */

  /* Border radius */
  border-radius: 5px;

  /* Padding */
  padding:auto;

  /* Font properties */
  font-size: 16px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}
.shad{
	margin: 10px;
	margin-bottom: 5px;
	padding:30px;
	border-radius: 10px;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
	shadow-lg p-3 mb-5
}
  .gender-radio {
    display: inline-block;
    margin-right: 20px;
  }
  .gender-radio input[type="radio"] {
    margin-right: 10px;
  }
  .fa-icon {
    font-size: 18px;
    margin-right: 5px;
  }
</style>
<body>
	<div class="wrapper1">
		<form action="{{route('stuReg')}}" method="POST" enctype="multipart/form-data">
			<div class="container1">
				<div class="shad">
				<center class="p-3"><h2 >Registration</h2></center>
		@if($errors->any())
<ul>
	{!! implode('',$errors->all('<li>:message</li>'))!!}
</ul>
@endif
						<label>PROFILE :</label>
					<div class="input-group mt-2">
						<input type="file" class="form-control" id="myInput" name="img"  >
					</div>
					<div class="row">
					<div class="col-6">
					<div class="input-group mt-2">
						<input type="text" class="form-control" id="myInput" name="fname"  placeholder=" First Name" >
					</div>
					</div>
					<div class="col-6">
					<div class="input-group mt-2">
						<input type="text" class="form-control" id="myInput" name="lname"  placeholder="Last Name" >
					</div>
					</div>
				</div>
					<div class="input-group mt-2">
						<input type="text" class="form-control" id="myInput" maxlength="10" name="mobile"  placeholder="Mobile No" >
					</div>
					<div class="input-group mt-2">
						<input type="email" class="form-control" id="myInput" name="email"  placeholder="Email" >
					</div>
					<div class="input-group mt-2">
						<input list="state-boards" class="form-control" id="myInput" placeholder="BOARD" name="board">
<datalist id="state-boards">
  <option value="Andhra Pradesh">Andhra Pradesh State Board of Intermediate Education (APSBIE)</option>
  <option value="Arunachal Pradesh">Arunachal Pradesh Board of Secondary Education (APBSE)</option>
  <option value="Assam">Assam Higher Secondary Education Council (AHSEC)</option>
  <option value="Bihar">Bihar School Examination Board (BSEB)</option>
  <option value="Chhattisgarh">Chhattisgarh Board of Secondary Education (CGBSE)</option>
  <option value="Goa">Goa Board of Secondary and Higher Secondary Education (GBSHSE)</option>
  <option value="Gujarat">Gujarat Secondary and Higher Secondary Education Board (GSHSEB)</option>
  <option value="Haryana">Board of School Education, Haryana (BSEH)</option>
  <option value="Himachal Pradesh">Himachal Pradesh Board of School Education (HPBOSE)</option>
  <option value="Jammu and Kashmir">Jammu and Kashmir State Board of School Education (JKBOSE)</option>
  <option value="Jharkhand">Jharkhand Academic Council (JAC)</option>
  <option value="Karnataka">Karnataka Secondary Education Examination Board (KSEEB)</option>
  <option value="Kerala">Kerala Pareeksha Bhavan (KPB)</option>
  <option value="Madhya Pradesh">Madhya Pradesh Board of Secondary Education (MPBSE)</option>
  <option value="Maharashtra">Maharashtra State Board of Secondary and Higher Secondary Education (MSBSHSE)</option>
  <option value="Manipur">Manipur Board of Secondary Education (MBSE)</option>
  <option value="Meghalaya">Meghalaya Board of School Education (MBSE)</option>
  <option value="Mizoram">Mizoram Board of School Education (MBSE)</option>
  <option value="Nagaland">Nagaland Board of School Education (NBSE)</option>
  <option value="Odisha">Odisha Board of Secondary Education (OBSE)</option>
  <option value="Punjab">Punjab School Education Board (PSEB)</option>
  <option value="Rajasthan">Rajasthan Board of Secondary Education (RBSE)</option>
  <option value="Sikkim">Sikkim Board of Secondary Education (SBSE)</option>
  <option value="Tamil Nadu">Tamil Nadu State Board of Education (TNSBE)</option>
  <option value="Telangana">Telangana State Board of Intermediate Education (TSBIE)</option>
  <option value="Tripura">Tripura Board of Secondary Education (TBSE)</option>
  <option value="Uttar Pradesh">Uttar Pradesh Board of High School and Intermediate Education (UPBHSE)</option>
  <option value="Uttarakhand">Uttarakhand Board of School Education (UBSE)</option>
  <option value="West Bengal">West Bengal Board of Secondary Education (WBBSE)</option>
</datalist>
					</div>
					<div class="input-group mt-2">
						<input list="educations"  id="myInput" class="form-control" placeholder="EDUCATION" name="education">
						<datalist id="educations">
					  <option value="B.E. (Bachelor of Engineering)">
					  <option value="B.Tech (Bachelor of Technology)">
					  <option value="B.Sc (Bachelor of Science)">
					  <option value="B.Com (Bachelor of Commerce)">
					  <option value="B.A. (Bachelor of Arts)">
					  <option value="B.B.A. (Bachelor of Business Administration)">
					  <option value="B.C.A. (Bachelor of Computer Applications)">
					  <option value="M.E. (Master of Engineering)">
					  <option value="M.Tech (Master of Technology)">
					  <option value="M.Sc (Master of Science)">
					  <option value="M.Com (Master of Commerce)">
					  <option value="M.A. (Master of Arts)">
					  <option value="M.B.A. (Master of Business Administration)">
					  <option value="M.C.A. (Master of Computer Applications)">
					  <option value="Ph.D. (Doctor of Philosophy)">
					  <option value="Diploma">
					  <option value="ITI (Industrial Training Institute)">
					  <option value="Polytechnic">
					  <option value="Other">
					</datalist>
										</div>
					<div class="input-group mt-2" >
										<label class="p-2">GENDER :</label>
						<div class="gender-radio p-2">
							<input type="radio" id="male" name="gender" value="MALE">
							<i class="fa fa-male fa-icon"></i>
							<label for="male">Male</label>
						</div>
						<div class="gender-radio p-2">
							<input type="radio" id="female" name="gender" value="FEMALE">
							<i class="fa fa-female fa-icon"></i>
							<label for="female">Female</label>
						</div>
					</div>
					<div class="input-group mt-2">
						<label class="form-label"  style="padding-right:10px;">DOB :</label>
						<input type="date" id="myInput"  name="dob" >
					</div>
					<div class="input-group mt-2">
						<input list="tamilnadu-cities" placeholder="CITY" class="form-control" id="myInput"  name="city">
						<datalist id="tamilnadu-cities">
								<option value="Chennai">
							  <option value="Coimbatore">
							  <option value="Madurai">
							  <option value="Tiruchirappalli">
							  <option value="Salem">
							  <option value="Tiruppur">
							  <option value="Erode">
							  <option value="Vellore">
							  <option value="Thoothukudi">
							  <option value="Tirunelveli">
							  <option value="Dindigul">
							  <option value="Thanjavur">
							  <option value="Nagapattinam">
							  <option value="Cuddalore">
							  <option value="Kanchipuram">
							  <option value="Viluppuram">
							  <option value="Pudukkottai">
							  <option value="Ramanathapuram">
							  <option value="Sivaganga">
							  <option value="Virudhunagar">
							  <option value="Theni">
							  <option value="Karur">
							  <option value="Namakkal">
							  <option value="Perambalur">
							  <option value="Ariyalur">
							  <option value="Tiruvallur">
							  <option value="Tiruvannamalai">
							  <option value="Krishnagiri">
							  <option value="Dharmapuri">
							  <option value="Hosur">
							  <option value="Nagercoil">
							  <option value="Kanyakumari">
							  <option value="Tuticorin">
							  <option value="Ooty">
							  <option value="Kodaikanal">
						</datalist>
					</div>
					<div class="input-group mt-2">
						<input list="states" id="myInput" placeholder="STATE" class="form-control" name="state">
						<datalist id="states">
							  <option value="Andhra Pradesh">
							  <option value="Arunachal Pradesh">
							  <option value="Assam">
							  <option value="Bihar">
							  <option value="Chhattisgarh">
							  <option value="Goa">
							  <option value="Gujarat">
							  <option value="Haryana">
							  <option value="Himachal Pradesh">
							  <option value="Jammu and Kashmir">
							  <option value="Jharkhand">
							  <option value="Karnataka">
							  <option value="Kerala">
							  <option value="Madhya Pradesh">
							  <option value="Maharashtra">
							  <option value="Manipur">
							  <option value="Meghalaya">
							  <option value="Mizoram">
							  <option value="Nagaland">
							  <option value="Odisha">
							  <option value="Punjab">
							  <option value="Rajasthan">
							  <option value="Sikkim">
							  <option value="Tamil Nadu">
							  <option value="Telangana">
							  <option value="Tripura">
							  <option value="Uttar Pradesh">
							  <option value="Uttarakhand">
							  <option value="West Bengal">
							  </datalist>
							</div>
							<div class="input-group mt-2">
								<input type="password" class="form-control" id="myInput" name="password"  placeholder="Password" >
							</div>
							<div class="input-group mt-2">
								<input type="password" class="form-control" id="myInput" name="password_confirmation"  placeholder="Retype Password" >
							</div>
							<center>
								<button type="submit" name="submit" class="btn btn-primary mt-3">Register</button>
							</center>
						</div>
						<p>Already have an account? <a href="login">Login</a></p>
						@method('GET')
					</form>
				</div>
			</body>
			</html>	