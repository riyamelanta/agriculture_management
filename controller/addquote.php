<?php
include '../config.php';
$ad=new Admin();


if(isset($_POST['submit'])){
	

	$desc=$_POST['desc'];
	$cid=$_SESSION['c_id'];
	$poid=$_POST['poid'];
	$qno=$_POST['qno'];
	$qty=$_POST['qty'];
	$price=$_POST['price'];
	$total=$_POST['total'];
	$gst=$_POST['gst'];
	$grand=$_POST['grand'];


	$stmt=$ad->cud("INSERT INTO `quotation`(`c_id`, `po_id`, `quote_no`, `item_desc`, `qty`, `unit_price`, `total`, `gst`, `grand_total`) VALUES ('$cid','$poid','$qno','$desc','$qty','$price','$total','$gst','$grand')","saved");


	echo "<script>alert('Quotation Sent Successfully');window.location.href='../consumer/template/pages/viewquote.php';</script>";




}


?>