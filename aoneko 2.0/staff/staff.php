<?php
$localhost="localhost";
$username ="root";
$conn=mysql_connect($localhost,$username,'');
mysql_select_db('aoneko',$conn);
$mysql_output_question="SELECT * FROM `question`";
$output_question=mysql_query($mysql_output_question,$conn);


//Logout validate

session_start();
if(!isset($_SESSION['staff']) AND !isset($_SESSION['staffpassword']))
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

<title> Ao Neko Staff Panel</title>
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
  <h3> Ao Neko <span> So much Staff panel</span></h3>
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
<form action="../db/deletequestion.php" method="post">
<input type ="number" name = "number">
<input type = "submit" class = "btn btn-sm btn-primary" value="Delete">
</form>
</div>

<div class="container">
<table class="table table-hover">
<tr>
<td>Question ID</td>
<td>Question</td>
<td>E-Mail</td>
<td>Reply Message</td>
</tr>
<?php while($row=mysql_fetch_assoc($output_question))
{?>
<tr>
<td><?php echo $row['question_id']; ?></td>
<td><?php echo $row['question']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><a href="#" data-toggle = "modal" data-target = "#reply"> Reply</a></td>
</tr>
<?php } ?>
</table>
</div>
<?php include('reply.php'); ?>
</body>


</html>
