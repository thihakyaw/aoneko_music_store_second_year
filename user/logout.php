<?php
session_start();
unset($_SESSION['user']);
unset($_SESSION['user_password']);
header("location:../index.php");
?>
