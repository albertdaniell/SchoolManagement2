<?php

// This is the db connect file
$servername = "localhost";
$username = "root";
$password = "";
$database ="management";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

else{

}



?>