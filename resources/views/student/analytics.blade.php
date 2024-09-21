<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ONLINE EXAM | ANALYTICS</title>
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<style type="text/css">
	.col{   
        margin: 20px;
        height: fit-content;
       width:100%;
       background-color: #4b4b4f;
      -webkit-backdrop-filter: blur(5px);
      backdrop-filter: blur(15px);
      padding: 20px;
      border-radius: 6px;
      margin: 10px;
      font-weight: bold;
}
h5{
    width: fit-content;
    padding: 10px;
}
.container{
    color: white;
}

table{
    border-spacing: 200em;
}
#btn{
    float: right;
    margin-left: 50%;
}
.cols{
    width: 30%;
    height: 350px;
}
.card{
    width: 100%;
    height: 40%;
    margin-top: 10px;
}
.card-header{
  height:fit-content;
}
#card-body{
    background-color:black;
    color: white;
}
</style>
<body>
@include('student/navbar');
<div class="container">
  <a href="{{route('answers',$exam->ename)}}">
    
    <button class="btn btn-primary" style="float: right;"><span style="font-size:1.2rem;">Solution</span>
    </button>
  </a>
    <div class="container">
        <div>
    <canvas id="scoreChart" ></canvas>
</div>

    </div>
<div class="row" style="margin-top:10%;">
  <div class="col" style="background-color: #0f8a1f;font-size: 1.2rem;">
      <span class="material-symbols-outlined">event_note</span>
      <div class="row">
          <p>Score</p>
          <p>{{$score}}/{{$questionsCount}}</p>
      </div>
  </div>
  <div class="col" style="background-color: #430d94;font-size: 1.2rem;">
<span class="material-symbols-outlined">bar_chart</span>
      <div class="row">
    <?php $c1=1; ?>
      @foreach($counts as $arj)
      @if($arj->email==$user->email)
          <p>Rank</p>
          <p><?php echo $c1; ?></p>
          @endif
      <!-- {{ $c1++ }} -->
      @endforeach
      </div>
  </div>
  <div class="w-100"></div>
  <div class="col" style="background-color: #28a7de;font-size: 1.2rem;">
      <span class="material-symbols-outlined">
percent
</span>
      <div class="row">

          <p>Percentile</p>
          <p>{{$percentileFormatted}}/100</p>
      </div>
  </div>
  <div class="col" style="background-color: #33de33;font-size: 1.2rem;">
    <span class="material-symbols-outlined">point_scan</span>
      <div class="row">
          <p>Accuracy</p>
          <p>{{$timeTaken}}</p>
      </div>
  </div>
</div>
<!-- {{$countss}} -->
<div class="card">
  <div class="card-header" style="background-color: #430d94"; >
    <span class="material-symbols-outlined" style="color: white;font-size:30px;">format_list_bulleted_add</span>
    <p style="color: white;">QUESTIONS</p>
    <p style="color: white;">{{ $questionsCount }}</p>
  </div>
  <div class="card-body" id="card-body">
    <h6 class="card-title">Attempted</h6>
    <h6 class="card-title">{{ $attempted }}/{{$questionsCount}}</h6>
    <hr>
        <h6 class="card-title">Correct</h6>
    <h6 class="card-title">{{ $correct }}/{{$questionsCount}}</h6>
    <hr>
        <h6 class="card-title">Incorrect</h6>
    <h6 class="card-title">{{ $incorrect }}/{{$questionsCount}}</h6>
    <hr>
    <h6 class="card-title">notAttempted</h6>
    <h6 class="card-title">{{ $notAttempted}}/{{$questionsCount}}</h6>
  </div>
</div>  
  <hr>
  </div> 

</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>

<script>
    var ctx = document.getElementById('scoreChart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Correct', 'Incorrect', 'Not Attempted'],
            datasets: [{
                label: 'Score',
                data: [{{ $correct }}, {{ $incorrect }},{{ $notAttempted }}],
                backgroundColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)'
                ],
                borderWidth:1
            }]
        },
 options: {
  title: {
    display: true,
        text: '{{$user->ename}}',
        fontSize: 18,
        fontColor: '#333'
  },
  legend: {
    display: true
  },
  layout: {
    padding: {
      left: 20,
      right: 20,
      top:0,
      bottom:0
    }
  },
  maintainAspectRatio: false,
  responsive: true
}
    });
</script>
</html>