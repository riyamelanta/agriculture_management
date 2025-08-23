<?php
include '../config.php';
$ad=new Admin();


if(isset($_POST['submit'])){
	
	$transaction_id=$_POST['no'];
	
	$amt=$_POST['amt'];
	$o_id=$_POST['o_id'];
	$f_id=$_POST['f_id'];


	

	$st=$ad->cud("INSERT INTO `payment_farmers`(`f_id`, `o_id`,`transaction_id`, `pa_mode`,`amount`,`pa_status`) VALUES ('$f_id','$o_id','$transaction_id','upi','$amt','pending')","saved");
	$st1=$ad->cud("UPDATE `order_ferti` SET `or_status`='pending' WHERE `o_id`='$o_id'","saved");
	echo "<script>alert('Payment Made Successfully');window.location.href='../status.php';</script>";









}