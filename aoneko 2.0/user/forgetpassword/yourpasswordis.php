<?php
$user=$_GET['username'];
$email=$_GET['email'];
$answer=$_POST['answer'];

$localhost = "localhost";
$username = "root";

$conn = mysql_connect($localhost,$username,'');

//Create Database
mysql_select_db('aoneko',$conn);

$mysql_answer_validate="SELECT * FROM user WHERE username='$user' AND email='$email' AND security_answer='$answer'";
$answer_validate=mysql_query($mysql_answer_validate,$conn);
if(mysql_query($mysql_answer_validate,$conn))
{
  //echo "Yes";
}
else
{
echo "ERROR:".mysql_error($conn);
}
$num=mysql_num_rows($answer_validate);


if(""===$answer)
{
  header('Location:nullanswer.php');
}
else
{
  if($num>0)
  {

  }
  else
  {
  header('Location:erroranswer.php');
  }

}

?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Answer the security question</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/aoneko.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">


    <!-- jQuery -->
  <script src="js/jquery.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.js"></script>

  <!-- Plugin JavaScript -->
  <script src="js/jquery.easing.min.js"></script>
  <!-- javascript-->
  <script src="js/signin.js"></script>
  <script src="js/signin_alert.js"></script>
  <!-- Custom Theme JavaScript -->
  <script src="js/aoneko.js"></script>
  <script src="js/index.js"></script>
  <!-- Jquery.min.js-->
  <script src="js/jquery.min.js"></script>

  <!-- ICON-->
  <link rel="shorcut icon" href="../../img/aoneko.ico"/>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>
<nav class="navbar navbar-custom" role="navigation">
<div class="container">
<div class="nav-header" align="center">
  <p style="font-size:14px;">Did You Really Forget Your Passwords? We are here to help you</p>
</div>
</nav>

<header class="intro">
<div class="col-md-6">
<a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#updatepassword">Update</a>
</div>
<div class="col-md-6">
<p><-- Click here to update your password </p>
</div>

<div class="col-md-6" style="margin-top:100px;">
<a href="mail.php?email=<?php echo $email; ?>&&username=<?php echo $user; ?>" class="btn btn-primary btn-block">Retrieve Password From Mail</a>
</div>
<div class="col-md-6" style="margin-top:100px;">
<p><-- Click here to let us mail your password via mail </p>
</div>

<div class="col-md-12" style="margin-top:60px;">
<p> If you remember your password, <a href="../../signin.php">Click Here </a></p>
<p> If you want to create new account <a href="../../register.php">Click Here </a></p>
</div>
</div>
</form>
</header>

<!-- Modal Update-->

<div class = "modal fade" id = "updatepassword" role="dialog">

<!-- Modal Dialog of Billing-->
<div class = "modal-dialog">

<!-- modal content -->
<div class = "modal-content">

<!--header-->
<div class = "modal-header" style = "background-color:#333333;">
<h3 align = "center" style = "color:#ffffff;"> Update Your Passwords </h3>
<!-- /header-->
</div>

<!--body-->
<div class = "modal-body">

<div class="form-group" align="center">
  <form action="updatepassword.php?username=<?php echo $user; ?>" method="post">
<input type="password" style="width:300px;margin-top:20px;" class="form-control" name="password" placeholder="Enter your new password">
<input type="password" style="width:300px;margin-top:20px;" class="form-control" name="confirmpassword" placeholder="Enter your new password again">
<input type="submit" style="width:300px;margin-top:20px;" class="btn btn-primary btn-md" value="Update">
  </form>
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


</body>
</html>
