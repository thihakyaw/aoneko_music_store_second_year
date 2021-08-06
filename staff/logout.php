<?php
session_start();
unset($_SESSION['staff']);
unset($_SESSION['staffpassword']);
header("location:index.php");
?>
