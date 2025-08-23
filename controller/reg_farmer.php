<?php
include '../config.php';
$admin=new Admin();



if(isset($_POST['signup'])){
	$fname=$_POST['fname'];
	$femail=$_POST['femail'];
	$fpass=md5($_POST['fpass']);
	$fadd=$_POST['fadd'];
	$flandar=$_POST['flandar'];
	$floc=$_POST['floc'];
	$fphone=$_POST['fphone'];
	
	$rent=$_POST['rent'];
	$path="fdoc/".basename($_FILES['fdoc']['name']);
	move_uploaded_file($_FILES['fdoc']['tmp_name'], $path);



	$stmt1=$admin->ret("SELECT * FROM `farmer` WHERE `f_email`='$femail'");
	$count=$stmt1->rowCount();



	if($count>0){
		echo "<script>alert('email already exists..please try with other');window.location.href='../register/f_reg.php';</script>";
	}else{
		$stmt=$admin->cud("INSERT INTO `farmer`(`f_name`, `f_email`, `f_password`, `f_address`, `f_landarea`, `f_landloc`, `f_phone`, `land_doc`,`rent`) VALUES ('$fname','$femail','$fpass','$fadd','$flandar','$floc','$fphone','$path','$rent') ","Saved");	
			echo "<script>alert('Registered successfully');window.location.href='../register/f_login.php';</script>";
		




	}


	
}













?>