<?php
include '../config.php';
$ad=new Admin();


if(isset($_POST['submit'])){
	$count=$_POST['count'];

	$no=$_POST['no'];
	$s_id=$_POST['s_id'];
	$start_date=$_POST['start'];

	$s=$ad->ret("SELECT * FROM `labour` WHERE `s_id`='$s_id' AND `l_status`=''");
	$r=$s->rowCount();
	$today=date("Y-m-d");

	if($count>$r)
		{
			echo "<script>alert('Please enter the labour value less than $r');window.location.href='../admin/template/pages/viewsupervisor.php';</script>";
		}if($count==0 || $no==0)
		{
			echo "<script>alert('Please enter the value above 0');window.location.href='../admin/template/pages/viewsupervisor.php';</script>";
		}if($start_date<$today)
		{
			echo "<script>alert('Please enter a valid date');window.location.href='../admin/template/pages/viewsupervisor.php';</script>";
		}else if($count<$r || $count==$r){
				$st=$ad->cud("INSERT INTO `booking`(`s_id`, `no_labours`,`no_days`,`b_status`) VALUES ('$s_id','$count','$no','requested')","saved");
			echo "<script>alert('Request has been submitted successfully');window.location.href='../admin/template/pages/reqstatus.php';</script>";
			}
		
	}
	

