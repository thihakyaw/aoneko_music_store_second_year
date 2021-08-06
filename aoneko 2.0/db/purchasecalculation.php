<?php
$balance=$_GET['balance'];
$price=$_GET['price'];
$user=$_GET['user'];
$albumid=$_GET['albumid'];
$userid=$_GET['userid'];
$newbalance=$balance-$price;
$localhost="localhost";
$username="root";
$conn=mysql_connect($localhost,$username,'');
mysql_select_db('aoneko',$conn);
$update_balance="UPDATE `user` set balance='$newbalance' WHERE username='$user'";
mysql_query($update_balance,$conn);
$mysql_download_link="SELECT * FROM `product` WHERE album_id='$albumid'";
$download_link=mysql_query($mysql_download_link,$conn);


//FOR REPORT
//FOR REPORT
//FOR REPORT


//USER
//USER

$mysql_user_retrieve="SELECT * FROM user WHERE user_id='$userid'";
$user_retrieve=mysql_query($mysql_user_retrieve,$conn);

while($row_user=mysql_fetch_assoc($user_retrieve))
{
  $username=$row_user['username'];
  $email=$row_user['email'];
  $address=$row_user['address'];

}
//Product
//Product
$mysql_product_retrieve="SELECT * FROM product WHERE album_id='$albumid'";
$product_retrieve=mysql_query($mysql_product_retrieve,$conn);

while($row_product=mysql_fetch_assoc($product_retrieve))
{
  $albumname=$row_product['album_name'];
  $price=$row_product['price'];
}
//Validate
//Validate

$mysql_validate_report="SELECT * FROM purchase_report WHERE
`album_id`=$albumid AND `user_id`='$userid' AND `username`='$username' AND `email`='$email' AND
`address`='$address' AND `album_name`='$albumname' AND `price`='$price'";


if(mysql_query($mysql_validate_report,$conn))
{
  //echo "Ok";
}
else
{
  echo "Error:".mysql_error($conn);
}

$validate_report=mysql_query($mysql_validate_report,$conn);
$num=mysql_num_rows($validate_report);

//Insert
//Insert
if($num>0)
{
  //echo "duplicateerror";
}
else
{
$mysql_report_insert="INSERT INTO purchase_report(`album_id`,`user_id`,`username`,
`email`,`address`,`album_name`,`price`,`purchase_date`)
VALUES('$albumid','$userid','$username','$email','$address','$albumname','$price',NOW())";

if(mysql_query($mysql_report_insert,$conn))
{
  //echo "Yes";
}
else
{
  echo "ERROR:".mysql_error($conn);
}
}
 ?>
 <html>

 <head>
 <meta charset = "utf-8">
 <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
 <meta name = "viewport" content = "width=device-width, initial-scale=1">
 <meta name = "description" content = "">

 <title> Thank You <?php echo $user; ?>!</title>

 <link href = "css/bootstrap.min.css" type = "text/css" rel = "stylesheet">
 <link href = "css/bootstrap.css" type = "text/css" rel = "stylesheet">
 <link href = "css/admin.css" type = "text/css" rel = "stylesheet">
<link rel="shorcut icon" href="../img/aoneko.ico"/>
 <!-- jquery-->

 <script src = "js/jquery.js"></script>

 <!-- bootstrap js-->

 <script src = "js/bootstrap.js"></script>

 <head>
 <body>

 <nav class = "navbar navbar-default">
 <div class = "container-fluid">
 <div class = "gortys-top-text nav navbar-nav navbar-left">
   <h3> Ao Neko <span> Your Purchase Have Completed</span></h3>

 <!-- / div nav -->
 </div>


 <!--/ div container-fluid-->
 </div>
 </nav>
 <div class = "container">
<h3 align="center"> Thanks For Using Our System.</h3>
<?php while($row=mysql_fetch_assoc($download_link)){ ?>
<a href="../<?php echo $row['album_location']; ?>" class="btn btn-lg btn-block btn-primary" align="center">Click Here To Download Your Album! </a>
 </div>
<?php } ?>

 </body>


 </html>
