<?php
$localhost = "localhost";
$username = "root";

$conn = mysql_connect($localhost,$username,'');

//Create Database
$sql_database = "CREATE DATABASE aoneko";

//Database Validate
if(mysql_query($sql_database,$conn))
{
  echo "Database Created";
}
else {
  echo "Database Fail".$sql_database."</br>".mysql_error($conn);
}

echo "</br>";
mysql_select_db('aoneko',$conn);

//Creating User Table
$sql_create_user_table = "CREATE TABLE user
(
user_id int null auto_increment,
username varchar(255) not null,
password varchar(255) not null,
phonenumber int not null,
email varchar(255) not null,
address varchar(255) not null,
gender varchar(30) not null,
security_question varchar(255) not null,
security_answer varchar(255) not null,
balance int null,

primary key (user_id)
)
";
//Validate User Created Table
if(mysql_query($sql_create_user_table,$conn))
{
  echo "User Table Created";
}
else {
  echo "User table Error".mysql_error($conn);
}
echo "</br>";

//Creating Product Table
$sql_create_product_table = "CREATE TABLE product
(
album_id int null auto_increment,
album_name varchar(255) not null,
price int not null,
release_date date not null,
bandname varchar(255) not null,
rating int not null,
album_location varchar(255) not null,
album_image varchar(255) not null,
primary key (album_id)
)
";
//Validate Product Created Table
if(mysql_query($sql_create_product_table,$conn))
{
  echo "Product Table Created";
}
else {
  echo "Product table Error".mysql_error($conn);
}
echo "</br>";

//Create Purchase Table
$sql_create_purchase_table = "CREATE TABLE purchase_report
(
album_id int null,
user_id int null,
username varchar(255) not null,
email varchar(255) not null,
address varchar(255) not null,
album_name varchar(255) not null,
price int not null,
purchase_date date not null
)
";
//Validate Purchase Created Table
if(mysql_query($sql_create_purchase_table,$conn))
{
  echo "Purchase Table Created";
}
else {
  echo "Purchase table Error".mysql_error($conn);
}
echo "</br>";


//Create Admin Table
$sql_create_admin_table = "CREATE TABLE admin
(
admin varchar(255) not null,
adminpassword varchar(255) not null

)
";
//Validate Admin Created Table
if(mysql_query($sql_create_admin_table,$conn))
{
  echo "Admin Table Created";
}
else {
  echo "Admin table Error".mysql_error($conn);
}
echo "</br>";


//Creating Staff Table
$sql_create_staff_table = "CREATE TABLE staff
(
staff_id int null auto_increment,
staffname varchar(255) not null,
staffpassword varchar(255) not null,
staffemail varchar(255) not null,
primary key (staff_id)
)
";
//Validate Created Table
if(mysql_query($sql_create_staff_table,$conn))
{
  echo "Staff Table Created";
}
else {
  echo "Staff table Error".mysql_error($conn);
}
echo "</br>";

//Creat Billing Table
$sql_create_billing_table = "CREATE TABLE billing
(
topupid int null auto_increment,
topupcode varchar(255) not null,
balanceamount int not null,
primary key(topupid)
)
";
//Validate Billing Created Table
if(mysql_query($sql_create_billing_table,$conn))
{
  echo "Billing Table Created";
}
else {
  echo "Billing table Error".mysql_error($conn);
}
echo "</br>";

//Creat Questionaire Table
$sql_create_question_table = "CREATE TABLE question
(
question_id int null auto_increment,
question varchar(255) not null,
email varchar(255) not null,
primary key(question_id)
)
";
//Validate Billing Created Table
if(mysql_query($sql_create_question_table,$conn))
{
  echo "Question Table Created";
}
else {
  echo "Question table Error".mysql_error($conn);
}
echo "</br>";

//Creat Bank Staff Table
$sql_create_bankstaff_table = "CREATE TABLE bank_staff
(
bank_staff_id int null auto_increment,
bank_staff_name varchar(255) not null,
bank_staff_password varchar(255) not null,
bank_staff_email varchar(255) not null,
primary key(bank_staff_id)
)
";
//Validate Billing Created Table
if(mysql_query($sql_create_bankstaff_table,$conn))
{
  echo "Staff Table Created";
}
else {
  echo "Staff table Error".mysql_error($conn);
}
echo "</br>";
?>
