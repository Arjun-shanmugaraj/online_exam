<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ONLINE EXAM | LEADERBOARD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>
<style type="text/css">
    .container{
        height: 200px;
        width: 100%;
        color: white;
        padding: 20px;
        border-radius: 10px;
    }
    .col{
        margin-left: 22px;
        padding: 15px;
        height: 100%;
        width: 100%;
        border-radius: 10px;
        background-color:#262525;
    }
    .row{
        margin-bottom:10px;
        width: 100%;
    }
    h2{
        margin-left:12%;

    }
</style>
<body>
    @include('student/navbar');
        <h2 style="color: white;">LEADER BOARD</h2>
    <div class="container" > 
                    <?php $c1=1; ?>
                    @foreach($counts as $count)
        <div class="row" >
            <div class="col">
                <div style="border: none;background-color: transparent; color: white;">
                    <span>Rank :</span><label><?php echo $c1; ?></label>
                    <hr>
                    <span>Name :</span><label>{{$count->name}}</label>
                    <hr>
                    <span>SCORE :</span><label>{{$count->count}}</label>
                </div>

            </div>
        </div>
        <!-- {{ $c1++ }} -->
                @endforeach
        <div class="row" >
            <div class="col">
                <div style="border: none;background-color: transparent; color: white;">
                    <span>Total User Rank  :</span><label>{{$userCounts}}</label>
                </div>
            </div>
        </div>
    </div>
</body>
</html>