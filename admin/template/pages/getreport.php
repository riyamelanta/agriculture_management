<?php
include '../../../config.php';
$ad=new Admin();

$sdate=$_GET['sdate'];
$edate=$_GET['edate'];
$ed=date('y-m-d',strtotime($edate));
$sd=date('y-m-d',strtotime($sdate));


$st=$ad->ret("SELECT * FROM `payment_farmers` INNER JOIN `farmer` ON payment_farmers.f_id=farmer.f_id WHERE date(`pa_date`) BETWEEN '$sd' AND '$ed'");
$c=$st->rowCount();

                        