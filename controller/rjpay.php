<?php
include '../config.php';
$ad=new Admin();


$id=$_GET['pid'];
$st=$ad->cud("UPDATE `paymentqt` SET `pstatus`='rejected' WHERE `py_id`='$id'","saved");


    echo "<script>alert('Payment rejected Successfully');window.location.href='../admin/template/pages/payqt.php';</script>";
?>