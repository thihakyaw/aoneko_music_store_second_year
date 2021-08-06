<?php
session_start();
header("location:index.php");
unset($_SESSION['admin']);
unset($_SESSION['admin_password']);
header("location:index.php");

?>
