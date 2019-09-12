<?php

require("../database/db.php");




// $school=$_GET['school'];





echo ' 

 <h3 id="dialog-content-heading" style="color:grey">Add Admin</h3>
<hr>


  <form action="" id="add-admin-form">
<div class="form-group">

    <input value="" id="name" type="text" class="form-control" placeholder="Admin Name...">
</div>

<div class="form-group">
    <input value="" type="email" id="email" class="form-control" placeholder="Email...">
</div>

<div class="form-group">

    <input value="" type="password" id="password" class="form-control" placeholder="Password">
</div>
<button class="btn btn-primary"  id="" type="submit"><i class="fa"></i> Add Admin</button>


</form>
<button class="btn btn-default pull-right" style="margin-top:-50px" onclick="hideDialog()">Cancel</button>
<br> <br>
 ';

?>