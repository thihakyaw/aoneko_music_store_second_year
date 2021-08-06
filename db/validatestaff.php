<?php
session_start();
$_SESSION['staff']=$_POST['staff'];
$_SESSION['staffpassword']=$_POST['staff'];
$staff=$_SESSION['staff'];
$password=$_SESSION['staffpassword'];

//Connect DB
$localhost="localhost";
$username="root";
//$db="globalstyling";
$conn=mysql_connect($localhost,$username,'');
//Select Database
mysql_select_db('aoneko',$conn);
if(""===$staff or ""===$password)
{
    //echo "Wrong Data Input. <a href='../staff/index.php'>Click Here</a> to go back to the log in page";

}
else
{
$sql_validate="SELECT * FROM `staff` WHERE staffname='$staff' AND staffpassword='$password'";
$result=mysql_query($sql_validate,$conn);

$count=mysql_num_rows($result);
echo $count;
if($count==1)
{
  echo "YES";
  header ('Location:../staff/staff.php');
}
else
{

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

     <title>Incorrect Data</title>
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


         </div>
     </nav>
     <div class="container">
     <div class="page-content">
     <h4 align="center" class="header">Oh Crap :(</h4>
     <p align="center" class="alert alert-danger">Incorrect Staffname and Passwords</p>
     <p align="center" class="alert alert-danger">Incorrect Data Input. <a href='../staff/index.php'>Click Here</a> to go back to the log in page</p>

     </div>
   </div>


     </div>


 </body>

 </html>
