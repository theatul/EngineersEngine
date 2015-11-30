<?php
session_start();
unset($_SESSION['islogin']);
$_SESSION['logout']='Logout successfully';
$_SESSION['islogin']='false';
header('location:../index.php');
?>