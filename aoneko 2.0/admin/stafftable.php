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

$mysql_output_staff= "SELECT * FROM `staff`";

$result_staff =mysql_query($mysql_output_staff,$conn);
 ?>
<html>
<head>
<meta charset = "utf-8">
<meta http-equiv = "X-UA-Compatible" content = "IE=edge">
<meta name = "viewport" content = "width=device-width, initial-scale=1">
<meta name = "description" content = "">

<title> Edit Staff List</title>

<link href = "css/bootstrap.min.css" type = "text/css" rel = "stylesheet">
<link href = "css/bootstrap.css" type = "text/css" rel = "stylesheet">
<link href = "css/admin.css" type = "text/css" rel = "stylesheet">
<link rel="shorcut icon" href="../img/aoneko.ico"/>
<!-- jquery-->

<script src = "js/jquery.js"></script>

<!-- bootstrap js-->

<script src = "js/bootstrap.js"></script>

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
<div class = "container">
<form action="../db/deletestaff.php" method="post">
<input type ="number" name = "number">
<input type = "submit" class = "btn btn-sm btn-primary" value="Delete">
</form>
</div>

<div class="container">
<table class = "table table-hover table-info">
<tr>
<td>Staff ID</td>
<td>Staff Name</td>
<td>Password</td>
<td>Staff Email</td>

</tr>
<?php while($row=mysql_fetch_assoc($result_staff))
{
  ?>
<tr>
<td><?php echo $row['staff_id']; ?></td>
<td><?php echo $row['staffname']; ?></td>
<td><?php echo $row['staffpassword']; ?></td>
<td><?php echo $row['staffemail']; ?></td>

</tr>
<?php } ?>
</table>
</div>


</body>


</html>
