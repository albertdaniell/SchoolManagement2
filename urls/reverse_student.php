<?php

require("../database/db.php");


$sid=$_POST['sid'];



$updateq=mysqli_query($conn,"UPDATE `student` 
SET delete_status = '0'
 WHERE id='$sid'");

if($updateq){
    $deleteq=mysqli_query($conn,"DELETE FROM `deleted_students` WHERE id = '$sid'");

    if($deleteq){
        echo "Reverse success!";
        
    }

    else{
        echo "Error 2";
    }

}

else{
    echo "error 1";
}


?>