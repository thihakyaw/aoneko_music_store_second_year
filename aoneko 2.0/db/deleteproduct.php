<?php
$number=$_POST["number"];
$localhost="localhost";
$username="root";
$conn =mysql_connect($localhost,$username,'');
mysql_select_db('aoneko',$conn);
$delete_product="DELETE FROM `product` WHERE album_id='$number'";
if(mysql_query($delete_product,$conn))
{
  echo "Yes";
}
else {
echo "ERROR:".mysql_error($conn);
}
header ('Location:../admin/producttable.php');
 ?>
