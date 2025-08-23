<?php
include '../config.php';
$ad=new Admin();

if(!isset($_SESSION['a_id'])){
echo "<script>alert('you have not loggrd in...please login');window.location.href='../register/a_login.php';</script>";
}
session_destroy();
unset($_SESSION['a_id']);
echo "<script>alert('logout successful');window.location.href='../index.php';</script>";




?>