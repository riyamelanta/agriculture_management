
<?php
include '../../../config.php';
$ad=new Admin();
if(!isset($_SESSION['a_id'])){
  $ad->redirect('../../../register/a_login');
}

$amt=$_GET['amt'];
$b_id=$_GET['b_id'];
$s_id=$_GET['s_id'];




?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="" href="payment.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body style="background-image: url('../images/paybg1.jpg');background-size: cover;">

	<div class="container p-0" style="margin-top:70px;">
        <div class="card px-4">
            <form method="post" action="../../../controller/payment_lb.php">
            <h3 class="h8 py-3" style="color:orange;">Scan And Pay</h3>
            <div class="row gx-3">
                <div class="col-12">
                    <div class="d-flex flex-column">
                        <p class="text mb-3">Upi /Net Banking</p>
                        <img src="../images/qrcode.jpg" width="300px" height="300px">
                    </div>
                       
                </div>
                <div class="col-12">
                    <div class="d-flex flex-column">
                        <p class="text mb-1 mt-2">Transaction Id</p>
                        <input class="form-control mb-3" type="text" name="no" placeholder=""    required>
                    </div>
                </div>
                <input type="hidden" name="amt" value="<?php echo $amt; ?>">
                <input type="hidden" name="b_id" value="<?php echo $b_id; ?>">
                       
                 <input type="hidden" name="s_id" value="<?php echo $s_id; ?>">
                
               
                <div class="col-12">
                    <button class="btn btn-primary mb-3" name="submit">
                        <span class="ps-3">Pay Rs <?php echo $amt; ?></span>
                        <span class="fas fa-arrow-right"></span>
                    </button>
                </div>
            </div>
        </form>
</body>
</html>