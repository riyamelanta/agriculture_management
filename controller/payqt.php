<?php
include '../config.php';
$ad=new Admin();


if(isset($_POST['submit'])){
	$amt=$_POST['amt'];
	$cid=$_SESSION['c_id'];

	$transaction_id=$_POST['no'];
	$id=$_POST['id'];
	$stmt=$ad->cud("INSERT INTO `paymentqt`(`q_id`, `c_id`, `amt`, `transaction_id`, `pstatus`, `mode`) VALUES ('$id','$cid','$amt','$transaction_id','pending','upi')","saved");
	$st=$ad->cud("UPDATE `quotation` SET `qstatus`='approved,paid' WHERE `q_id`='$id'","updated");
	echo "<script>alert('Payment Successfull');window.location.href='../consumer/template/pages/payview.php';</script>";




}

?>