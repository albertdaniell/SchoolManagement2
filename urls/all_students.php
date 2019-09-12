<?php

require("../database/db.php");


$fetch=mysqli_query($conn, "SELECT *FROM `student` WHERE delete_status = '0' ORDER BY date_updated DESC LIMIT 0,100");

if(mysqli_num_rows($fetch)>0){


    echo "
    <table class='table table-hover table-condensed table-bordered' style='font-size:14px'>

    <tr>
    <th>Reg number</th>
    <th>Student name</th>
    <th>G</th>
    <th>DOB</th>
    <th>Birth cno.</th>
    <th>Current Class</th>
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
    $scurrentclass=$row[12];

    if($sgender=='Male'){
        $sgender="M";
    }

    else{
        $sgender='F';
    }

    echo "
    <tr>
    <td>$sreg</td>
    <td>$sname</td>
    <td>$sgender</td>
    <td>$sdob</td>
    <td>$scertificate</td>
    <td>$scurrentclass</td>
    <td>$pnumber</td>
    <td>
    <div class='btn-group btn-group-sm'>
  <button type='button' class='btn btn-danger' id='delete' sid='$sreg'><i class='fa fa-trash'></i></button>
  <a class='btn btn-primary' href='../urls/view_student.php?sreg=$sreg' ><i class='fa fa-eye'></i></a>
  <button type='button' class='btn btn-default' id='edit' sid='$sreg'><i class='fa fa-pen'></i></button>

</div>
    </td>
    </tr>
    
    
    ";
}


echo "</tbody>
</table>";

?>