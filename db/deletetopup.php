<?php
$number=$_POST["number"];
$localhost="localhost";
$username="root";
$conn =mysql_connect($localhost,$username,'');
mysql_select_db('aoneko',$conn);
$delete_topup="DELETE FROM `billing` WHERE topupid='$number'";
mysql_query($delete_topup,$conn);
header ('Location:../bankstaff/bankstaff.php');
 ?>
