<?php
include '../config.php';
$admin=new Admin();
if(isset($_POST['asignin'])){
   $aemail=$_POST['aname'];
   $apass=$_POST['apass'];

   $stmt=$admin->ret("SELECT * FROM `admin` WHERE `a_email`='$aemail' AND `a_password`='$apass'");
   $row=$stmt->fetch(PDO::FETCH_ASSOC);
   $count=$stmt->rowCount();
   if($count==0){
   	echo "<script>alert('Invalid Email or Password');window.location.href='../register/a_login.php';</script>";
   }
   else{
   	$_SESSION['a_id']=$row['a_id'];

        echo "<script>alert('Login Successfull');window.location.href='../admin/template/pages/index.php';</script>";
   	   }
}

?>