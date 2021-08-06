<?php
$billcode =$_POST['billcode'];
session_start();
$username=$_SESSION['user'];
$billcode=md5($billcode);
//DB
$localhost = "localhost";
$user = "root";
$conn = mysql_connect($localhost,$user,'');
mysql_select_db('aoneko',$conn);

if(""===$billcode)
{
    header ('Location:billingerror.php');
}

$sql_billing="SELECT * FROM `billing` WHERE topupcode='$billcode'";

$billing=mysql_query($sql_billing,$conn);

$count=mysql_num_rows($billing);

if($count==1)
{
  $sql_insert="SELECT * FROM `billing` where topupcode='$billcode'";
  $insert=mysql_query($sql_insert,$conn);


  while($output_insert=mysql_fetch_assoc($insert))
  {
    $amount=$output_insert['balanceamount'];
  }
  $sql_delete_topup="DELETE FROM `billing` WHERE topupcode='$billcode'";
  if(mysql_query($sql_delete_topup,$conn))
  {
    //echo "Ok";
    header ('Location:billingsuccess.php');
  }
  else
  {
  echo "ERROR".mysql_error($conn);
  header ('Location:billingerror.php');

  }
}
else
{
  echo "No";
  header ('Location:billingerror.php');
}
$mysql_output_oldbill="SELECT * FROM `user` WHERE username='$username'";
$output_oldbill=mysql_query($mysql_output_oldbill,$conn);
while($outputoldbill=mysql_fetch_assoc($output_oldbill))
{
  $oldbill=$outputoldbill['balance'];
}
$newbill=$oldbill+$amount;

$mysql_update_new_balance="UPDATE user SET balance='$newbill' WHERE username='$username'";
if(mysql_query($mysql_update_new_balance,$conn))
{
  echo "Yes";
  //header ('Location:billingsuccess.php');
}
else
{
  echo "Error".mysql_error($conn);
}

 ?>
