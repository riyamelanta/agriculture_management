<?php
include '../config.php';
$ad=new Admin();


$id=$_GET['did'];
$st=$ad->cud("DELETE FROM `labour` WHERE `l_id`='$id'","saved");

echo "<script>alert('Labour Details deleted Succesfully');window.location.href='../supervisor/template/pages/viewworker.php';</script>";

?>