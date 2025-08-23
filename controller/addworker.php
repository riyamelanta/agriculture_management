<?php

include '../config.php';
$ad=new Admin();
$sp_id=$_SESSION['sp_id'];

if(isset($_POST['submit'])){
	$l_name=$_POST['lname'];
	$c_no=$_POST['cno'];
	$l_age=$_POST['lage'];
	$l_gender=$_POST['lgender'];
	$path="limage/".basename($_FILES['limage']['name']);
	move_uploaded_file($_FILES['limage']['tmp_name'], $path);
	$l_address=$_POST['laddress'];


	$stmt=$ad->cud("INSERT INTO `labour`(`l_name`,`l_age`,`l_gender`,`l_phone`,`l_image`,`l_address`,`s_id`)VALUES('$l_name','$l_age','$l_gender','$c_no','$path','$l_address','$sp_id')","saved");
	echo "<script>alert('Worker details added Succesfully');
		window.location.href='../supervisor/template/pages/viewworker.php';</script>";




}




?>