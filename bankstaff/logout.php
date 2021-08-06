<?php
session_start();
unset($_SESSION['bank_staff']);
unset($_SESSION['bank_staff_password']);
header("location:index.php");
?>
