<?php
session_start();
$_SESSION["user"] =$_POST['username'];
$_SESSION["user_password"] =$_POST['password'];
$username=$_SESSION["user"];
$password=$_SESSION["user_password"];

//DATABASE
$localhost="localhost";
$user="root";

$conn=mysql_connect($localhost,$user,'');
mysql_select_db('aoneko',$conn);

$sql_username_validate="SELECT * FROM user WHERE username='$username' AND password='$password'";
$result=mysql_query($sql_username_validate,$conn);
$count=mysql_num_rows($result);

if($count==1)
{
  echo "YES";
  header ('Location:../user/index.php');
}
else
{

}
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>An Error Occured :(</title>
    <link rel="shorcut icon" href="../img/aoneko.ico"/>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <style>
    body {
        padding-top: 70px;

    }
    </style>



</head>

<body>


    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">


            <div class="nav-font collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                    <li>
                        <a href="../index.php">Go To Home Page</a>
                    </li>
                    <li>
                        <a href="../signin.php">Sign In Again</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
     <div class="container">
    <div class="page-content">
    <h4 align="center" class="header">Oh Crap :(</h4>
    <p align="center" class="alert alert-danger">Wrong Passwords. Or User Account doesn't exist</p>
    <p align="center" class="alert alert-info"> If you forget your password <a href="../user/forgetpassword/enteryourusername.php"> Click Here </a></p>

    </div>



    </div>
  </div>

</body>

</html>
