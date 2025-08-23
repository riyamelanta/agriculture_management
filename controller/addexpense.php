<?php
include '../config.php';
$ad=new Admin();


if(isset($_POST['submit'])){
	$fert=$_POST['fert'];
	$crop=$_POST['crop'];
	$misc=$_POST['misc'];

	
	



	$st=$ad->cud("INSERT INTO `expense`(`fert_cost`,`crop_cost`,`misc_cost`) VALUES ('$fert','$crop','$misc')","saved");


		echo "<script>alert('Expenses added Succesfully');window.location.href='../admin/template/pages/viewexpense.php';</script>";





}