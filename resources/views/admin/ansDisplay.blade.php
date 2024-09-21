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
<style type="text/css">
    th, td {
  text-align:center;
}
</style>
     <!-- BEGIN BODY -->
<body class="padTop53 " >

    <!-- MAIN WRAPPER -->
    <div id="wrap" >
        

        


        <!-- MENU SECTION -->
       <div id="left" >
            <div class="media user-media well-small">
                <a class="user-link" href="#">
                    <img class="media-object img-thumbnail user-img"  src="{{URL::asset('images/'.$admin->img)}}" alt="profile Pic" height="150" width="150" style="border-radius:0px 20px 0px 20px;">
                </a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading">{{ $admin->firstname}} {{ $admin->lastname}}</h5>
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
                    <h1 class="page-header">Student's Info</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Student's Details
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col">
                                    <table style="width: 100%;" class="table">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Exam Name</th>
                                                <th>time</th>
                                                <th>question id</th>
                                                <th>question</th>
                                                <th>selected answer</th>
                                                <th>answer</th>
                                                <th>answer Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($tab as $arj)
                                                <tr>
                                                <td>{{$arj->name}}</td>
                                                <td>{{$arj->email}}</td>
                                                <td>{{$arj->ename}}</td>
                                                <td>{{$arj->time}}</td>
                                                <td>{{$arj->qusid}}</td>
                                                <td>{{$arj->question}}</td>
                                                <td>{{$arj->sel_ans}}</td>
                                                <td>{{$arj->ans}}</td>
                                                <td>{{$arj->ansStatus}}</td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    <br>                   
                                </div>
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
</html>
