<?php
include '../config.php';
$ad=new Admin();

if(!isset($_SESSION['f_id'])){
echo "<script>alert('you have not logged in...please login');window.location.href='../register/f_login.php';</script>";
}
session_destroy();
unset($_SESSION['f_id']);
echo "<script>alert('logout successful');window.location.href='../index.php';</script>";




?>