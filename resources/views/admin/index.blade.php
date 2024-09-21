<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8" />
    <title>BCORE Admin Dashboard Template | Dashboard </title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}" >
    <link rel="stylesheet" href="{{asset('css/theme.css')}}" >
    <link rel="stylesheet" href="{{asset('css/MoneAdmin.css')}}" />
    <link rel="stylesheet" href="{{asset('plugins/Font-Awesome/css/font-awesome.css')}}" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <link href="{{asset('css/layout2.css')}}" rel="stylesheet" />
       <link href="{{asset('plugins/flot/examples/examples.css')}}" rel="stylesheet" />
       <link rel="stylesheet" href="{{asset('plugins/timeline/timeline.css')}}" />
    <!-- END PAGE LEVEL  STYLES -->
     <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body  >
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
                        <i class="icon-book"></i>free Books
       
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
                        <i class="icon-star"></i>Ratings
       
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
            <!--BLOCK SECTION -->
                 <div class="row">
                    <div class="col-lg-12">
                        <div style="text-align: center;">
                           
                            <a class="quick-btn" href="{{route('display')}}">
                                <i class="icon-pencil icon-2x"></i>
                                <!-- <i class="icon-check icon-2x"></i> -->
                                <span>Questions</span>
                                <span class="label label-danger"></span>
                            </a>

                            <a class="quick-btn" href="{{route('stuDisplay')}}">
                                <i class="icon-user icon-2x"></i>
                                <span>Students</span>
                                <span class="label label-success"></span>
                            </a>
                            <a class="quick-btn" href="{{route('ansDisplay')}}">
                                <i class="icon-lightbulb  icon-2x"></i>
                                <span>Answers</span>
                            </a>
                            <a class="quick-btn" href="{{route('freeBooksTab')}}">
                                <i class="icon-book icon-2x"></i>
                                <span>Notes</span>
                            </a>
                            <a class="quick-btn" href="{{route('ratingDisplay')}}">
                                <i class="icon-star icon-2x"></i>
                                <span>Ratings</span>
                            </a>
                        </div>
                    </div>
                <!-- BLOCK SECTION -->
<div class="row" style="margin-left:auto;margin-top:auto;">
    <div class="col-lg-10">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Dashboard Statistics</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="well well-sm">
                            <h4>Visitors Count:</h4>
                            <p class="text-primary">{{$visitorsCount}}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="well well-sm">
                            <h4>Users Count:</h4>
                            <p class="text-success">{{$usersCount}}</p>
                        </div>
                    </div>
                </div>
                <hr>
                <h4>Last Added Exam:</h4>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Exam Name</th>
                            <th>Added On</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$lastAddedExam->ename}}</td>
                            <td>{{$lastAddedExam->created_at}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
                </div><!--END BLOCK SECTION -->
    <!--END MAIN WRAPPER -->
    <!-- GLOBAL SCRIPTS -->
    <script src="{{asset('plugins/jquery-2.0.3.min.js')}}"></script>
     <script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('plugins/modernizr-2.6.2-respond-1.1.0.min.js')}}"></script>
    <!-- END GLOBAL SCRIPTS -->

    <!-- PAGE LEVEL SCRIPTS -->
    <script src="{{asset('plugins/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('plugins/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('plugins/flot/jquery.flot.time.js')}}"></script>
     <script  src="{{asset('plugins/flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('js/for_index.js')}}"></script> 
   
    <!-- END PAGE LEVEL SCRIPTS -->


</body>

    <!-- END BODY -->
</html>
