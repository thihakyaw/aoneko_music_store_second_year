<?php
$number=$_POST["number"];
$localhost="localhost";
$username="root";
$conn =mysql_connect($localhost,$username,'');
mysql_select_db('aoneko',$conn);
$delete_bankstaff="DELETE FROM `bank_staff` WHERE bank_staff_id='$number'";
mysql_query($delete_bankstaff,$conn);
header ('Location:../admin/editbankstaff.php');
 ?>
