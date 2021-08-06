<?php
$number=$_POST["number"];
$localhost="localhost";
$username="root";
$conn =mysql_connect($localhost,$username,'');
mysql_select_db('aoneko',$conn);
$delete_question="DELETE FROM `question` WHERE question_id='$number'";
mysql_query($delete_question,$conn);
header ('Location:../staff/staff.php');
 ?>
