<?php
$localhost = "localhost";
$user="root";

$conn=mysql_connect($localhost,$user,"");
mysql_select_db('aoneko',$conn);
session_start();
$username=$_SESSION["user"];
$sql_select_bill = "SELECT * FROM `user` WHERE username='$username'";
$select_bill=mysql_query($sql_select_bill,$conn);

while($output_bill=mysql_fetch_assoc($select_bill))
{
  $bill=$output_bill['balance'];
}
//Logout validate

//session_start();
if(!isset($_SESSION['user']) AND !isset($_SESSION['user_password']))
{
header("location:logintocontinue.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome user - <?php echo $username; ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/user.css" rel="stylesheet">
    <!-- Custom CSS -->


    <link rel="shorcut icon" href="../img/aoneko.ico"/>
    <!-- Jquery-->
    <script src = "js/jquery.js"></script>
    <!-- Bootstrap -->
    <script src = "js/bootstrap.js"></script>

    <!-- ICON-->
    <link rel="shorcut icon" href="../img/aoneko.ico"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="navbar-header collapse navbar-collapse col-md-6">
                <ul class="nav navbar-nav nav-content">
                    <li>
                        <a href="#" data-toggle = "modal" data-target = "#about">About</a>
                    </li>
                    <li>
                        <a href="#" data-toggle = "modal" data-target = "#billing">Billing</a>
                    </li>
                    <li>
                        <a href="#" data-toggle = "modal" data-target = "#contact">Contact</a>
                    </li>
                    <li>
                        <a href="logout.php">Log Out</a>
                    </li>

                </ul>
              </div>

              <div class = "navbar-header collapse nav navbar-collapse navbar-right col-md-6" style="color:#ffffff;">
                <li>
                  <p>Username- <?php echo $username; ?></p>
                </li>
                <li>
                  <p>Balance- <?php echo $bill; ?>$ </p>
                </li>
              </div>
            <!-- /.navbar-collapse -->
        </div>

        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <h4 class = "alert alert-info" align= "center"> Welcome To Ao Neko </h4>

        <p class = "alert alert-info" align= "center"> Hello Ao Neko Music Store User </p>
        <p class = "alert alert-info"> Before You Purchase Some Of Our Goods, you should Probably know about this</p>
        <p class = "alert alert-info">
          *To Top-Up the bill, click Billing link and Billing Modal will appear. </br>
          *If you have any problem about our system, ask our staff. Our Staff will reply ASAP. </br>
          *If you want to know more About as, Click "About". We also provide our staff phonenumber there, so you can ask them whatever you want.</br>
        </p>

        <p class = "alert alert-info"> If you had already learned about How things work in our website, lets go shopping by clicking by clicking "Browse Albums" button.</p>
        <p class = "alert alert-info" align = "center"> Have a nice day while listening Music</p>
        <a href="../product/index.php" class = " btn btn-lg btn-primary btn-block"> Browse Album </a>
    </div>

    <?php include ('../modal/modalabout.php'); ?>
    <?php include ('../modal/modalbilling.php'); ?>
    <?php include ('../modal/modalcontact.php'); ?>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
