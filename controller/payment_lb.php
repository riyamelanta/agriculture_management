<?php
include '../config.php';
$ad=new Admin();


if(isset($_POST['submit'])){
	

	$transaction_id=$_POST['no'];
	$amt=$_POST['amt'];
	$b_id=$_POST['b_id'];
	$s_id=$_POST['s_id'];


	

	$st=$ad->cud("INSERT INTO `payment_labours`(`b_id`, `p_amount`, `transaction_id`, `p_mode`, `p_status`, `s_id`) VALUES ('$b_id','$amt','$transaction_id','upi','pending','$s_id')","saved");




	$st2=$ad->ret("SELECT * FROM `booking` WHERE `b_id`='$b_id'");
	$r=$st2->fetch(PDO::FETCH_ASSOC);
	$n=$r['no_days'];

$currentDate = new DateTime(); // create a new DateTime object with the current date and time
$interval = new DateInterval('P' . $n . 'D'); // create a new DateInterval object representing a period of n days
$currentDate->add($interval); // add the interval to the current date
$newDate = $currentDate->format('Y-m-d'); // format the resulting date as a string in 'YYYY-MM-DD' format






	$st1=$ad->cud("UPDATE `booking` SET `b_status`='pending',`rdate`='$newDate' WHERE `b_id`='$b_id'","saved");


		echo "<script>alert('Payment Made Successfully');window.location.href='../admin/template/pages/reqstatus.php';</script>";








}