<!-- Modal About -->

<div class = "modal fade" id = "reply" role="dialog">

<!-- Modal Dialog of About-->
<div class = "modal-dialog">

<!-- modal content -->
<div class = "modal-content">

<!--header-->
<div class = "modal-header" style = "background-color:#333333;">
<h3 align = "center" style="color:#ffffff;">Send A Mail</h3>
<!-- /header-->
</div>

<!--body-->
<div class = "modal-body">
<form action="mail.php" method="post" enctype="multipart/form-data">

<div class="col-md-6">
<div class="form-group">
<input class="form-control" type="text" placeholder="Customer Name" name="name">
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<input class="form-control" type="text" placeholder="To: Email" name="email">
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<input class="form-control" type="text" placeholder="Contact Number" name="phonenumber">
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<input class="form-control" type="text" placeholder="Subject" name="subject">
</div>
</div>

<div class="col-md-12">
<div class="form-group">
<textarea class="form-control" type="text" placeholder="Content" name="mail_content"></textarea>
</div>
</div>
<div class="col-md-3">
<button type="submit" class="btn btn-md btn-primary btn-block"> Send -> </button>
</div>
<p> Send Advices and Help Customers through here</p>
</form>
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
