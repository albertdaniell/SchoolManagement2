<?php
require("../database/db.php");

$query=$_GET['query'];
$search=mysqli_query($conn,"SELECT *FROM `student` WHERE id LIKE '%$query%' OR fullname LIKE '%$query%' OR parent_name LIKE '%$query%' OR birth_certificate LIKE '%$query%' ORDER BY id DESC");

if(mysqli_num_rows($search)){


}

else{
    echo "<span>
    No results found for $query
    </span>";
}


while ($row = mysqli_fetch_array($search)) {
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
    $delete_status=$row[10];
    $delete_msg='';
    $edit_msg='';
    $delete_btn = "<button type='button' class='btn btn-danger btn-xs pull-right' id='delete' sid='$sreg'><i class='fa fa-trash'></i> Delete</button> ";
    $edit_btn = "  <button type='button' class='btn btn-default btn-xs pull-right' id='edit' sid='$sreg'><i class='fa fa-pen'></i> Edit </button>
    
    ";

    if($delete_status =='1'){
        $delete_msg="  <i>__deleted</i>  <button type='button' class='btn btn-success btn-xs pull-right' id='reverse' sid='$sreg'><i class='fa fa-reply'></i> Reverse</button>
        ";
        $delete_btn ="";
        $edit_btn="";
    }

echo "<a href='../urls/view_student.php?sreg=$sreg'> $sreg - $sname - $sgender [ <i class='fa fa-phone'></i> $pnumber] - <span style='color:grey;display:inline;font-size:12px'>($prelation) $pname</span>  $delete_msg  $delete_btn $edit_btn</a>";

}

?>