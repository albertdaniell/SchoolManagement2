<?php

require("../database/db.php");
$gender = $_GET['gender'];
// $class=$_GET['class'];
$start=$_GET['start'];
$end=$_GET['end'];


if(empty($start) || empty($end)){

    $fetch=mysqli_query($conn, "SELECT *FROM `student` WHERE delete_status = '0' AND gender = '$gender' ORDER BY date_updated DESC");

    if(mysqli_num_rows($fetch)>0){
        $gender_number=mysqli_num_rows($fetch);
    
        echo "<h4>Sorting students according to all $gender  ( $gender_number )  </h4>";
    
    
        echo "
        <table class='table table-hover table-condensed' style='font-size:14px'>
    
        <tr>
        <th>Registration Number</th>
        <th>Student name</th>
        <th>Gender</th>
        <th>DOB</th>
        <th>Birth cerificate number</th>
        <th>Class registered to</th>
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
    exit();
}




if(!empty($start) || !empty($end) || empty($gender)){

    $fetch3=mysqli_query($conn, "SELECT *FROM `student` WHERE delete_status = '0' AND date_admitted BETWEEN '$start' AND '$end' ORDER BY date_updated DESC");

    if(mysqli_num_rows($fetch3)>0){
        $dates_number=mysqli_num_rows($fetch3);
    
        echo "<h4>Sorting students according to dates between $start and $end  ( $dates_number )</h4>";
    
    
        echo "
        <table class='table table-hover table-condensed' style='font-size:14px'>
    
        <tr>
        <th>Registration Number</th>
        <th>Student name</th>
        <th>Gender</th>
        <th>DOB</th>
        <th>Birth cerificate number</th>
        <th>Class registered to</th>
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
    
    while ($row = mysqli_fetch_array($fetch3)) {
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
    exit();
}

if(!empty($gender) || !empty($start) || !empty($end)){
    $fetch2=mysqli_query($conn, "SELECT *FROM `student` WHERE delete_status = '0' AND gender = '$gender' AND date_admitted BETWEEN '$start' AND '$end' ORDER BY date_updated DESC");


    if(mysqli_num_rows($fetch2)>0){
        $gender_number=mysqli_num_rows($fetch2);
    
        echo "<h4>Sorting students according to all $gender and the date $start - $end   ( $gender_number )  </h4>";
    
    
        echo "
        <table class='table table-hover table-condensed' style='font-size:14px'>
    
        <tr>
        <th>Registration Number</th>
        <th>Student name</th>
        <th>Gender</th>
        <th>DOB</th>
        <th>Birth cerificate number</th>
        <th>Class registered to</th>
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
    
    while ($row = mysqli_fetch_array($fetch2)) {
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
    exit();

}



?>