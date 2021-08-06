<?php
$user=$_POST['username'];
$email=$_POST['email'];
$localhost = "localhost";
$username="root";

$conn=mysql_connect($localhost,$username,'');
mysql_select_db('aoneko',$conn);
$mysql_user_output="SELECT * FROM user WHERE username='$user' AND email='$email'";
$user_output=mysql_query($mysql_user_output,$conn);
$num=mysql_num_rows($user_output);

if(""===$user OR ""===$email)
{
  header('Location:nullerror.php');
}
else
{
  if($num>0)
  {

  }
  else
  {
    header('Location:errorusername.php');
  }
}

//Question Output
$mysql_question_output="SELECT * FROM user WHERE username='$user'";
$question_output=mysql_query($mysql_question_output,$conn);
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

<form action="yourpasswordis.php?username=<?php echo $user;?>&&email=<?php echo $email;?>" method="post">
<div class="container">
<div class="col-md-6">
  <?php
  //Question Output
  while($row=mysql_fetch_assoc($question_output))
  {
  ?>
<p> <?php echo $row['security_question']; ?> </p>
<?php } ?>
</div>
<div class="col-md-6">
<p><--Here is the security question </p>
</div>

<div class="col-md-6 form-group">
<input type="texy" class="form-control" placeholder="Your Answer" name="answer">
</div>
<div class="col-md-6">
<p><--Answer Your Question Please </p>
</div>

<div class="col-md-6">
<button class="btn btn-md btn-primary btn-block">OK -></button>
</div>
<div class="col-md-6">
<p> <-- Click "Ok" to continue </p>
</div>
<div class="col-md-12">
<p> If you remember your password, <a href="../../signin.php">Click Here </a></p>
<p> If you want to create new account <a href="../../register.php">Click Here </a></p>
</div>
</div>
</form>
</header>
</body>
</html>
