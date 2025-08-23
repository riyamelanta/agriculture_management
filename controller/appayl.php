<?php
include '../config.php';
$ad=new Admin();


$id=$_GET['pid'];
$bid=$_GET['bid'];
$st=$ad->cud("UPDATE `payment_labours` SET `p_status`='approved' WHERE `p_id`='$id'","saved");
$st1=$ad->cud("UPDATE `booking` SET `b_status`='payment approved' WHERE `b_id`='$bid'","saved");


    echo "<script>alert('Payment Approved Successfully');window.location.href='../supervisor/template/pages/payment.php';</script>";
?>