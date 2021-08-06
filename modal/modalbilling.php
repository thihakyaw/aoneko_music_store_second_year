<!-- Modal Billing -->

<div class = "modal fade" id = "billing" role="dialog">

<!-- Modal Dialog of Billing-->
<div class = "modal-dialog">

<!-- modal content -->
<div class = "modal-content">

<!--header-->
<div class = "modal-header" style = "background-color:#333333;">
<h3 align = "center" style = "color:#ffffff;"> Top-up the Bill here!! </h3>
<!-- /header-->
</div>

<!--body-->
<div class = "modal-body">
<form action="../db/billing.php" method ="post">
<div class = "input-group">
<input type = "text"  class = "form-control" name = "billcode" placeholder="Enter the number from your Voucher!">
<span class = "input-group-addon"><input type = "submit" value = "Top-up" class="btn btn-xs btn primary"></span>
</div>
</form>

<!-- /body-->
</div>

<!--footer-->
<div class = "modal-footer">
<p> If you have any problem, click <a href="#" data-toggle = "modal" data-target = "#contact">Contact </a><p>
<!-- /header-->
</div>

<!-- modal-didalog-->
</div>

</div>
<!-- modal fade-->
</div>
