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

$mysql_output_product= "SELECT * FROM `product`";

$result_product =mysql_query($mysql_output_product,$conn);
 ?>
<html>
<head>
<meta charset = "utf-8">
<meta http-equiv = "X-UA-Compatible" content = "IE=edge">
<meta name = "viewport" content = "width=device-width, initial-scale=1">
<meta name = "description" content = "">

<title> Edit Product List</title>
<link rel="shorcut icon" href="../img/aoneko.ico"/>
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
<form action="../db/deleteproduct.php" method="post">
<input type ="number" name = "number">
<input type = "submit" class = "btn btn-sm btn-primary" value="Delete">
</form>
</div>

<div class="container">
<table class = "table table-hover table-info">
<tr>
<td>Album ID</td>
<td>Album Name</td>
<td>Price</td>
<td>Release Date</td>
<td>Bandname</td>
<td>Rating</td>
<td>Album Location</td>
</tr>
<?php while($row=mysql_fetch_assoc($result_product))
{
  ?>
<tr>
<td><?php echo $row['album_id']; ?></td>
<td><?php echo $row['album_name']; ?></td>
<td><?php echo $row['price']; ?></td>
<td><?php echo $row['release_date']; ?></td>
<td><?php echo $row['bandname']; ?></td>
<td><?php echo $row['rating']; ?></td>
<td><?php echo $row['album_location']; ?></td>
</tr>
<?php } ?>
</table>
</div>


</body>


</html>
