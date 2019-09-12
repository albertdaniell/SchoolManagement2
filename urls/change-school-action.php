<?php

require("../database/db.php");




$school=$_GET['school'];





echo ' 

 <h3 id="dialog-content-heading" style="color:grey">Update school name</h3>
<hr>


  <form action="" id="update-school-form" school="'.$school.'">
<div class="form-group">
    <input value="'.$school.'" id="school" class="form-control">
</div>
<button class="btn btn-primary" school="'.$school.'" id="" type="submit"><i class="fa"></i> Change</button>


</form>
<button class="btn btn-default pull-right" style="margin-top:-50px" onclick="hideDialog()">Cancel</button>
<br> <br>
 ';

?>