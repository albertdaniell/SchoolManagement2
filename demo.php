<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/js/bootstrap.min.js">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <title>Index</title>
</head>

<body>

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="col-sm-2">
                    Side nav
                </div>
                <div class="col-sm-10" id="main-div">

                   <?php

                   date_default_timezone_set('Africa/Nairobi');
$log_time='2019-01-02 10:11:35';
$log_time=date('H', strtotime($log_time));
$current_time=date('H');

if($current_time == 00){
    $current_time="24";
}


// $log_time=new DateTime($log_time);
// $difference=$current_time-$log_time;
// echo  $difference;

$date1=date_create('2019-01-01');
$today=date_create(date('Y:m:d'));


$today=date_create($today);


$diff=date_diff($date1,$today);
echo $diff->format("%a");

// echo date('H:i:s');

                   ?>
                </div>
            </div>
        </div>
    </div>

</body>

</html>