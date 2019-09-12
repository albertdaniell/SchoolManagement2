<?php
require("../urls/stats.php");


$sreg=$_POST['sreg'];
$receipt_no=$_POST['receipt_no'];
$term=$_POST['term'];
$amount=$_POST['amount'];
$current_class=$_POST['current_class'];

if(empty($sreg) || empty($receipt_no) || empty($term) || empty($amount) || empty($current_class)){
    echo "Fields cannot be empty!";
    exit();
}

$pay=mysqli_query($conn,"INSERT INTO fees VALUES('$receipt_no','$sreg','$current_class','$term','$amount',NOW())");

if($pay){
    echo "Payment made";
}

else{
    echo "Error";
}

?>