<?php
include '../config.php';
$ad=new Admin();


	
	$b_id=$_GET['bid'];

	$st=$ad->cud("UPDATE `booking` SET `b_status`='rejected' WHERE `b_id`='$b_id'","saved");
	echo "<script>alert('Request for labour has been rejected successfully');window.location.href='../supervisor/template/pages/requests.php';</script>";






?>