<?php
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

//For User Input
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$perPage = isset($_GET['per-page']) && $_GET['per-page']<=100 ? (int)$_GET['per-page'] :6;

//Positioning
$start=($page>1) ? ($page * $perPage)- $perPage : 0;

$mysql_product_output="SELECT * FROM `product` LIMIT {$start},{$perPage}";
$product_output=mysql_query($mysql_product_output,$conn);




//Pages
$mysql_count="SELECT COUNT(`album_id`) as total FROM product";
$sqlcount=mysql_query($mysql_count,$conn);
$count=mysql_fetch_assoc($sqlcount);
$pages=ceil($count['total']/$perPage);


$sql_select_bill = "SELECT * FROM `user` WHERE username='$username'";
$select_bill=mysql_query($sql_select_bill,$conn);

while($output_bill=mysql_fetch_assoc($select_bill))
{
  $bill=$output_bill['balance'];
}
 ?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Purchase Your Favorite Album</title>
        <link rel="shorcut icon" href="../img/aoneko.ico"/>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="shorcut icon" href="../img/aoneko.ico"/>
    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header navbar-collapse col-md-6">
                <h4 class="navbar-brand">Ao Neko Album List</h4>
            </div>

          <div class = "collapse nav navbar-collapse navbar-right col-md-6" style="color:#ffffff;">
              <li>
                <p>Username- <?php echo $username ?></p>
              </li>
              <li>
                <p>Balance- <?php echo $bill; ?>$ </p>
              </li>
            </div>
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">
      <div class="col-md-6">
      <ul class = "pagination">
    <?php for($x=1; $x<=$pages ;$x++): ?>
    <li>
    <a href = "?page=<?php echo $x;?>&per-page=<?php echo $perPage; ?>"> <?php echo $x; ?> </a>
    </li>
    <?php endfor; ?>
      </ul>
    </div>
    </div>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
              <img src="1.png" style="width:200px; height:350px;">
            </div>

            <div class="col-md-9">



                <div class="row">
                  <?php while ($row=mysql_fetch_assoc($product_output))
                  {
                    $album_id=$row['album_id'];
                  ?>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div>
                            <img src="../<?php echo $row['album_image']; ?>" style="width:250px; height:250px;">
                            <div class="caption">
                                <h5 class=>Price-$<?php echo $row['price']; ?></h5>
                                <h4><?php echo $row['album_name']; ?></h4>
                                <p>Bandname :<?php echo $row['bandname']; ?></p>
                                <p>Release Date :<?php echo $row['release_date']; ?>
                            </div>
                            <div class="ratings">
                                <a href="checkin.php?album_id=<?php echo $album_id; ?>" class="btn btn-primary">Buy</a>
                                <p>
                                  Rating:
                                  <?php for($x=1;$x<=$row['rating'];$x++): ?>
                                    <span class="glyphicon glyphicon-star"></span>
                                  <?php endfor; ?>
                                </p>
                            </div>
                        </div>
                    </div>

                  <?php } ?>
            



                    </div>



                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->


    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Team AoNeko</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
