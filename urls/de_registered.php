<?php

require("../database/db.php");


$fetch=mysqli_query($conn, "SELECT *FROM `student` WHERE delete_status = '1' ORDER BY id DESC");

if(mysqli_num_rows($fetch)>0){


    echo "
    <table class='table table-hover table-condensed' style='font-size:14px'>

    <tr>
    <th>Registration Number</th>
    <th>Student name</th>
    <th>Gender</th>
    <th>DOB</th>
    <th>Birth cerificate number</th>
    <th>Class registered to</th>
    <th>Date registered</th>
    <th>Parent contact</th>
    <th>Action</th>
    </tr>

    <tbody>
  
    
    
    ";
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

    echo "
    <tr>
    <td>$sreg</td>
    <td>$sname</td>
    <td>$sgender</td>
    <td>$sdob</td>
    <td>$scertificate</td>
    <td>$sclass</td>
    <td>$sdate</td>
    <td>$pnumber</td>
    <td>
    <div class='btn-group btn-group-sm'>
  <button type='button' class='btn btn-success' id='reverse' sid='$sreg'><i class='fa fa-reply'></i></button>
  <a class='btn btn-primary' href='../urls/view_student.php?sreg=$sreg' ><i class='fa fa-eye'></i></a>
</div>
    </td>
    </tr>
    
    
    ";
}


echo "</tbody>
</table>";

?>