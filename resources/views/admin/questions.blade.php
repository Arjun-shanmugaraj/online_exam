<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

 <!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8" />
    <title>BCORE Admin Dashboard Template | General Form</title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('css/main.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/theme.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/MoneAdmin.css')}}" />
    <link rel="stylesheet" href="{{asset('plugins/Font-Awesome/css/font-awesome.css')}}"/>
    <!--END GLOBAL STYLES -->
       <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>
     <!-- END HEAD -->

     <!-- BEGIN BODY -->
<body class="padTop53 " >


    <!-- MAIN WRAPPER -->
    <div id="wrap" >
        

        


        <!-- MENU SECTION -->
       <div id="left" >
            <div class="media user-media well-small">
                <a class="user-link" href="#">
                    <img class="media-object img-thumbnail user-img" src="{{URL::asset('images/'.$admin->img)}}" alt="profile Pic" height="150" width="150" style="border-radius:0px 20px 0px 20px;">
                </a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading">{{$admin->firstname}} {{$admin->lastname}}</h5>
                    <ul class="list-unstyled user-info">
                        
                        <li>
                             <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online
                           
                        </li>
                       
                    </ul>
                </div>
                <br />
            </div>

            <ul id="menu" class="collapse">

                
                <li class="panel active">
                    <a href="{{route('index')}}" >
                        <i class="icon-table"></i> Dashboard
       
                       
                    </a>                   
                </li>
                <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#form-nav">
                        <i class="icon-pencil"></i> Question
       
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                    </a>
                    <ul class="collapse" id="form-nav">
                        <li class=""><a href="{{route('questionview')}}"><i class="icon-angle-right"></i> Add </a></li>
                        <li class=""><a href="{{route('display')}}"><i class="icon-angle-right"></i> Display </a></li>
                    </ul>
                </li>
                <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#pagesr-nav">
                        <i class="icon-user"></i>  Student
       
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                    </a>
                    <ul class="collapse" id="pagesr-nav">
                        <li><a href="{{route('stuDisplay')}}"><i class="icon-angle-right"></i> Display</a></li>
                    </ul>
                </li>
                <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#pagesr-nav1">
                        <i class="icon-user"></i>Exam Answers
       
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                    </a>
                    <ul class="collapse" id="pagesr-nav1">
                        <li><a href="{{route('ansDisplay')}}"><i class="icon-angle-right"></i> Display</a></li>
                    </ul>
                </li>
                <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#pagesr-nav2">
                        <i class="icon-user"></i>free Books
       
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                    </a>
                    <ul class="collapse" id="pagesr-nav2">
                        <li><a href="{{route('addBooks')}}"><i class="icon-angle-right"></i> Add</a></li>
                        <li><a href="{{route('freeBooksTab')}}"><i class="icon-angle-right"></i> Display</a></li>
                    </ul>

                </li>
                <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#pagesr-nav3">
                        <i class="icon-user"></i>Ratings
       
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                       </a>
                    <ul class="collapse" id="pagesr-nav3">
                        <li><a href="{{route('ratingDisplay')}}"><i class="icon-angle-right"></i> Display</a></li>
                    </ul>

                </li>
                <li class="panel">
                        <li><a href="{{route('adminlogout')}}"><i class="icon-signin"></i>Logout</a></li>       
                </li>


                

        </div>
    <!--END MAIN WRAPPER -->
         <!--PAGE CONTENT -->
        <div id="content">
           
                <div class="inner">
                    <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">General Form Components</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Elements
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="{{route('insertqus')}}" method="POST">
                                        {{csrf_field()}}
                                    
                                    <div class="form-group">
                                            <label>Exam Name</label>
                                            <input type="text" class="form-control" name="eid" id="eid" value="{{$newExamId}}" readonly>
                                        </div>
                                     <!-- <div class="form-group">
                                            <label>Exam Category</label>
                                            <input type="text" class="form-control" name="category" id="category" placeholder="Enter Exam Category ">
                                        </div> -->
                                     <div class="form-group">
                                            <label>Exam Name</label>
                                            <input type="text" class="form-control" name="ename" id="ename" placeholder="Enter Exam Name ">
                                        </div>
                                        <div class="form-group">
                                            <label>Time (in minites)</label>
                                            <input type="text"  class="form-control" name="time" id="time" placeholder="enter exam time"  >
                                        </div>
                                        <div class="form-group">
                                            <label>Total</label>
                                            <input type="text" class="form-control" name="total" id="total" placeholder="Enter Total ">
                                        </div>
                                        <div class="form-group">
                                            <label>Mark(each questions)</label>
                                            <input type="text" class="form-control" name="mark" id="mark" placeholder="Enter Marks ">
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
                                    @method('GET')
                                    </form>

                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                            <label>Question Id  (can't change)</label>
                                            <input type="text" class="form-control" name="qusid" id="qusid" value="{{$newQusId}}" readonly>
                                            <div id="a2" hidden>{{$newQusId}}</div>
                                        </div>
                                        <div class="form-group">
                                            <label>Questions </label>
                                            <textarea type="text" class="form-control" rows="3" cols="24" name="qus" id="qus" placeholder="Enter Question "></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Option 1</label>
                                            <input type="text" class="form-control" name="op1" id="op1" placeholder="Enter Option 1 ">
                                        </div>
                                        <div class="form-group">
                                            <label>Option 2</label>
                                            <input type="text" class="form-control" name="op2" id="op2" placeholder="Enter Option 2 ">
                                        </div>
                                        <div class="form-group">
                                            <label>Option 3</label>
                                            <input type="text" class="form-control" name="op3" id="op3" placeholder="Enter Option 3 ">
                                        </div>
                                        <div class="form-group">
                                            <label>Option 4</label>
                                             <input type="text" class="form-control" name="op4" id="op4" placeholder="Enter Option 4 ">
                                        </div>
                                        <div class="form-group">
                                            <label>Answer</label>
                                            <input type="text" class="form-control" name="answer" id="answer" placeholder="Enter Answer ">
                                        </div>
                                        <hr>
                                            <button type="button"  class="btn btn-default add">NEXT</button>
                                        <table class="table table-success" width="100" style="text-align: center;">
                                            <thead>
                                                <tr> 
                                                    <th>examId</th>
                                                     <th>QustionID</th> 
                                                    <th>examName</th>
                                                    <th>Question</th>
                                                    <th>option1</th>
                                                    <th>option2</th>
                                                    <th>option3</th>
                                                    <th>option4</th>
                                                    <th>answer</th>
                                                </tr>
                                            </thead>
                                        </table> 
                        </div>

                                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--END PAGE CONTENT -->
</div>
    <!-- GLOBAL SCRIPTS -->
    <script src="{{asset('plugins/jquery-2.0.3.min.js')}}"></script>
    <script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('plugins/modernizr-2.6.2-respond-1.1.0.min.js')}}"></script>
    <!-- END GLOBAL SCRIPTS -->
