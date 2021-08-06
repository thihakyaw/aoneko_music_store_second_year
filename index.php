<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome To AoNeko</title>

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
    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/aoneko.js"></script>
    <script src="js/index.js"></script>
    <!-- Jquery.min.js-->
    <script src="js/jquery.min.js"></script>

    <!-- ICON-->
    <link rel="shorcut icon" href="img/aoneko.ico"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-play-circle"></i>  <span class="light">Ao Neko</span> Online Music Store
                </a>



            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->

                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#signin">Sign In</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Hello</h1>
                        <p class="intro-text" style="color:#4F4F4F">Welcome To Ao Neko<br>A great source of Music</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>About AoNeko</h2>
                <p>Ao Neko is a place Where you can find your favorite musics</p>
                <a href="register.php" style="border-radius:5px;" class="btn btn-primary btn-lg">Register now</a>

            </div>
        </div>
    </section>

    <!-- signin -->
    <section id="signin" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Already Registered?</h2>
                    <p>Sign in here and happy shopping</p>

                    <button style="border-radius:5px;" class="btn btn-primary btn-lg" id="signin" data-toggle="modal" data-target="#signin_modal">Sign In</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Have A Problem? Contact Us.</h2>
                <p>Feel Free to ask us. We always care our customer</p>
                <p> +959-797-212-650 </p>
                </p>
                <ul class="list-inline banner-social-buttons">

                    <li>
                        <a href="https://web.facebook.com/aoneko.music" style="border-radius:5px;" class="btn btn-primary btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <div id="map"></div>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; The AoNeko Team</p>
        </div>
    </footer>


    <!-- Modal -->
    <div class="modal fade" id="signin_modal" role="dialog">

    <!-- Dialog-->
    <div class="modal-dialog">
    <!-- Content-->
    <div class="modal-content">
    <div class="modal-header" align="center" style="background-color:#84B2E0;">
    <button class="close" data-dismiss="modal">&times;</button>
    <h3 style="color:#333333;"><span class="glyphicon glyphicon-music" style="color:#333333;"></span>Sign In Now<span class="glyphicon glyphicon-music" style="color:#333333;"></span></h3>

    </div>

    <div class="modal-body">
    <div align="center">

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


    <!-- container-->
    </div>

    <div class="modal-footer">
    <div align = "center">
        <h6 style="color:#333333">Don't Have an account?<a href="register.php">Sing Up Here</a></h6></br>
        <h6 style="color:#333333">Forget Passwords?<a href="user/forgetpassword/enteryourusername.php">Click Here</a></h6>
    </div>
    </div>
    <!--/. Dialog-->
    </div>
    <!-- /.Modal-->
    </div>
    <!-- Footer-->
    </div>


</body>

</html>
