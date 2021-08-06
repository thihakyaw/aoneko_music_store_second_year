<!-- Modal Billing -->

<div class = "modal fade" id = "confirmpurchase" role="dialog">

<!-- Modal Dialog of Billing-->
<div class = "modal-dialog">

<!-- modal content -->
<div class = "modal-content">

<!--header-->
<div class = "modal-header" style = "background-color:#333333;">
<h3 align = "center" style = "color:#ffffff;"> Confirm Your Purchase. </h3>
<!-- /header-->
</div>

<!--body-->
<div class = "modal-body">
<h5 align="center"> Are You Sure You Want To Purchase This?</h5>
<div class="container">

<div style="padding-left:200px;">
<a class="btn btn-primary" href='../db/purchasecalculation.php?balance=<?php echo $balance; ?>&&price=<?php echo $price; ?>&&user=<?php echo $username; ?>&&userid=<?php echo $userid; ?>&&albumid=<?php echo $albumid;?>'> Yes!</a>
<button class="btn btn-primary" data-dismiss="modal"> No!</button>
</div>


</div>
</div>

<!-- /body-->
</div>

<!--footer-->


<!-- modal-didalog-->
</div>

</div>
<!-- modal fade-->
</div>
