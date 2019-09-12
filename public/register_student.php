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


    <title>Register student</title>
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
                        <a href="index.php"><i class="fa fa-tachometer-alt"></i>Dashboard</a>
                        <a href="register_student.php" class="active"><i class="fa fa-user"></i> Register student</a>
                        <a href="all_students.php"><i class="fa fa-graduation-cap"></i>All student <span class="badge">
                                <?php echo $students_nums?></span></a>
                        <a href="de_registered.php"><i class="fa fa-trash"></i> De-registered students <span class="badge">
                                <?php echo $de_registred_nums?></span></a>
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
                        <h3><i class="fa fa-user"></i> Register Student</h3>
                        <hr>

                        <form class="form-horizontal" method="POST" action="" name="register-student-form" id="register-student-form">


                            <fieldset>

                                <legend>Student Details</legend>
                                <div class="form-group">

                                    <div class="col-sm-6">
                                        <label for="">Full name *</label>
                                        <input type="text" id="sname" name="sname" class="form-control">

                                    </div>

                                    <div class="col-sm-6">
                                        <label for="">Gender *</label>
                                        <select id="sgender" name="sgender" class="form-control">
                                            <option value=""></option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>



                                <div class="form-group">
                                    <div class="col-sm-6">
                                        <label for="">Date Of Birth *</label>
                                        <input type="date" id="sdob" name="sdob" class="form-control">
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="">Birth Cerificate Number</label>
                                        <input type="text" id="scertificate" name="scertificate" class="form-control">
                                    </div>

                                </div>

                                <div class="form-group">
                                    <div class="col-sm-6">
                                        <label for="">Class Admitted To *</label>
                                        <select name="" id="sclass" class="form-control" name="sclass">
                                            <option value="">---</option>
                                            <option value="Baby Class">Baby Class</option>
                                            <option value="Kg 1"> Kg 1</option>
                                            <option value="Kg 2">Kg 2</option>
                                            <option value="Kg 3">Kg 3</option>
                                            <option value="Class 1">Class 1</option>
                                            <option value="Class 2">Class 2</option>
                                            <option value="Class 3">Class 3</option>
                                            <option value="Class 4">Class 4</option>
                                            <option value="Class 5">Class 5</option>
                                            <option value="Class 6">Class 6</option>
                                            <option value="Class 7">Class 7</option>
                                            <option value="Class 8">Class 8</option>

                                        </select>

                                    </div>

                                    <div class="col-sm-6">
                                        <label for="">Current Class *</label>
                                        <select name="" id="scurrentclass" class="form-control" name="scurrentclass">
                                            <option value="">---</option>
                                            <option value="Baby Class">Baby Class</option>
                                            <option value="Kg 1"> Kg 1</option>
                                            <option value="Kg 2">Kg 2</option>
                                            <option value="Kg 3">Kg 3</option>
                                            <option value="Class 1">Class 1</option>
                                            <option value="Class 2">Class 2</option>
                                            <option value="Class 3">Class 3</option>
                                            <option value="Class 4">Class 4</option>
                                            <option value="Class 5">Class 5</option>
                                            <option value="Class 6">Class 6</option>
                                            <option value="Class 7">Class 7</option>
                                            <option value="Class 8">Class 8</option>

                                        </select>

                                    </div>

                                </div>

                                <div class="form-group">




                                    <div class="col-sm-6">
                                        <label for="">Date admitted (Leave blank if date of admission is today)</label>
                                        <input type="date" id="sdate" name="sdate" class="form-control">
                                    </div>

                                </div>

                            </fieldset>
                            <fieldset>
                                <legend>Parents/ Gudardian details</legend>
                                <div class="form-group">


                                    <div class="col-sm-6">
                                        <label for="">Parent/ Gudardian name</label>
                                        <input type="text" id="pname" name="pname" class="form-control">
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="">Relationship</label>
                                        <select class="form-control" id="prelation">
                                            <option value="Parent">Parent</option>
                                            <option value="Guardian">Guardian</option>

                                        </select>
                                    </div>

                                </div>

                                <div class="form-group">


                                    <div class="col-sm-6">
                                        <label for="">Phone number</label>
                                        <input type="number" id="pnumber" name="pnumber" class="form-control">
                                    </div>



                                </div>

                                <div class="form-group" style="padding:20px">
                                    <button type="submit" class="btn btn-primary" name="register_btn">Register</button>
                                </div>
                            </fieldset>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../javascript/jquery2.1.min.js"></script>
    <script src="../javascript/main.js"></script>

    <script>




    </script>


</body>

</html>