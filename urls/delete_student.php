<?php

require("../database/db.php");

$reason=$_POST['reason'];
$sid=$_POST['sid'];

if(empty($reason)){
    echo "Fields cannot be empty";
    exit();
}



$updateq=mysqli_query($conn,"UPDATE `student` 
SET delete_status = '1'
 WHERE id='$sid'");

if($updateq){
    $insertq=mysqli_query($conn,"INSERT INTO `deleted_students` VALUES('$sid','$reason',NOW())");

    if($insertq){
        echo "Delete success!";
        
    }

    else{
        echo "Error 2";
    }

}

else{
    echo "error 1";
}


?>