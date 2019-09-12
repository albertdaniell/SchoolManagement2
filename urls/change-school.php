<?php

require("../database/db.php");
$school=$_GET['school'];
$original_name=$_GET['original'];
// echo $original_name;

$update=mysqli_query($conn,"UPDATE `setting` SET setting_text = '$school' WHERE setting_text='$original_name'");

if($update){
    echo "School name has been updated!";
    echo "<script>window.open('admins.php','_self')</script>";

}


?>