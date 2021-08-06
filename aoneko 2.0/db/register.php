<?php
$username=$_POST['username'];
$password=$_POST['password'];
$phonenumber=$_POST['phonenumber'];
$email=$_POST['email'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$question=$_POST['question'];
$answer=$_POST['answer'];
$balance= 0;

$localhost = "localhost";
$user = "root";
$conn=mysql_connect($localhost,$user,'');
mysql_select_db('aoneko',$conn);
$mysql_validate_duplicate="SELECT * FROM `user` WHERE `username`='$username' OR `phonenumber`='$phonenumber' OR `email`='$email' OR `address`='$address'";
$validate_duplicate=mysql_query($mysql_validate_duplicate,$conn);
$num=mysql_num_rows($validate_duplicate);



if(""===$username or ""===$password or ""===$phonenumber or ""===$email or ""===$address or ""===$gender or ""===$question or ""===$answer)
{
  echo "No";
  header ('Location:registererror.php');
}

else {
  if($num>0)
  {
    header ('Location:duplicateerror.php');
  }
  else {

  //DATABASE
  $mysql_register="INSERT INTO
  user(`user_id`,`username`,`password`,`phonenumber`,`email`,`address`,`gender`,`security_question`,`security_answer`,`balance`)
  VALUES('','$username','$password','$phonenumber','$email','$address','$gender','$question','$answer','$balance')";

  if(mysql_query($mysql_register,$conn))
  {
    //echo "Recorded";
  }
  else {
  echo "Error:".$mysql_register."</br>".mysql_error($conn);
  //header ('Location:../register.php');
  }
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

    <title>Thank You For Signing-Up</title>
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



            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                    <li>
                        <a href="../index.php">Go To Home Page</a>
                    </li>
                    <li>
                        <a href="../signin.php">Sign In</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
     <div class="container">
    <div class="page-content">
    <h2 align="center" class="header">Thank You Mate</h2>
    <p align="center" class="paragraph-1">You Have Successfully Registered</p>
    <p align="center" class="paragraph-2">Happy Shopping at Ao Neko</p>

    </div>



    </div>
  </div>

</body>

</html>
