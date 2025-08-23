<?php
include '../config.php';
$ad=new Admin();


$id=$_GET['id'];
$st=$ad->cud("DELETE FROM `supervisor` WHERE `s_id`='$id'","saved");

echo "<script>alert('Supervisor Details deleted Succesfully');window.location.href='../admin/template/pages/viewsupervisor.php';</script>";

?>