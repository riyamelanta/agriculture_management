<?php
include '../config.php';
$ad=new Admin();


if(isset($_POST['submit'])){
	$amount=$_POST['amount'];
	$b_id=$_POST['b_id'];

	$st=$ad->cud("UPDATE `booking` SET `amt`='$amount',`b_status`='approved' WHERE `b_id`='$b_id'","saved");
	echo "<script>alert('Request for labour has been approved successfully');window.location.href='../supervisor/template/pages/requests.php';</script>";





}
?>