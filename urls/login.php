<?php

require("../database/db.php");

$email=$_POST['email'];
$password=$_POST['password'];

if(empty($email)|| empty($password)){
    echo "Fields should not be empty!";
    exit();
}

$check=mysqli_query($conn,"SELECT *FROM `users` WHERE email = '$email' AND passwd = '$password'");

if(mysqli_num_rows($check)>0){
    session_start();//here we start a session
    $_SESSION["email"]=$email;
    echo "Welcome, Please wait while we redirect you to the next page.";
    echo "<script>window.open('public/','_self')</script>";
}

else{
    echo "Email and password do not match. Please try again!"; 

    
}


?>