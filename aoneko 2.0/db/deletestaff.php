<?php
$number=$_POST["number"];
$localhost="localhost";
$username="root";
$conn =mysql_connect($localhost,$username,'');
mysql_select_db('aoneko',$conn);
$delete_staff="DELETE FROM `staff` WHERE staff_id='$number'";
mysql_query($delete_staff,$conn);
header ('Location:../staff/staff.php');
 ?>
