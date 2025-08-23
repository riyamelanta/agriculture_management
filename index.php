<?php include 'config.php';
$ad=new Admin();


?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AgroSys</title>
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

    <style type="text/css">.blog-item img{height: 250px}</style>
</head>

<body>
    <!-- Topbar Start -->
  <?php
    include 'topbar.php';
  ?> 


    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/bgc.jpg" alt="Image">
                    <div class="carousel-caption top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-center justify-content-center">
                        <div class="text-start p-5" style="max-width: 900px;">
                           
                            <h1 class="display-1 text-white mb-md-4">AgroSys</h1>
                        <!--     <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Explore</a>
                            <a href="" class="btn btn-secondary py-md-3 px-md-5">Contact</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Start -->
    <div class="container-fluid banner mb-5">
        <div class="container">
            <div class="row gx-0">
                <div class="col-md-6">
                    <div class="bg-primary bg-vegetable d-flex flex-column justify-content-center p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">For Farmers...</h3>
                        <p class="text-white">We help farmers in cultivating crops and maintaining it.</p>
                        
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bg-secondary bg-fruit d-flex flex-column justify-content-center p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">For Labourers...</h3>
                        <p class="text-white">We provide employment opportunities and wages for labourers.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Start -->


    <!-- About Start -->
    <div class="container-fluid about pt-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="d-flex h-100 border border-5 border-primary border-bottom-0">
                        <img class="img-fluid " src="img/about.jpeg">
                    </div>
                </div>
                <div class="col-lg-6 pb-5">
                    <div class="mb-3 pb-2">
                        <h2 class="text-primary text-uppercase">About Us</h2>
                    </div>
                    <p class="mb-4">At present, farmers face numerous challenges in the cultivation and maintenance of crops, as well as the task of securing a sufficient number of skilled workers for various agricultural activities. AgroSys is a software application designed with the primary objective of assisting farmers in the registration of their land, managing their fields, and facilitating employment opportunities for labourers. This proposed project seeks to enhance agricultural efficiency, productivity and profitability by addressing key challenges faced by farmers.</p>
                    <p  class="mb-4">AgroSys is an agricultural management software, serving as a vital tool within the larger context of modern farming practices. Admin, Farmers and Supervisors are the different types of system users. Each individual user has access to the system online. This technology offers job opportunities for labourers. For high needs, it offers a straightforward database, and it offers both new and seasoned system users an excellent and user-friendly graphical user interface (GUI). It operates independently by offering seamless land registration, field management, and labour coordination functionalities.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!--JavaScript Libraries -->
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
