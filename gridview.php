
<?php include 'config.php';
$ad=new Admin();
if(!isset($_SESSION['f_id'])){
    $ad->redirect('register/f_login');
}
$id=$_GET['id'];
$st=$ad->ret("SELECT * FROM `information` WHERE `in_id`='$id'");
$row=$st->fetch(PDO::FETCH_ASSOC);




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
</head>

<body>
    <!-- Topbar Start -->
    <?php include  'topbar.php'; ?>
    <!-- Navbar End -->


    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 bg-hero mb-5">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-white mb-md-4">Blog Detail</h1>
                    <a href="index.php" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                    <a href="gridview.php" class="btn btn-secondary py-md-3 px-md-5">Blog Detail</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Blog Start -->
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-8">
                <!-- Blog Detail Start -->
                <div class="mb-5">
                    <div class="row g-5 mb-5">
                        <div class="col-md-6">
                            <img class="img-fluid w-100" src="controller/<?php echo $row['in_image']; ?>" alt="">
                        </div>
                     
                    </div>
                    <h1 class="mb-4"><?php echo $row['in_title']; ?></h1>
                    <p><?php echo $row['in_details']; ?></p>
                   
                </div>
                <!-- Blog Detail End -->

                <!-- Comment List Start -->
                <div class="mb-5">
                   
                </div>
                <!-- Comment List End -->

                <!-- Comment Form Start -->
              
                <!-- Comment Form End -->
            </div>

            <!-- Sidebar Start -->
            <div class="col-lg-4">
                <!-- Search Form Start -->
                <div class="mb-5">
                    
                </div>
                <!-- Search Form End -->

                <!-- Category Start -->
                <div class="mb-5">
                    <h2 class="mb-4">Categories</h2>
                    <div class="d-flex flex-column justify-content-start bg-primary p-4">
                        <a class="fs-5 fw-bold text-white mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Best Plantation Crops</a>
                       
                    </div>
                </div>
                <!-- Category End -->

                <!-- Recent Post Start -->
                <div class="mb-5">
                    <h2 class="mb-4">Recent Post</h2>
                    <div class="bg-primary p-4">



                        <?php
                        $d=$ad->ret("SELECT * FROM `information` LIMIT 3");
                        while($r=$d->fetch(PDO::FETCH_ASSOC)){
                            ?>
                        <div class="d-flex overflow-hidden mb-3">
                            <img class="img-fluid flex-shrink-0" src="controller/<?php echo $r['in_image']; ?>" style="width: 75px;" alt="">
                            <a href="" class="d-flex align-items-center bg-white text-dark fs-5 fw-bold px-3 mb-0"><?php echo $r['in_title']; ?>
                            </a>
                        </div>


                        <?php } ?>
                        
                    </div>
                </div>
                <!-- Recent Post End -->

                <!-- Image Start -->
               
                <!-- Image End -->

                <!-- Tags Start -->
               
                
                <!-- Tags End -->

                <!-- Plain Text Start -->
                
                <!-- Plain Text End -->
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- Blog End -->


    <!-- Footer Start -->
 <?php include  'footer.php'; ?>
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