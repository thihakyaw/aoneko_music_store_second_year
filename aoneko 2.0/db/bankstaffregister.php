<?php
$bankstaff=$_POST['bankstaff'];
$bankstaff_password=$_POST['bank_staff_password'];
$bankstaff_email=$_POST['email'];

$localhost = "localhost";
$username = "root";
$conn=mysql_connect($localhost,$username,'');
mysql_select_db('aoneko',$conn);
$mysql_validate_duplicate="SELECT * FROM `bank_staff` WHERE `bank_staff_name`='$bankstaff' or `bank_staff_email`='$bank_staff_email'";
$validate_duplicate=mysql_query($mysql_validate_duplicate,$conn);
$num=mysql_num_rows($validate_duplicate);

if(""===$bankstaff or ""===$bankstaff_password or ""===$bankstaff_email)
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
$mysql_bankstaff_register="INSERT INTO bank_staff(`bank_staff_id`,`bank_staff_name`,`bank_staff_password`,`bank_staff_email`)
 VALUES ('','$bankstaff','$bankstaff_password','$bankstaff_email')";
if(mysql_query($mysql_bankstaff_register,$conn))
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
