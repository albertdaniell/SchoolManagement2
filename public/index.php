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
    $add_tally=mysqli_query($conn,"INSERT INTO `tally` VALUES(DEFAULT,'$today','$students_nums')");
            if($add_tally){
            
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


    <title>Document</title>
</head>

<body>
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

                    <div class="container-fluid" id="main">

                        <div class="row">
                            <div class="col-sm-12">
                                <h3 style="padding:10px"><i class="fa fa-tachometer-alt"></i> Dashboard</h3>
                                <hr>
                                <div class="col-sm-3">
                                    <div class="panel panel-default" id="panel1">

                                        <div class="panel-body">
                                            <div class="col-sm-5 pull-left">
                                                <i class="fa fa-graduation-cap fa-3x"></i>
                                            </div>
                                            <div class="col-sm-7 pull-right">
                                                <span class="big">
                                                    <?php echo $students_nums ?>
                                                </span><br>
                                                <span class="big2">
                                                    All Students
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="panel panel-default" id="panel2">

                                        <div class="panel-body">
                                            <div class="col-sm-5 pull-left">
                                                <i class="fa fa-trash fa-3x"></i>
                                            </div>
                                            <div class="col-sm-7 pull-right">
                                                <span class="big">
                                                    <?php echo $de_registred_nums?>
                                                </span><br>
                                                <span class="big2">
                                                    Deleted
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="panel panel-default" id="panel3">

                                        <div class="panel-body">
                                            <div class="col-sm-5 pull-left">
                                                <i class="fa fa-male fa-3x"></i>
                                            </div>
                                            <div class="col-sm-7 pull-right">
                                                <span class="big">
                                                    <?php echo $male_students_nums ?>
                                                </span><br>
                                                <span class="big2">
                                                    Male
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="panel panel-default" id="panel4">

                                        <div class="panel-body">
                                            <div class="col-sm-5 pull-left">
                                                <i class="fa fa-female fa-3x"></i>
                                            </div>
                                            <div class="col-sm-7 pull-right">
                                                <span class="big">
                                                    <?php echo $female_students_nums ?>
                                                </span><br>
                                                <span class="big2">
                                                    Female
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                                <div class="col-sm-12">
                                    <div class="col-sm-6">
                                        <h3>Class stats</h3>
                                        <hr>
                                        <table class="table">
                                            <thead>
                                                <th>Class</th>
                                                <th>Number of students</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Class 1</td>

                                                </tr>
                                                <tr>
                                                    <td>Class 2</td>

                                                </tr>
                                                <tr>
                                                    <td>Class 3</td>

                                                </tr>
                                                <tr>
                                                    <td>Class 4</td>

                                                </tr>
                                                <tr>
                                                    <td>Class 5</td>

                                                </tr>
                                                <tr>
                                                    <td>Class 6</td>

                                                </tr>
                                                <tr>
                                                    <td>Class 7</td>

                                                </tr>

                                                <tr>
                                                    <td>Class 8</td>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-sm-6">

                                        <h3>Tally</h3>
                                        <hr>

                                        <table class='table'>
                                  <tbody>
                                  <thead>
                                  <tr>
                                  <th>Date</td>
                                  <th>Closing number of students</td>
                              </tr>
                                  </thead>

                                        <?php
                              $check_tally =mysqli_query($conn,"SELECT *FROM tally ORDER BY id DESC LIMIT 0,10");
                              while($row=mysqli_fetch_array($check_tally)){
                                  $closing_no=$row['closing_number'];
                                  $closing_date=$row['today_date'];

                                  $closing_date="$closing_date";

                                  echo "
                               
                                      <tr>
                                          <td>$closing_date</td>
                                          <td>$closing_no</td>
                                      </tr>
                                  ";
                                  
                                  
                              }

                              ?>
                              </tbody>
                              </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>