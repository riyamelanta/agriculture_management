<?php
include '../config.php';
$admin=new Admin();

if(isset($_POST['signin'])){
	$email=$_POST['femail'];
	$pass=md5($_POST['fpass']);
	$stmt=$admin->ret("SELECT * FROM `farmer` WHERE `f_email`='$email' AND `f_password`='$pass'");
	$row=$stmt->fetch(PDO::FETCH_ASSOC);


	$count=$stmt->rowCount();
	if($count==0){
		echo "<script>alert('Invaild Email or Password');window.location.href='../register/f_login.php';</script>";
	}
	else{

		$_SESSION['f_id']=$row['f_id'];
		echo $_SESSION['f_id'];
	

		
		echo "<script>alert('Login Successful');window.location.href='../index.php';</script>";
	}



}


?>