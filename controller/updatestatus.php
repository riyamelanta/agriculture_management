<?php

include '../config.php';
$ad=new Admin();


$st=$_GET['st'];
$oid=$_GET['oid'];

$std=$ad->cud("UPDATE `order_ferti` SET `or_status`='$st' WHERE `o_id`='$oid'","saved");

echo "<script>alert('Status Updated Succesfully');window.location.href='../admin/template/pages/orderfertilizer.php';</script>";











?>