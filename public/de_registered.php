<?php

session_start();//here we start a session
$email=$_SESSION["email"];

require("../urls/stats.php");


if(!isset($email)){
    echo "<script>window.open('../index.php','_self')</script>";
}

?>

<html lang="en">

<head>

    <?php
require("../headers.php");


?>
    <link rel="stylesheet" href="../css/style.css">


    <title>All de-registered student</title>
</head>

<body onload="start()">

    <div class="col-sm-12" id="dialog">
        <div class="col-sm-3"></div>
        <div class="col-sm-6" id="dialog-content">



        </div>
        <div class="col-sm-3"></div>
    </div>

    <div id="pop-up">
        <span id="pop-up-txt">

        </span>
        <button class="btn btn-default" onclick="hideMsg()">OK</button>
    </div>
    <div class="container-fluid">

        <div class="row" style="padding:0">
            <div class="col-md-12" style="padding:0">
                <div class="col-sm-2" id="sidenav">
                    <div id="head">
                        <div class="col-sm-2">
                            <i class="fa fa-briefcase fa-2x" style="color:#ccc"></i>
                        </div>
                        <div class="col-sm-10">
                            Adminitrator
                        </div>
                    </div>

                    <div id="side-nav-links">
                        <a href="index.php"><i class="fa fa-tachometer-alt"></i>Dashboard</a>
                        <a href="register_student.php"><i class="fa fa-user"></i> Register student</a>
                        <a href="all_students.php"><i class="fa fa-graduation-cap"></i>All student <span class="badge">
                                <?php echo $students_nums?></span></a>
                        <a href="de_registered.php" class="active"><i class="fa fa-trash"></i> De-registered students
                            <span class="badge">
                                <?php echo $de_registred_nums?></span> </a>
                        <a href=""><i class="fa fa-exchange-alt"></i>Transfered students</a>
                        <a href="fee.php"><i class="fa fa-money-bill-alt"></i> Fee</a>
                        <a href="#"><i class="fa fa-bookmark"></i> Fee structure</a>
                        <a href="admins.php"><i class="fa fa-cogs"></i> Admin Setting</a>
                        <a href="logout.php"><i class="fa fa-sign-out-alt"></i> Logout</a>
                    </div>
                </div>
                <div class="col-sm-10" id="main-div">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <a class="navbar-brand" href="#"></a>
                            </div>
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#">
                                        <?php echo $email ?></a></li>
                                <li><a href="#">
                                        <?php echo $school?></a></li>
                                <li><a href="logout.php">Log Out</a></li>
                            </ul>
                        </div>
                    </nav>


                    <div class="col-sm-12">

                    <form action="" method="GET" id="search-form" class="horizontal">
                            <div class="form-group">
                                <div class="col-sm-4">

                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="Search by name, birth certificate,Parent name or registration"
                                        id="query" name="query" onkeyup="search_student()">
                                    <div id="suggestion">

                                    </div>
                                </div>
                            </div>
                        </form>
                        <h3><i class="fa fa-trash"></i> De-registered Students (
                            <?php echo $de_registred_nums ?>)</h3>
                        <hr>

                        <div id="all-students">


                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../javascript/jquery2.1.min.js"></script>
    <script src="../javascript/main.js"></script>
    <script>
        function start() {
            deregistered_students();
        }
    </script>


</body>

</html>