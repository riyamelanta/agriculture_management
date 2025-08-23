<?php
include '../config.php';
$ad=new Admin();


$id=$_GET['id'];
$st=$ad->cud("UPDATE `farmer` SET `f_status`='approved',`nstatus`='sent' WHERE `f_id`='$id'","saved");


    echo "<script>alert('Land Approved Successfully');window.location.href='../admin/template/pages/viewapland.php';</script>";
?>