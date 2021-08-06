<?php


session_start();
if(!isset($_SESSION['admin']) AND !isset($_SESSION['admin_password']))
{
header("location:logintocontinue.php");
}
$localhost = "localhost";
$username = "root";
$conn = mysql_connect($localhost,$username,'');
mysql_select_db('aoneko',$conn);

$start_date=$_POST['startdate'];
$end_date=$_POST['enddate'];


$mysql_output_weeklyreport="SELECT * FROM purchase_report WHERE purchase_date BETWEEN
'$start_date' AND '$end_date' ORDER BY purchase_date";

$result_report=mysql_query($mysql_output_weeklyreport,$conn);
if(mysql_query($mysql_output_weeklyreport,$conn))
{

}
else
{
echo "ERROR".mysql_error($conn);
}
 ?>
 <html>
 <head>
 <meta charset = "utf-8">
 <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
 <meta name = "viewport" content = "width=device-width, initial-scale=1">
 <meta name = "description" content = "">

 <title>Weekly Report</title>
 <link rel="shorcut icon" href="../img/aoneko.ico"/>
 <link href = "css/bootstrap.css" type = "text/css" rel = "stylesheet">
 <link href = "css/admin.css" type = "text/css" rel = "stylesheet">
 <link href = "css/jquery-ui.css" type = "text/css" rel = "stylesheet">


 <link rel="shorcut icon" href="../img/aoneko.ico"/>
 <!-- jquery-->

 <script src = "js/jquery.js"></script>

 <!-- bootstrap js-->


 <head>
 <body>

 <nav class = "navbar navbar-default">
 <div class = "container-fluid">
 <div class = "gortys-top-text nav navbar-nav navbar-left">
   <h3> Ao Neko <span> So much admin panel</span></h3>
 <!-- / div nav -->
 </div>


 <!--/ div container-fluid-->
 </div>
 </nav>



 <div class="container">
 <table class = "table table-hover table-info">
 <tr>
 <td>Album ID</td>
 <td>User ID</td>
 <td>Username</td>
 <td>Email</td>
 <td>Album Name</td>
 <td>Rating</td>
 <td>Price</td>
 <td>Purchase Date</td>
 </tr>
 <?php while($row=mysql_fetch_assoc($result_report))
 {
   ?>
 <tr>
 <td><?php echo $row['album_id']; ?></td>
 <td><?php echo $row['user_id']; ?></td>
 <td><?php echo $row['username']; ?></td>
 <td><?php echo $row['email']; ?></td>
 <td><?php echo $row['address']; ?></td>
 <td><?php echo $row['album_name']; ?></td>
 <td><?php echo $row['price']; ?></td>
 <td><?php echo $row['purchase_date']; ?></td>
 </tr>
 <?php } ?>
 </table>
 </div>


 </body>
