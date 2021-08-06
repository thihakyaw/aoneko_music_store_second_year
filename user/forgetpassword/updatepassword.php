<?php
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];
$user=$_GET['username'];
if(""===$password OR ""===$confirmpassword)
{
  header('Location:nullupdatepassword.php');
}
else
{
if($password===$confirmpassword)
{
  $localhost = "localhost";
  $username = "root";

  $conn = mysql_connect($localhost,$username,'');

  //Create Database
  mysql_select_db('aoneko',$conn);

  $mysql_update_password="UPDATE user SET password='$password' where username='$user'";
  if(mysql_query($mysql_update_password,$conn))
  {
    header('Location:successupdatepassword.php');
  }
  else
  {
    echo "ERROR:".mysql_error($conn);
  }


}
else
{
  header('Location:errorupdatepassword.php');
}
}

 ?>