</body>
<!-- END BODY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
 <script>
    $(document).ready(function(){
        $(".add").click(function(){
            var eid=$("#eid").val();
            var qusid=$("#qusid").val();
            // alert("Qus Id"+qusid);
            // var category=$("#category").val();
            var ename=$("#ename").val();
            var question=$("#qus").val();
            var op1=$("#op1").val();
            var op2=$("#op2").val();
            var op3=$("#op3").val();
            var op4=$("#op4").val();
            var ans=$("#answer").val();


            var markup="<tr><td>"+eid+"</td><td>"+qusid+"</td><td>"+ename+"</td><td>"+question+"</td><td>"+op1+"</td><td>"+op2+"</td><td>"+op3+"</td><td>"+op4+"</td><td>"+ans+"</td></tr>";
            $("table").append(markup);
            var qusid2=$("#qusid").val();
            // alert(qusid2);
            var qus2=parseInt(qusid2)+1;
            console.log(markup);
            $.ajax({
                url:'http://127.0.0.1:8000/insertquslist/',
                 type: 'GET',
                data: {
                eid:eid,
                qusid:qusid,
                // category:category,
                ename: ename,
                 question:question,
                 op1:op1,
                 op2: op2,
                 op3:op3,
                 op4:op4,
                  ans:ans

             },
                    success:function(response){
                        // alert('Successfully inserted');
                    }
            });

            var a2 = parseInt(qusid) + 1;
// alert("ID"+a2); // log the new qusid value
$("#a2").text(a2); // update the text of element with ID a2
var temp_a2=a2;
// alert("TEMP:"+temp_a2);

$("#qusid").val(a2 ); // update the value of input field with ID qusid
        });
    });

</script>
</html>
