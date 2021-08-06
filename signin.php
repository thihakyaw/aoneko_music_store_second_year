<html>
<head>
<title>Sign In</title>
</head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewpoint" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<!-- Angular-->

<!-- Validate -->
<script src="js/signin.js"></script>
<script src="js/signin_alert.js"></script>
<!-- Jquery-->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>


    <!-- Bootstrap-->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<!-- Custom CSS-->
<link href="css/aoneko.css" rel="stylesheet">

<!-- ICON-->
    <link rel="shorcut icon" href="img/aoneko.ico"/>



<!-- Fonts-->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
</head>

<body>
<!-- Navigation Bar-->
    <nav class="navbar navbar-custom " role="navigation">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand" href="#page-top">
                    <i class="fa fa-play-circle"></i>  <span class="light">Ao Neko</span> Online Music Store
                </a>



            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->

                    <li>
                        <a href="index.php">Go To Home Page</a>
                    </li>
                    <li>
                        <a href="register.php">Register</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <header>

      <div class="col-sm-12" align="center" style="margin-top:40px;">

      <form name="signin" method="post" action="db/signin.php" onsubmit="return validateSigninAlert();">
       <div class="form-group" >
      <input style="width:300px;" type="text" placeholder="Username" class="form-control" name="username" onblur="username_validate(username)">
         <span style = "color: red; display: none;" id = "username_error">Please Enter The Username</span>
          </div>

        <div class="form-group" >
        <input style="width:300px;margin-top:20px;" type="password" placeholder="Passwords" class="form-control" name="password" onblur="password_validate(password)" >
         <span style = "color: red; display: none;" id = "password_error">Please Enter The Passwords</span>
          </div>

          <div>
          <input type="submit" class="btn btn-primary" style="width:200px;height:40px;margin-top:20px;" value="Sign In ->">
        </div>
        </form>

      </div>

      <div align = "center">
          <h6 style="color:#333333">Don't Have an account?<a href="register.php">Sing Up Here</a></h6></br>
          <h6 style="color:#333333">Forget Passwords?<a href="user/forgetpassword/enteryourusername.php">Click Here</a></h6>

    </header>





</body>

</html>
