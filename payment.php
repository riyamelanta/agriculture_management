
<?php
include 'config.php';
$ad=new Admin();
if(!isset($_SESSION['f_id'])){
  $ad->redirect('../../../register/f_login');
}

$amt=$_GET['amt'];
$o_id=$_GET['oid'];
$fid=$_SESSION['f_id'];



?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="" href="admin/template/pages/payment.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body style="background-image: url('admin/template/images/paybg1.jpg');background-size: cover;">

	<div class="container p-0" style="margin-top:70px;">
        <div class="card px-4">
            <form method="post" action="controller/payment.php">
            <h3 class="h8 py-3" style="color:orange;">Scan And Pay</h3>
            <div class="row gx-3">
                <div class="col-12">
                    <div class="d-flex flex-column">
                        <p class="text mb-3">Upi /Net Banking</p>
                        <img src="img/qrcode.jpg" width="300px" height="300px">
                    </div>
                       
                </div>
                <div class="col-12">
                    <div class="d-flex flex-column">
                        <p class="text mb-1 mt-2">Transaction Id</p>
                        <input class="form-control mb-3" type="text" name="no" placeholder=""    required>
                    </div>
                </div>
                <input type="hidden" name="amt" value="<?php echo $amt; ?>">
                        <input type="hidden" name="o_id" value="<?php echo $o_id; ?>">
                        <input type="hidden" name="f_id" value="<?php echo $fid; ?>">
               
                <div class="col-12">
                    <button class="btn btn-primary mb-3" name="submit">
                        <span class="ps-3">Pay Rs <?php echo $amt; ?></span>
                        <span class="fas fa-arrow-right"></span>
                    </button>
                </div>
            </div>
        </form>






       
        </div>
    </div>

</body>
</html>