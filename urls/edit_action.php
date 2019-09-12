<?php

require("../database/db.php");
$sid=$_GET['sid'];
  
$fetch=mysqli_query($conn, "SELECT *FROM `student` where id='$sid'");

if(mysqli_num_rows($fetch)>0){

    $fetch2=mysqli_query($conn, "SELECT *FROM `student` where id='$sid' AND delete_status='1'");
    if(mysqli_num_rows($fetch2)){
        echo "
       <h3> Record does not exist in the database, you wont be able to edit, please reload your page</h3>
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
    $scurrentclass=$row[12];


    

echo ' 

<h3 id="dialog-content-heading" style="color:grey"><i class="fa fa-pen"></i> Edit student - '.$sname.' - '.$sreg.'</h3>
<hr>

<form class="form-horizontal" method="POST" action="" sid='.$sid.' name="register-student-form" id="edit-form">


<fieldset>

    <legend>Student Details</legend>
    <div class="form-group">
       
        <div class="col-sm-12">
            <label for="">Full name *</label>
            <input type="text" id="sname" name="sname" class="form-control" value="'.$sname.'">
            
        </div>

        <div class="col-sm-12">
            <label for="">Gender *</label>
            <select id="sgender" name="sgender" class="form-control">
                <option  value= "'.$sgender.'"> '.$sgender.'</option>
                <option  value="Male"> Male</option>
                <option  value="Female"> Female</option>
    
            </select>
        </div>
    </div>



    <div class="form-group">
        <div class="col-sm-12">
            <label for="">Date Of Birth *</label>
            <input type="date" id="sdob" name="sdob" class="form-control" value='.$sdob.'>
        </div>

        <div class="col-sm-12">
            <label for="">Birth Cerificate Number</label>
            <input type="text" id="scertificate" name="scertificate" class="form-control" value='.$scertificate.'>
        </div>

    </div>

    <div class="form-group">
        <div class="col-sm-12">
            <label for="">Class Admitted To *</label>
            <select name="" id="sclass" class="form-control" name="sclass">
                <option value="'.$sclass.'">'.$sclass.'</option>
               
                <option value="Baby Class">Baby Class</option>
                <option value="Kg 1"> Kg 1</option>
                <option value="Kg 2">Kg 2</option>
                <option value="Kg 3">Kg 3</option>
                <option value="Class 1">Class 1</option>
                <option value="Class 2">Class 2</option>
                <option value="Class 3">Class 3</option>
                <option value="Class 4">Class 4</option>
                <option value="Class 5">Class 5</option>
                <option value="Class 6">Class 6</option>
                <option value="Class 7">Class 7</option>
                <option value="Class 8">Class 8</option>
            </select>

            

        </div>

        <div class="col-sm-12">
        <label for="">Current Class *</label>
        <select name="" id="scurrentclass" class="form-control" name="scurrentclass">
            <option value="'.$scurrentclass.'">'.$scurrentclass.'</option>
            <option value="Baby Class">Baby Class</option>
            <option value="Kg 1"> Kg 1</option>
            <option value="Kg 2">Kg 2</option>
            <option value="Kg 3">Kg 3</option>
            <option value="Class 1">Class 1</option>
            <option value="Class 2">Class 2</option>
            <option value="Class 3">Class 3</option>
            <option value="Class 4">Class 4</option>
            <option value="Class 5">Class 5</option>
            <option value="Class 6">Class 6</option>
            <option value="Class 7">Class 7</option>
            <option value="Class 8">Class 8</option>
            
        </select>

    </div>
        
        <div class="col-sm-12">
            <label for="">Date admitted (Leave blank if date of admission is today)</label>
            <input type="date" id="sdate" name="sdate" class="form-control" value='.$sdate.'>
        </div>

    </div>

</fieldset>
<fieldset>
    <legend>Parents/ Gudardian details</legend>
    <div class="form-group">


        <div class="col-sm-12">
            <label for="">Parent/ Gudardian name</label>
            <input type="text" id="pname" name="pname" class="form-control" value="'.$pname.'">
        </div>

        <div class="col-sm-12">
            <label for="">Relationship</label>
            <select class="form-control" id="prelation">
                <option value="'.$prelation.'">'.$prelation.'</option>
                <option value="Parent">Parent</option>
                <option value="Guardian">Guardian</option>

            </select>
        </div>

    </div>

    <div class="form-group">


        <div class="col-sm-12">
            <label for="">Phone number</label>
            <input type="number" id="pnumber" name="pnumber" class="form-control" value='.$pnumber.'>
        </div>



    </div>

    <div class="form-group" style="padding:20px">
        <button type="submit" class="btn btn-primary" name="register_btn"><i class="fa fa-pen"></i> Update</button>
    </div>
</fieldset>

</form>
<button class="btn btn-default pull-right" style="margin-top:-50px" onclick="hideDialog()">  Cancel</button>
<br> <br>
';

}


?>