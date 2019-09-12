<?php
require("../database/db.php");
error_reporting(0);

$query=$_GET['query'];
$search=mysqli_query($conn,"SELECT *FROM `student` WHERE id = '$query' AND delete_status = '0' OR fullname = '$query'  AND delete_status = '0' ORDER BY id DESC");

if(mysqli_num_rows($search)){

}

else{
    echo "<div class='alert alert-danger'>
    No results found for $query
    </div>";

    echo "
    <script>
    
    document.getElementById('pay-fee-div').classList.add('pay-fee-div');
    </script>
    ";

    exit();
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
    $current_class=$row[12];
    $delete_status=$row[10];

  


}


$fetch_fee=mysqli_query($conn,"SELECT *FROM fees INNER JOIN student ON fees.student_reg = student.id WHERE student.id  = $sreg  ORDER BY fees.date_updated DESC LIMIT 0,10");


if(mysqli_num_rows($fetch_fee)){

    echo "
    <script>
   

    document.getElementById('pay-fee-div').classList.remove('pay-fee-div');

    </script>
    
    ";
    echo '

<div class="col-sm-6" style="padding:10px">
<h3 style="background:#e8e8e8;padding:10px;font-size:15px">Fee record for '.$sname.' - '.$sreg.' <span class="badge">'.$current_class.'</span></h3> 
 <hr>
<table class="table table-condensed table-hover" style="font-size:13px;background:#f7f7f7;">
<thead>
    <tr>
        <th>Receipt</th>
        <th>Class</th>
        <th>Term</th>
        <th>Amount paid</th>
        <th>date</th>

    </tr>
</thead>
<tbody>
</div>



       
    </form>
</div>

   ';
} 


else{
    
    echo "<div class='col-sm-6'>
    <h3 style='background:#e8e8e8;padding:10px;font-size:15px'>Fee record for $sname - $sreg <span class='badge'>$current_class </span></h3> 


    No fee record exists for this student
    </div>";

    

    
}

while($row=mysqli_fetch_array($fetch_fee)){
    $receipt_no =$row[0];
    $sreg=$row[1];
    $class=$row[2];
    $term=$row[3];
    $fee=$row[4];
    $datepaid=$row[5];




    echo "
    
    <tr>
    <td>$receipt_no</td>
    <td>$class</td>
    <td>$term</td>
    <td>$fee</td>
    <td>$datepaid</td>
</tr>

    
    ";


}

echo "

</tbody>
</table>
</div>
";

echo '

<div class="col-sm-6" style="padding:10px" id="pay-fee-div">
<h3 style="background:#e8e8e8;padding:10px">Make payment</h3> 

<form action="" id="make-payment-div" sreg="'.$sreg.'" current_class="'.$current_class.'">
<div class="form-group">
            <label for="">Receipt number</label>
            <input type="number" class="form-control" id="receipt_no">
        </div>

        <div class="form-group">
            <label for="">Term</label>
          <select name=""  class="form-control" id="term">
              <option value="1">First term</option>
              <option value="2">Term two</option>
              <option value="3">Term three</option>
          </select>
        </div>
        <div class="form-group">
            <label for="">Fee amount</label>
            <input type="number" id="amount" class="form-control">
        </div>

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Make Payment</button>
        </div>
';







// if($fetch_fee){
//     echo "Fee record exist";
// }

// else{
//     echo "No fee record exists";
// }


?>