<?php
include '../config.php';
$ad=new Admin();


$id=$_GET['id'];
$poid=$_GET['poid'];
$st=$ad->cud("UPDATE `quotation` SET `qstatus`='rejected' WHERE `q_id`='$id'","saved");


    echo "<script>alert('Qouotation Rejected Successfully');window.location.href='../admin/template/pages/viewquotation.php?id=$poid';</script>";
?>