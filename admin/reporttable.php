<?php
session_start();
if(!isset($_SESSION['admin']) AND !isset($_SESSION['admin_password']))
{
header("location:logintocontinue.php");
}
$localhost = "localhost";
$username = "root";
$conn = mysql_connect($localhost,$username,'');
mysql_select_db('aoneko',$conn);

$mysql_output_report= "SELECT * FROM `purchase_report`";

$result_report =mysql_query($mysql_output_report,$conn);
 ?>
<html>
<head>
<meta charset = "utf-8">
<meta http-equiv = "X-UA-Compatible" content = "IE=edge">
<meta name = "viewport" content = "width=device-width, initial-scale=1">
<meta name = "description" content = "">

<title>Report</title>
<link rel="shorcut icon" href="../img/aoneko.ico"/>
<link href = "css/bootstrap.css" type = "text/css" rel = "stylesheet">
<link href = "css/admin.css" type = "text/css" rel = "stylesheet">
<link href = "css/jquery-ui.css" type = "text/css" rel = "stylesheet">


<link rel="shorcut icon" href="../img/aoneko.ico"/>
<!-- jquery-->

<script src = "js/jquery.js"></script>
<script src = "js/jquery-ui.js"></script>
<script>
$(function() {
  $( "#startdate" ).datepicker({ dateFormat :'yy-mm-dd'});
});
$(function() {
  $( "#enddate" ).datepicker({ dateFormat :'yy-mm-dd'});
});
</script>
<!-- bootstrap js-->


<head>
<body>

<nav class = "navbar navbar-default">
<div class = "container-fluid">
<div class = "gortys-top-text nav navbar-nav navbar-left">
  <h3> Ao Neko <span> So much admin panel</span></h3>
<!-- / div nav -->
</div>


<!--/ div container-fluid-->
</div>
</nav>

<div class="container">
<p> For Weekly Report, select the date where you want to start and where you want to end. We will show it for next 7 days or your desire selected days.You can also output the monthly report by selecting start day of the month and end day of the month.</p>
<div class="form-group col-md-2">
<form action="customizereport.php" method="post">
<label>StartDate:</label>
<input class="form-control" type="text" id="startdate" name="startdate">
<label>EndDate:</label>
<input class="form-control" type="text" id="enddate" name="enddate">
<input style="margin-top:20px;" type="submit" class="btn btn-md btn-primary" value="Request Report ->">
</form>
</div>
</div>

<div class="container">
<table class = "table table-hover table-info">
<tr>
<td>Album ID</td>
<td>User ID</td>
<td>Username</td>
<td>Email</td>
<td>Address</td>
<td>Album Name</td>
<td>Price</td>
<td>Purchase Date</td>
</tr>
<?php while($row=mysql_fetch_assoc($result_report))
{
  ?>
<tr>
<td><?php echo $row['album_id']; ?></td>
<td><?php echo $row['user_id']; ?></td>
<td><?php echo $row['username']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['address']; ?></td>
<td><?php echo $row['album_name']; ?></td>
<td><?php echo $row['price']; ?></td>
<td><?php echo $row['purchase_date']; ?></td>
</tr>
<?php } ?>
</table>
</div>


</body>


</html>
