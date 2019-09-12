<?php

session_start();//here we start a session
$email=$_SESSION["email"];
error_reporting(0);

require("../urls/stats.php");



if(!isset($email)){
     echo "<script>window.open('../','_self')</script>";
}

?>

<html lang="en">

<head>

    <?php
require("../headers.php");


?>
    <link rel="stylesheet" href="../css/style.css">


    <title>Admin Setting</title>
</head>

<body>


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
                           Administrator
                        </div>
                    </div>

                    <div id="side-nav-links">
                        <a href="index.php"><i class="fa fa-tachometer-alt"></i>Dashboard</a>
                        <a href="register_student.php"><i class="fa fa-user"></i> Register student</a>
                        <a href="all_students.php" ><i class="fa fa-graduation-cap"></i>All student <span class="badge"><?php echo $students_nums?></span> </a>
                        <a href="de_registered.php"><i class="fa fa-trash"></i> De-registered students <span class="badge"><?php echo $de_registred_nums?></span></a>
                        <a href=""><i class="fa fa-exchange-alt"></i>Transfered students</a>
                        <a href="fee.php"><i class="fa fa-money-bill-alt"></i> Fee</a>
                        <a href="#"><i class="fa fa-bookmark"></i> Fee structure</a>
                        <a href="" class="active"><i class="fa fa-briefcase"></i> Admins Setting</a>
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
                                <li class="active"><a href="#"><?php echo $email ?></a></li>
                                <li><a href="#"><?php echo $school?></a></li>
                                <li><a href="logout.php">Log Out</a></li>
                            </ul>
                        </div>
                    </nav>

                    <div class="container-fluid" id="main">
                        <h3><i class="fa fa-cogs"></i> System Administrators</h3>
                        <hr>

                        <?php
                        if($email =='albertagoya@gmail.com'){
                            echo '<button class="btn btn-danger" id="add-admin-btn"> <i class="fa fa-plus"></i> Add Admin</button>  ';

                        }

                        else{
                            echo "Only super user can add an admin";
                        }

                        ?>
                     
                     <br> <br>
                      <?php
                      
$fetch=mysqli_query($conn, "SELECT *FROM `users` WHERE delete_status = '0'");

if(mysqli_num_rows($fetch)>0){


    echo "
    <table class='table table-hover table-condensed table-bordered' style='font-size:14px'>

    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Date Created</th>
    
    </tr>

    <tbody>
  
    
    
    ";
}

else{
    echo "
    <div class='alert'>
    <strong>No students found!</strong>
    </div>
    
    ";
}

while ($row = mysqli_fetch_array($fetch)) {
    $aid=$row[0];
    $aname=$row[1];
    $aemail=$row[2];
    $adate=$row[5];


    echo "
    <tr>
    <td>$aid</td>
    <td>$aname</td>
    <td>$aemail</td>
    <td>$adate</td>
    
    
    </tr>
    
    
    ";
}


echo "</tbody>
</table>";
                      ?> 
                      <hr>
                              

                              <h3>School name</h3>           
                              <hr>

                              <?php
                              $school_name=mysqli_query($conn,"SELECT *FROM `setting` WHERE title='School name'");
                              while($row=mysqli_fetch_array($school_name)){
                                  $school=$row[1];
                                  
                                  echo "
                                  
                                  <table class='table'>
                                  <tbody>
                                      <tr>
                                          <td>$school</td>
                                      </tr>
                                  </tbody>
                              </table>
                              ";
                              
                              }

                              if($email == 'albertagoya@gmail.com'){
                                echo '  <button class="btn btn-default" school="'.$school.'" id="change-school-btn">Change school name </button>
                              ';  
                              }

                              else{
                                  echo "Only super user can edit the school name";
                              }

                              ?>
                              <br><br>

                              <h3>Tally</h3>
                              <hr>

                              <?php
                              $check_tally =mysqli_query($conn,"SELECT *FROM tally ORDER BY id DESC");
                              while($row=mysqli_fetch_array($check_tally)){
                                  $closing_no=$row['closing_number'];
                                  $closing_date=$row['today_date'];

                                  $closing_date="$closing_date";

                                  echo "
                                  <table class='table'>
                                  <tbody>
                                  <thead>
                                  <tr>
                                  <th>Date</td>
                                  <th>Closing number of students</td>
                              </tr>
                                  </thead>
                                      <tr>
                                          <td>$closing_date</td>
                                          <td>$closing_no</td>
                                      </tr>
                                  </tbody>
                              </table>";
                                  
                                  
                              }

                              ?>
                        
                                             
                                  
                    </div>
                </div>
                
            </div>
            
        </div>
       
    </div>
    <script src="../javascript/jquery2.1.min.js"></script>
    <script src="../javascript/main.js"></script>
    <script>
        function start() {
            all_students();
        }
    </script>
</body>

</html>