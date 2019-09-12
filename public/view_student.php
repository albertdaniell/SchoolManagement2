<!-- <?php

session_start();//here we start a session
$email=$_SESSION["email"];

error_reporting(0);


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


    <title>View student</title>
</head>

<body onload="all_students()">

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
                            img
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="col-sm-10">
                            logged in as
                            <?php echo $email ?>
                        </div>
                    </div>

                    <div id="side-nav-links">
                        <a href="">Dashboard</a>
                        <a href="">Register student</a>
                        <a href="">All student</a>
                        <a href="">De-registered students</a>
                        <a href="">Transfered students</a>
                        <a href="">Admins</a>
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

                    <div class="col-sm-12">

                     
                      

                        <div id="">

                        <?php

                        require("../database/db.php");

                        $sid=$_GET['sreg'];
  
$fetch=mysqli_query($conn, "SELECT *FROM `student` where id='$sid'");

if(mysqli_num_rows($fetch)>0){


    
}

else{
    echo "
    <div class='alert'>
    <strong>No students found!</strong>
    </div>
    
    ";
}

while ($row = mysqli_fetch_array($fetch)) {
    $sreg=$row[0];
    $sname=$row[1];
    $sgender=$row[2];
    $sdob=$row[3];
    $scertificate=$row[4];
    $sclass=$row[5];
    $sdate=$row[6];
    $pname=$row[7];
    $prelation=$row[8];
    $pnumber=$row[9];

    echo "                            <button type='button' class='btn btn-danger' id='delete' sid='$sreg'><i class='fa fa-trash'></i></button>
    ";


    
}



?>
                            <h3><?php echo $sname?></h3>
                            <hr>

                            <div class="col-sm-12" style="margin:20px 0px;">

                            <div class="col-sm-6">
                                <h4>Personal Details</h4>
                                <hr>

                                <strong>Registration number</strong>: <?php echo $sreg?><br>
                                <strong>Gender</strong>: <?php echo $sgender?> <br>
                                <strong>DOB </strong>: <?php echo $sdob?> <br>
                                <strong>Certificate number</strong>: <?php echo $scertificate?> <br>
                                <strong>Class admitted to</strong>: <?php echo $sclass?>




                                </b>

                            </div>
                            <div class="col-sm-6">
                                <h4>Parents Details</h4>
                                <hr> 
                                <strong>Parent/Guardian Name</strong>: <?php echo $pname?><br>
                                <strong>Relationship</strong>: <?php echo $prelation?> <br>
                                <strong>Phone</strong>: <?php echo $pnumber?>


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
    <script>
        function start() {
           
        }
    </script>


</body>

</html> -->