<?php
//Album
$target_dir = "album/";
$filename_album=$_FILES["album"]["name"];
$filename_album=str_replace(' ','_',$filename_album);
$target_file = $target_dir.basename($filename_album);
$uploadok = 1;
$albumFileType = pathinfo($target_file,PATHINFO_EXTENSION);



//Check the existance of the pdf

if(file_exists($target_file))
{
  echo "Already Existed.";
  $uploadok = 0;
}


//Checking file formats

if($albumFileType!="mp3" && $albumFileType="rar" && $albumFileType="zip" && $albumFileType!="mp4")
{
  echo "Sorry, file format is wrong";
  $uploadok = 0;
}

//Check if $uploadok is ok
if ($uploadok==0)
{
  echo "Sorry, Upload Failed";
}

else {
  if(move_uploaded_file($_FILES["album"]["tmp_name"],$target_file))
  {
    echo "Upload Complete.";
  }
  else {
    echo "Sorry, failed.";
  }
}
//IMAGE
$target_dir_image = "image/";
$filename_image=$_FILES["image"]["name"];
$filename_image=str_replace(' ','_',$filename_image);
$target_file_image = $target_dir_image.basename($filename_image);
$uploadok_image= 1;
$imageFileType = pathinfo($target_file_image,PATHINFO_EXTENSION);



//Check the existance of the pdf

if(file_exists($target_file_image))
{
  echo "Already Existed.";
  $uploadok_image = 0;
}


//Checking file formats

if($imageFileType!="jpg" && $imageFileType!="png")
{
  echo "Sorry, file format is wrong";
  $uploadok_image = 0;
}

//Check if $uploadok is ok
if ($uploadok_image==0)
{
  echo "Sorry, Upload Failed";
}

else {
  if(move_uploaded_file($_FILES["image"]["tmp_name"],$target_file_image))
  {
    echo "Upload Complete.";
  }
  else {
    echo "Sorry, failed.";
  }
}


//Database
$localhost = "localhost";
$username = "root";
$conn = mysql_connect ($localhost,$username,'');

mysql_select_db('aoneko',$conn);

$album_name=$_POST["album_name"];
$album_price=$_POST["album_price"];
$bandname=$_POST["bandname"];
$rating=$_POST["rating"];
if(""===$album_name or ""===$album_price or ""===$bandname or ""===$rating)
{
  echo "</br>";
  echo "An Error Occured. Some Data Might Left.";
  echo "<a href='admin/admin.php'>Try Again</a>";
  header ('Location:db/nulldataerror.php');

}
else {

$sql_insert_album="INSERT INTO product
(`album_id`,`album_name`,`price`,`release_date`,`bandname`,`rating`,`album_location`,`album_image`)
VALUES ('','$album_name','$album_price',NOW(),'$bandname','$rating','$target_file','$target_file_image')
";
if(mysql_query($sql_insert_album,$conn))
{
 echo "Recorded";
   header ('Location:db/successdata.php');
}
else
{
 echo "Error:".$sql_insert_album."</br>".mysql_error($conn);
}
}

 ?>
