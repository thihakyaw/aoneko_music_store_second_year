<?php
$email =$_POST['email'];
$question=$_POST['question'];

$localhost = "localhost";
$username = "root";

$conn=mysql_connect($localhost,$username,'');
mysql_select_db('aoneko',$conn);


if(""===$email or ""===$question)
{
  header ('Location:nulldataerror.php');
}
else
{
$mysql_insert_question="INSERT INTO question(`question_id`,`question`,`email`)
VALUES('','$question','$email')";
if(mysql_query($mysql_insert_question,$conn))
{
  header ('Location:successdata.php');
}

else
{
  echo "ERROR:".mysql_error($conn);

}
}
 ?>
