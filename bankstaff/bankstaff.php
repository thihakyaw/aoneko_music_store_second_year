<?php
$localhost="localhost";
$username ="root";
$conn=mysql_connect($localhost,$username,'');
mysql_select_db('aoneko',$conn);
$mysql_output_billing="SELECT * FROM `billing`";
$output_billing=mysql_query($mysql_output_billing,$conn);

session_start();
if(!isset($_SESSION['bankstaff']) AND !isset($_SESSION['bank_staff_password']))
{
header("location:logintocontinue.php");
}
?>

<html>

<head>
<meta charset = "utf-8">
<meta http-equiv = "X-UA-Compatible" content = "IE=edge">
<meta name = "viewport" content = "width=device-width, initial-scale=1">
<meta name = "description" content = "">

<title> Ao Neko Bank Staff Panel</title>
<link rel="shorcut icon" href="../img/aoneko.ico"/>
<link href = "css/bootstrap.min.css" type = "text/css" rel = "stylesheet">
<link href = "css/bootstrap.css" type = "text/css" rel = "stylesheet">
<link href = "css/admin.css" type = "text/css" rel = "stylesheet">

<!-- jquery-->

<script src = "js/jquery.js"></script>

<!-- bootstrap js-->

<script src = "js/bootstrap.js"></script>

<head>
<body>

<nav class = "navbar navbar-default">
<div class = "container-fluid">
<div class = "gortys-top-text nav navbar-nav navbar-left">
  <h3> Ao Neko <span> So much Bank Staff panel</span></h3>
<!-- / div nav -->
</div>
<div class="navbar-header navbar-right">
<ul  class = "nav navbar-nav nav-content">
  <li>
  <a href="logout.php"> Log Out</a>
  </li>
</ul>
</div>
<!--/ div container-fluid-->
</div>
</nav>

<div class = "container">

<div class="form-group">
  <form action="../db/addtopup.php" method="post">
<label>Top Up Code:</label>
<input class="form-control" type="text" placeholder="Top Up Code" name="topupcode">
<label>Amount:</label>
<input class="form-control" type="text" placeholder="Amount" name="amount">
<button class="btn btn-primary btn-md">Add </button>
  </form>
</div>

<form action="../db/deletetopup.php" method="post">
<input type ="number" name = "number">
<input type = "submit" class = "btn btn-sm btn-primary" value="Delete">
</form>
</div>

<div class="container">
<table class="table table-hover">
<tr>
<td>ID Number</td>
<td>Top Up Code</td>
<td>Amount</td>
</tr>
<?php while($row=mysql_fetch_assoc($output_billing))
{?>
<tr>
<td><?php echo $row['topupid']; ?></td>
<td><?php echo $row['topupcode']; ?></td>
<td><?php echo $row['balanceamount']; ?>$</td>
</tr>
<?php } ?>
</table>
</div>

</body>


</html>
