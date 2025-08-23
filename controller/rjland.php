<?php
include '../config.php';
$ad=new Admin();


$id=$_GET['id'];
$st=$ad->cud("UPDATE `farmer` SET `f_status`='rejected',`nstatus`='sent' WHERE `f_id`='$id'","saved");


    echo "<script>alert('Land rejected Successfully');window.location.href='../admin/template/pages/viewrjland.php';</script>";
?>