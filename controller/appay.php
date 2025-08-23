<?php
include '../config.php';
$ad=new Admin();


$id=$_GET['pid'];
$st=$ad->cud("UPDATE `paymentqt` SET `pstatus`='approved' WHERE `py_id`='$id'","saved");


    echo "<script>alert('Payment Approved Successfully');window.location.href='../admin/template/pages/payqt.php';</script>";
?>