<html>
<head>
<title>Register</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewpoint" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<!-- Angular-->
<script src="js/angular.js"></script>
<!-- Validate -->
<script src="js/register_validation.js"></script>
<script src="js/register_validation_alert.js"></script>
<!-- Bootstrap-->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<!-- Jquery-->
<script src="js/jquery.js"></script>
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
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->

                    <li>
                        <a href="index.php">Go To Home Page</a>
                    </li>
                    <li>
                        <a href="signin.php">Sign In</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!--Form-->
    <header class="registerbackgroundimage">
    <form name="register" method="post" action="db/register.php" onsubmit="return validateRegisterAlert();">
    <div class="container">
    <div class="row">
    <div class="col-sm-12" align="center">
    <h4 align="center">Fill the following to Sign Up</h4>
    <div class="form-group" >
    <input style="width:350px;" type="text" class="form-control" placeholder="Enter Username" name="username" size="30" id = "username_input" onblur="username_validate(username,8,16)">
    <span style = "color: red; display: none;" id = "username_error">Please Enter The Username And Enter The Value Between 8 and 16.</span>

    </div>
    <div class="form-group" >
    <input style="width:350px;" type="password" class="form-control" placeholder="Enter Passwords" name="password" size="30" onblur="password_validate(password,8,16)">
<span style = "color: red; display: none;" id = "password_error">Passwords must be between 8 and 16.</span>
    </div>

    <div class="form-group" >
    <input style="width:350px;" type="password" class="form-control" placeholder="Enter Passwords Again" name="confirmpassword" size="30" onblur="confirm_password_validate(confirmpassword,password)">
    <span style = "color: greens; display: none;" id = "confirmpassword_error">Please Make Sure The Passwords And Confirm Passwords Are The Same</span>

    </div>

    <div class="form-group" >
    <input style="width:350px;" type="tel" class="form-control" placeholder="Enter Phonenumber" name="phonenumber" size="30" onblur="phonenumber_validate(phonenumber)">
 <span style = "color: red; display: none;" id = "phonenumber_error">Please Enter The Number Only In Phonenumber</span>
    </div>

    <div class="form-group" >
    <input style="width:350px;" type=email class="form-control" placeholder="Enter Email" name="email" size="30" onblur="email_validate(email)">
    <span style = "color: red; display: none;" id = "email_error">You Have Entered The Invalid Email Address</span>
    </div>

    <div class="form-group" >
    <input style="width:350px;" type=textl class="form-control" placeholder="Enter address" name="address" size="30" onblur="address_validate(address)">
    <span style = "color: red; display: none;" id = "address_error">Please Enter The Address</span>

    </div>

    <div>
    <h4 style="color:#333333;margin-top:20px">Gender</h4>
    <select ng-model="gender" style="color:#333333;width:350px;height:30px;" name="gender" >
        <option>Male</option>
        <option>Female</option>
        <option>Other</option>
        </select></td>
    </div>

    <div>
    <h4 style="color:#333333;margin-top:20px">Security Question</h4>
        <select style="color:#333333;width:350px;height:30px;"  name="question">
<option>What Is Your Cat Name?</option>
<option>What Is Your Phone Number?</option>
<option>What Is Your Home Town?</option>
<option>What Is Your First School Name?</option>
<option>Who is Your Best Friend?</option>
        </select>
    </div>

    <div>
    <input style="width:350px;margin-top:20px;" type="text" placeholder="Enter your Answer" class="form-control" name="answer" size="120" onblur="answer_validate(answer)">
    <span style = "color: red; display: none;" id = "answer_error">Please Enter The Address</span>


    </div>
     <input type="submit" class="btn btn-primary" style="width:200px;height:40px;margin-top:20px;" value="Sign Up ->">

    <!--/.col-sm-8-->
    </div>

    <!-- /.row-->
    </div>
    <!--/.container-->
    </div>



    </form>
  </header>

</body>
</html>
