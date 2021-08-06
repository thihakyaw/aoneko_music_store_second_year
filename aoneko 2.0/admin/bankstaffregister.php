<!-- Modal About -->

<div class = "modal fade" id = "bank_staff" role="dialog">

<!-- Modal Dialog of About-->
<div class = "modal-dialog">

<!-- modal content -->
<div class = "modal-content">

<!--header-->
<div class = "modal-header" style = "background-color:#333333;">
<h3 align = "center" style="color:#ffffff;">Add New Bank Staff Account</h3>
<!-- /header-->
</div>

<!--body-->
<div class = "modal-body">
<div class = "container-fluid">
<!-- container-fluid-->



<form action ="../db/bankstaffregister.php" method="post">

<div class ="form-group">
<label>Bank Staff Name </label>
<input type = "text" class= "form-control" name="bankstaff">



<label>Bank Staff Passwords </label>
<input type = "password" class= "form-control" name="bank_staff_password">



<label>E Mail </label>
<input type = "email" class= "form-control" name="email">



<button class="btn btn-sm btn-primary">Add New Bank Staff</button>
</div>
</form>
</div>
<!-- /body-->
</div>

<!--footer-->


<!-- /header-->
</div>

<!-- modal-didalog-->
</div>

</div>
<!-- modal fade-->
</div>
