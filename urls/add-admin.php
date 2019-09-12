<?php

require("../database/db.php");
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

if(empty($name) || empty($email) || empty($password)){
    echo "Fields should not be empty!";

    exit();
}

$checkuser=mysqli_query($conn, "SELECT *FROM `users` WHERE email = '$email'");
if(mysqli_num_rows($checkuser)){
    echo "A user with the email address exists";
    exit();
}


$insert=mysqli_query($conn, "INSERT INTO `users` VALUES(DEFAULT,'$name','$email','$password','0',NOW())");
if($insert){
    echo "Admin $name has been added to the system";
    echo "<script>window.open('admins.php','_self')</script>";
}

else{
    echo "Error";
}

?>