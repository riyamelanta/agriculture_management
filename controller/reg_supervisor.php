<?php
include '../config.php';
$admin=new Admin();



if(isset($_POST['signup'])){
	$sname=$_POST['sname'];
	$semail=$_POST['semail'];
	$spass=md5($_POST['spass']);
	$sphone=$_POST['sphone'];
	$sadd=$_POST['sadd'];





	$stmt2=$admin->ret("SELECT * FROM `supervisor` WHERE `s_email`='$semail'");
	$count=$stmt2->rowCount();

	


	if($count>0){
		echo "<script>alert('email already exists..please try with other');window.location.href='../register/sp_reg.php';</script>";
	}else{
		$stmt=$admin->cud("INSERT INTO `supervisor`(`s_name`, `s_email`, `s_password`,`s_phone`, `s_address`) VALUES ('$sname','$semail','$spass','$sphone','$sadd') ","Saved");	
			echo "<script>alert('Registered successfully');window.location.href='../register/sp_login.php';</script>";
		




	}


	
}













?>