<?php
include '../config.php';
$admin=new Admin();

if(isset($_POST['signin'])){
	$spemail=$_POST['semail'];
	$spass=md5($_POST['spass']);
	$stmt=$admin->ret("SELECT * FROM `supervisor` WHERE `s_email`='$spemail' AND `s_password`='$spass'");
	$row=$stmt->fetch(PDO::FETCH_ASSOC);

	$count=$stmt->rowCount();

	if($count==0){
		echo "<script>alert('Invalid Email and Password');
		window.location.href='../register/sp_login.php';</script>";
	}
	else{
		$_SESSION['sp_id']=$row['s_id'];
		echo "<script>alert('Login Successfull');
		window.location.href='../supervisor/template/pages/index.php';</script>";
	}
}
?>

