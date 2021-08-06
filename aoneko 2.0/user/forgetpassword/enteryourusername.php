<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Forget Password</title>

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

<form action="enteryouranswer.php" method="post">
<div class="container">
<div class="col-md-6 form-group">
<input type="text" class="form-control" placeholder="Your Username" name="username">
</div>
<div class="col-md-6">
<p><--Enter your Username Please </p>
</div>

<div class="col-md-6 form-group">
<input type="email" class="form-control" placeholder="Your Email" name="email">
</div>
<div class="col-md-6">
<p><--Enter your Email Please </p>
</div>

<div class="col-md-6">
<button class="btn btn-md btn-primary btn-block">Check</button>
</div>
<div class="col-md-6">
<p> <-- Click "Check" to continue </p>
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
