<?php

session_start();//here we start a session
$email=$_SESSION["email"];
// error_reporting(0);

require("../urls/stats.php");
require("../database/date.php");




if(!isset($email)){
     echo "<script>window.open('../','_self')</script>";
}


// Update tally table


$check_tally =mysqli_query($conn,"SELECT *FROM tally ORDER BY id DESC LIMIT 1");
while($row=mysqli_fetch_array($check_tally)){
    $closing_no=$row['closing_number'];
    $closing_date=$row['today_date'];
    
}


// $today="2019:01:03";
if($today == $closing_date){
    // echo $closing_no;
}

else{
    $add_tally=mysqli_query($conn,"INSERT INTO `tally` VALUES(DEFAULT,'$today','$closing_no')");
            if($add_tally){
                echo "<br> Tally 1 created";
            
            }

            else{
                echo "<br> Tally 1 NOT created"; 
            }
}

// $add_tally=mysqli_query($conn,"INSERT INTO `tally` VALUES(DEFAULT,'$today','$closing_no')");
//             if($add_tally){
//                 echo "<br> Tally 1 created";
            
//             }

//             else{
//                 echo "<br> Tally 1 NOT created"; 
//             }



?>

<html lang="en">

<head>

    <?php
require("../headers.php");


?>
    <link rel="stylesheet" href="../css/style.css">


    <title>Fee</title>
</head>

<body>

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
                            Administrator
                        </div>
                    </div>

                    <div id="side-nav-links">
                        <a href="index.php" class="active"><i class="fa fa-tachometer-alt"></i>Dashboard</a>
                        <a href="register_student.php"><i class="fa fa-user"></i> Register student</a>
                        <a href="all_students.php"><i class="fa fa-graduation-cap"></i>All student <span class="badge">
                                <?php echo $students_nums?></span> </a>
                        <a href="de_registered.php"><i class="fa fa-trash"></i> De-registered students <span class="badge">
                                <?php echo $de_registred_nums?></span></a>
                        <a href=""><i class="fa fa-exchange-alt"></i> Transfered students</a>
                        <a href="#"><i class="fa fa-money-bill-alt"></i> Fee</a>
                        <a href=""><i class="fa fa-bookmark"></i> Fee structure</a>
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

                    <div class="container-fluid" id="main">

                        <div class="row">
                            <div class="col-sm-12">
                                <h3 style="padding:10px"><i class="fa fa-money-bill-alt"></i> Fee</h3>
                                <hr>

                                <div id="collapse1">

                                    <h4> <i class="fa fa-sort-down fa-2x"></i> Make Payment</h4>
                                    <div id="collapse-content1">

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="col-sm-6">
                                                    <h5><i class="fa fa-search"></i> Search for student</h5>
                                                    <hr>

                                                    <form action="" id="search-student" method="POST">
                                                        <div class="form-group">
                                                            <input id="search_query" type="text" class="form-control"
                                                                placeholder="Search by Admission number or name">
                                                        </div>
                                                        <div class="form-group">
                                                            <button class="btn btn-default" type="submit">Search</button>
                                                        </div>
                                                    </form>


                                                </div>

                                                <div class="col-md-12" id="search-student-result">

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div id="collapse2">

                                    <h4> <i class="fa fa-sort-down fa-2x"></i> All Payment</h4>
                                    <div id="collapse-content2">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam atque placeat,
                                        quo vitae corporis vel enim ipsum explicabo rerum sequi officia omnis
                                        distinctio cupiditate consequatur reprehenderit quas, saepe quos nesciunt!
                                    </div>

                                </div>






                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../javascript/jquery2.1.min.js"></script>
    <script src="../javascript/main.js"></script>
</body>

</html>




<!-- <div id="search-student-result">
                                        <h5>Search results will display here...</h5>
                                
                                        </div>
                                    </div> -->