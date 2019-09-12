<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Custom css -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/js/bootstrap.min.js">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>


    <title>Index</title>
    <style>
#intro-pg{
  
    height: 100%;
    background-image: url('public/img/1.jpg');
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}

body,html{
    height: 100%;
}

.form-control{
    height:50px;
    border-radius:0;
    font-size:15px;
}

.btn{
    height:50px;
    letter-spacing:2px;
    border-radius:0;
    background:#286090;
    border:0;

}
.panel-success .panel-heading{
    background:#286090;
    padding:20px;
    color:white;
}

.panel{
    background:rgba(255,255,255,0.5);
}
    </style>
</head>

<body onload="connected()">

    <div id="pop-up">
        <span id="pop-up-txt">

        </span>
        <button class="btn btn-default" onclick="hideMsg()">OK</button>
    </div>

    <div id="success">
        <span id="success-txt">
        </span>

    </div>

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12" id="intro-pg">
                <div class="col-sm-3"></div>
                <div class="col-sm-6" id="form-login-div">
                    <h4 class="text-center" style="background:;padding:10px;color: #286090;">  
                     <?php

                     require("database/db.php");
                     $school_name=mysqli_query($conn,"SELECT *FROM `setting` WHERE title='School name'");
                     while($row=mysqli_fetch_array($school_name)){
                         $school=$row[1];

                     }
                    
                    ?>
                    <?php echo $school ?> Management System</h4>
                    <hr>

                    <div class="panel panel-success">
                        <div class="panel-heading">Login</div>
                        <div class="panel-body">

                            <form action="" id="login-form">
                                <div class="form-group">
                                    
                                    <input type="email" class="form-control" id="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                   
                                    <input type="password" class="form-control" id="pwd" placeholder="******">
                                </div>

                                <button type="submit" id="login-btn" class="btn btn-success">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
    </div>


    <!-- Custom js -->

    <script src="javascript/jquery2.1.min.js"></script>
    <script src="javascript/main.js"></script>
    
    
</body>

</html>