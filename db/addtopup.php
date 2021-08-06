<?php
$topupcode=$_POST['topupcode'];
$amount=$_POST['amount'];

$topupcode=md5($topupcode);

$localhost = "localhost";
$username = "root";
$conn=mysql_connect($localhost,$username,'');
mysql_select_db('aoneko',$conn);

$mysql_validate_duplicate="SELECT * FROM `billing` WHERE `topupcode`='$topupcode'";
$validate_duplicate=mysql_query($mysql_validate_duplicate,$conn);
$num=mysql_num_rows($validate_duplicate);

if(""===$topupcode or ""===$amount)
{
  echo "An Error Occured: Some Data Left to input";
  echo "<a href='../bankstaff/bankstaff.php'> Try Again </a>";
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
$mysql_topup="INSERT INTO billing(`topupid`,`topupcode`,`balanceamount`)
 VALUES ('','$topupcode','$amount')";
if(mysql_query($mysql_topup,$conn))
{
  echo "Success: <a href='../bankstaff/bankstaff.php'> Back to the page </a>";
    header ('Location:successdata.php');
}
else
{
  echo "No";
}
}
}
 ?>
