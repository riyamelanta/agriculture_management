
<?php include 'config.php';
$ad=new Admin();
if(!isset($_SESSION['f_id'])){
    $ad->redirect('register/f_login');
}


$fid=$_SESSION['f_id'];


$st=$ad->ret("SELECT * FROM `order_ferti` INNER JOIN `fertilizer` ON  order_ferti.fl_id=fertilizer.fl_id  WHERE order_ferti.f_id='$fid' ORDER BY order_ferti.o_id DESC");






?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Agrosys</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="order.css">
</head>

<body>
    <!-- Topbar Start -->
   <?php include 'topbar.php'; ?>
    <!-- Navbar End -->


    <!-- Hero Start -->
  
    <!-- Hero End -->


    <!-- Products Start -->
    <h3 style="margin-top:40px;margin-left: 20px;">Order Status</h3>

    <table class="table align-middle mb-0 bg-white" style="margin-top:50px;">
  <thead class="bg-light">
    <tr>
      <th>SI NO</th>
      <th>Product Name</th>
      <th>Quantity</th>
      <th>Total Price</th>
      <th>Status</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>


    <?php
    $i=0;
    while($r=$st->fetch(PDO::FETCH_ASSOC)){
     ?>
      <tr>
        <td>
            <?php echo $i=$i+1; ?>
        </td>
      <td>
        <div class="d-flex align-items-center">
          <img
              src="controller/<?php echo $r['fl_image']; ?>"
              alt=""
              style="width: 100px; height: 100px"
              
              />
          <div class="ms-3">
            <p class="fw-bold mb-1"><?php echo $r['fl_name']; ?></p>
            <p class="text-muted mb-0"><?php echo $r['fl_qty']; ?>KG</p>
            <p class="text-muted mb-0"><?php echo $r['fl_price']; ?>Rs</p>
          </div>
        </div>
      </td>
      <td>
       
        <p class="text-muted mb-0"><?php echo $r['or_qty']; ?> Packets</p>
      </td>
      <td>
        <span class="text-muted mb-0"><?php echo $r['total_price']; ?> Rs</span>
      </td>
      <td><?php echo $r['or_status']; ?></td>
      <td>
        <?php 
        if($r['or_status']=='accepted'){
            ?>
              <a type="button" class="btn btn-link btn-sm btn-rounded" href="payment.php?oid=<?php echo $r['o_id']."&amt=".$r['total_price']; ?>">
          Make Payment
        </a>

       <?php }else if($r['or_status']=='Delivered'){
        ?>
         <a type="button" class="btn btn-link btn-sm btn-rounded" href="feedback.php?oid=<?php echo $r['o_id']."&amt=".$r['total_price']; ?>">
          Give Feedback
        </a>

       <?php }?>
      
      </td>
    </tr>





   <?php } ?>
   
   
  </tbody>
</table>
 











               
                
            </div>
        </div>
    </div>
    <!-- Products End -->



    <!-- Features Start -->
    
    <!-- Features Start -->
    

    <!-- Footer Start -->
    <div class="container-fluid bg-footer bg-primary text-white mt-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-6 col-md-12 pt-5 mb-5">
                            <h4 class="text-white mb-4">for more queries</h4>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-white me-2"></i>
                                <p class="text-white mb-0">Shivanagar, kavoor, Mangalore 575015</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-white me-2"></i>
                                <p class="text-white mb-0">ankithshetty@gmail.com<br>shettynimesh07@gmail.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-white me-2"></i>
                                <p class="text-white mb-0">+917338328543<br>+919967734001</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-secondary btn-square rounded-circle me-2" href="https://twitter.com/_ankith_shetty"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-secondary btn-square rounded-circle me-2" href="https://www.facebook.com/ankith.shetty.3760"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-secondary btn-square rounded-circle me-2" href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-secondary btn-square rounded-circle" href="https://www.instagram.com/nimesh_shetty_098/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 pl-5 pt-lg-5 mb-5">
                            <h4 class="text-white mb-4">Quick Links</h4>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-white mb-2" href="index.php"><i class="bi bi-arrow-right text-white me-2"></i>Home</a>
                                <a class="text-white mb-2" href="about.php"><i class="bi bi-arrow-right text-white me-2"></i>About Us</a>
                                <a class="text-white mb-2" href="viewinfo.php"><i class="bi bi-arrow-right text-white me-2"></i>Latest Blog</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-n5">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-secondary p-5">
                            </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white py-4">
        <div class="container text-center">
            <p class="mb-0">&copy; <a class="text-secondary fw-bold" href="#">Agrosys</a>. All Rights Reserved. Designed by <a class="text-secondary fw-bold" >A N Private limited</a></p>
            <br>Distributed By: <a class="text-secondary fw-bold" href="https://themewagon.com" target="_blank">A N Private limited</a>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
 
</body>

</html>