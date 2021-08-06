<?php
$staff=$_POST['staff'];
$staff_password=$_POST['staff_password'];
$staff_email=$_POST['email'];

$localhost = "localhost";
$username = "root";
$conn=mysql_connect($localhost,$username,'');
mysql_select_db('aoneko',$conn);
$mysql_validate_duplicate="SELECT * FROM `staff` WHERE `staffname`='$staff' or `staffemail`='$staff_email'";
$validate_duplicate=mysql_query($mysql_validate_duplicate,$conn);
$num=mysql_num_rows($validate_duplicate);

if(""===$staff or ""===$staff_password or ""===$staff_email)
{
  echo "An Error Occured: Some Data Left to input";
  echo "<a href='../admin/admin.php'> Try Again </a>";
  header ('Location:nulldataerror.php');
}
else
{
  if($num>0)
  {
    header ('Location:duplicateerror.php');
  }
  else
  {

$mysql_staff_register="INSERT INTO staff(`staff_id`,`staffname`,`staffpassword`,`staffemail`)
 VALUES ('','$staff','$staff_password','$staff_email')";
if(mysql_query($mysql_staff_register,$conn))
{
  echo "Success: <a href='../admin/admin.php'> Back to the page </a>";
}
else
{
  echo "No";
}
}
}
 ?>
