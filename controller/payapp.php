<?php
include '../config.php';
$ad=new Admin();


$oid=$_GET['oid'];
$st1=$ad->cud("UPDATE `payment_farmersn` SET `pa_status`='approved' WHERE `o_id`='$oid'","updated");
$st1=$ad->cud("UPDATE `order_ferti` SET `or_status`='approved' WHERE `o_id`='$oid'","updated");




    echo "<script>alert('Payment Approved Successfully');window.location.href='../admin/template/pages/orderfertilizer.php';</script>";
?>