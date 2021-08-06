<?php
//There will be 2 tables ; product and user.
//User is for balance validating and subbing balance
//Product is for giving download link access
$album_id=$_GET['album_id'];

session_start();
$username=$_SESSION["user"];
if(!isset($_SESSION['user']) AND !isset($_SESSION['user_password']))
{
header("location:../user/logintocontinue.php");
}
$localhost="localhost";
$user="root";
$conn=mysql_connect($localhost,$user,'');
mysql_select_db('aoneko',$conn);
//Select Query Statement
$mysql_user_table_output="SELECT * FROM `user`WHERE username='$username'";
$mysql_product_table_output="SELECT * FROM `product` WHERE album_id='$album_id'";

$user_table_output=mysql_query($mysql_user_table_output,$conn);
$product_table_output=mysql_query($mysql_product_table_output,$conn);


 ?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Purchase</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="shorcut icon" href="../img/aoneko.ico"/>
      <link rel="shorcut icon" href="../img/aoneko.ico"/>
    <!-- Custom CSS -->
    <link href="css/purchase.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Pleease check in your purchasing item</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                          <?php
                          while($row_user=mysql_fetch_assoc($user_table_output))
                          {
                            $balance=$row_user['balance'];
                            $username=$row_user['username'];
                            $userid=$row_user['user_id'];
                            $email=$row_user['email'];
                            $address=$row_user['address'];

                            ?>
                            <p> Your Name : <?php echo $row_user['username']; ?></p>
                            <p> Your Balance: <?php echo $row_user['balance']; ?>$</p>
                          <?php } ?>
                          <?php
                          while($row_product=mysql_fetch_assoc($product_table_output))
                          {
                            $price=$row_product['price'];
                            $albumname=$row_product['album_name'];
                            $albumid=$row_product['album_id'];
                            $download_link=$row_product['album_location'];
                          ?>
                            <p> Album Name :<?php echo $row_product['album_name']; ?></p>
                            <p> Price : <?php echo $row_product['price']; ?>$</p>
                            <p> Release Date :<?php echo $row_product['release_date']; ?></p>

                          <?php

                       }
                       $mysql_validate_report="SELECT * FROM purchase_report WHERE
                       `album_id`=$albumid AND `user_id`='$userid' AND `username`='$username' AND `email`='$email' AND
                       `address`='$address' AND `album_name`='$albumname' AND `price`='$price'";
                       $validate_report=mysql_query($mysql_validate_report,$conn);
                       $num=mysql_num_rows($validate_report);


                          if($price>$balance)
                          {
                            echo "<a href='' class='btn btn-primary btn-block disabled' id = 'button'>Buy Now</a>";
                            echo "<p class='bg-danger'>You Have Not Enough Money To Buy This :( !</p>";
                          }

                          else
                          {
                              echo "<a class='btn btn-primary btn-block' id = 'button' data-toggle='modal' data-target='#confirmpurchase'>Buy Now</a>";
                          }

                          ?>

                          <?php


                          if($num>0)
                          {
                          echo "<a href='../$download_link' class='btn btn-primary btn-block' id = 'button'>You Already Own This</a>";
                          }
                           ?>


                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('../modal/confirmpurchase.php'); ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Javascript -->


</body>

</html>
