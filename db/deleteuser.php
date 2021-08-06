<?php
$number=$_POST["number"];
$localhost="localhost";
$username="root";
$conn =mysql_connect($localhost,$username,'');
mysql_select_db('aoneko',$conn);
$delete_user="DELETE FROM `user` WHERE user_id='$number'";
mysql_query($delete_user,$conn);
header ('Location:../admin/usertable.php');
 ?>
