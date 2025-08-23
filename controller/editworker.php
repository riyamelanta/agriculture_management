<?php

include '../config.php';
$ad=new Admin();
$sp_id=$_SESSION['sp_id'];

if(isset($_POST['submit'])){
	$l_name=$_POST['lname'];
	$c_no=$_POST['cno'];
	$l_age=$_POST['lage'];
	$lid=$_POST['lid'];
	$l_gender=$_POST['lgender'];
	$path="limage/".basename($_FILES['limage']['name']);
	move_uploaded_file($_FILES['limage']['tmp_name'], $path);
	$l_address=$_POST['laddress'];


	$stmt=$ad->cud("UPDATE `labour` SET `l_name`='$l_name',`l_age`='$l_age',`l_gender`='$l_gender',`l_phone`='$c_no',`l_image`='$path',`l_address`='$l_address' WHERE `l_id`='$lid'","saved");
	echo "<script>alert('worker details Updated Succesfully');
		window.location.href='../supervisor/template/pages/viewworker.php';</script>";




}




?>