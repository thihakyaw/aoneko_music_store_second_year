<?php
//Logout validate

session_start();
if(!isset($_SESSION['admin']) AND !isset($_SESSION['admin_password']))
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

<title> Ao Neko Admin Panel</title>

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

<div class = "navbar-header navbar-right">

<ul class = "nav navbar-nav nav-content">

<li>
<a href="#" data-toggle = "modal" data-target = "#upload"> Upload Album</a>
</li>

<li>
<a href="#" data-toggle = "modal" data-target = "#staff"> Staff Register</a>
</li>

<li>
<a href="#" data-toggle = "modal" data-target = "#bank_staff"> Add Bank Staff</a>
</li>
<li>
<a href="logout.php"> Log Out</a>
</li>

</ul>

<!-- / div navbar-header -->
</div>
<!--/ div container-fluid-->
</div>
</nav>
<div class = "container">
<a href = "producttable.php" class="btn btn-md btn-primary btn-block"> Edit Product Lists </a>
<a href = "stafftable.php" class="btn btn-md btn-primary btn-block"> Edit Staff </a>
<a href = "usertable.php" class="btn btn-md btn-primary btn-block"> Edit User </a>
<a href = "editbankstaff.php" class="btn btn-md btn-primary btn-block"> Edit Bank Staff </a>
<a href = "reporttable.php" class="btn btn-md btn-primary btn-block">Report</a>
</div>
<?php include ('uploadmodal.php'); ?>
<?php include ('staffregistermodal.php'); ?>
<?php include ('bankstaffregister.php'); ?>

</body>


</html>
