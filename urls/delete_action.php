<?php

require("../database/db.php");
$sid=$_GET['sid'];
  
$fetch=mysqli_query($conn, "SELECT *FROM `student` where id='$sid'");

if(mysqli_num_rows($fetch)>0){

    $fetch2=mysqli_query($conn, "SELECT *FROM `student` where id='$sid' AND delete_status='1'");
    if(mysqli_num_rows($fetch2)){
        echo "<h3>
        Record does not exist in the database, you wont be able to delete
        </h3>
        ";

        exit();
    }

    
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


    
}



echo ' 

<h3 id="dialog-content-heading" style="color:grey"><i class="fa fa-trash"></i> Delete '.$sname.' - '.$sreg.'</h3>
<hr>
<h4 id="dialog-content-heading">Delete this student from the system? <br> </h4>

  <form action="" id="dialog-content-form" sid="'.$sreg.'">
<div class="form-group">
    <select name="reason" id="reason" class="form-control">
        <option value="">Select</option>
        <option value="Student transfered">Student transfered</option>
        
        <option value="Student cleared school">Student cleared school</option>
        <option value="Normal deleting">Normal deleting</option>
        <option value="Others * Natural occurences">Others * Natural occurences</option>
    </select>
</div>
<button class="btn btn-danger" sid="'.$sreg.'" id="" type="submit"><i class="fa fa-trash"></i> Confirm delete</button>

</form>
<button class="btn btn-default pull-right" style="margin-top:-50px" onclick="hideDialog()">Cancel</button>
<br> <br>
';

?>