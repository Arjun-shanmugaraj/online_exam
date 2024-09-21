<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ONLINE EXAM | EDIT PROFILE</title>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
     <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <style type="text/css">
    .container1{
        height: 200px;
        width: 450px;
        color: white;
        padding: 20px;
        border-radius: 10px;
}
radio{
    accent-color:blue;
        
    }
    label{
        color:maroon;
    }
</style>
<body>
    @include('student/navbar');
    <div class="container">
        <form action="{{route('editProupda',$ins->mobile)}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="container1">
                <label >Profile Update</label>
                <div class="row">
                    <div class="col-6">
                        <input accept="image/*" name="img" type='file' id="myInput" />
                    </div>

                    <div class="col-6">                 
                      <img id="blah"  src="{{URL::asset('images/'.$ins->img)}}" alt="your image" height="120" width="120" style="border-radius: 160px;border:2px solid green;" />
                    </div>
                </div>                
                <div>
                    <label for="fname" class="form-label">First Name</label><br>
                    <input type="text" class="form-control" id="myInput" name="fname"  value="{{$ins->fname}}" >
                </div>
                <div >
                    <label for="lname" class="form-label">Last Name</label><br>
                    <input type="text" class="form-control" id="myInput" name="lname" value="{{$ins->lname}}"   >
                </div>
                <div>
                    <label for="mobile" class="form-label">Mobile</label><br>
                    <input type="text" class="form-control" id="myInput" name="mobile"  value="{{$ins->mobile}}" >
                </div>
                 <div>
                    <label for="education" class="form-label">Education</label><br>
                    <input list="educations"  id="myInput" class="form-control" placeholder="EDUCATION" value="{{$ins->education}}"  name="education">
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
                <div>
                    <label for="board" class="form-label">Board</label><br>
                    <input list="state-boards" class="form-control" id="myInput" value="{{$ins->board}}" placeholder="BOARD" name="board">
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
                <div >
                    <label for="city" class="form-label">City</label><br>
                    <input list="tamilnadu-cities" placeholder="CITY" class="form-control" id="myInput" value="{{$ins->city}}"  name="city">
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
                <div >
                    <label for="state" class="form-label">State</label><br>
                    <input list="states" id="myInput" placeholder="STATE" class="form-control" value="{{$ins->state}}" name="state">
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
                <div >
                    <label class="form-label"  style="padding-right:10px;">DOB :</label>
                    <input type="date" id="myInput" class="form-control" value="{{$ins->dob}}" name="dob" >
                </div>
                <div class="mt-3">
                    <label style="padding-right:4px;">Gender</label>
                    <input type="radio"  name="gender" value="MALE" {{ $ins->gender == 'MALE'? 'checked' : '' }} ><label style="padding-right:4px; margin: 2px;">MALE</label>
                    <input type="radio"  name="gender" value="FEMALE" {{ $ins->gender == 'FEMALE'? 'checked' : '' }} ><label style="padding-right:4px; margin: 2px;">FEMALE</label>
                </div>
                    <button class="btn btn-primary mt-3">RESET</button>
                    <button class="btn btn-primary mt-3">SAVE</button>
                </div>
            </div>
        @method('GET')
    </form>
</body>

</html>