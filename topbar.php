
 
 
 
 <div class="container-fluid px-5 d-none d-lg-block">
        <div class="row gx-5 py-3 align-items-center">
            <div class="col-lg-3">
                <div class="d-flex align-items-center justify-content-start">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-2"></i>
                    <h2 class="mb-0"><a href="tel:7736307857">+9980464202</a><br><a href="tel:9972665853">+9972665853</a></h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex align-items-center justify-content-center">
                    <a href="index.html" class="navbar-brand ms-lg-5">
                        <h1 class="m-0 display-4 text-primary"><span class="text-secondary">AgroSys</span></h1>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg  navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-5" style="background-color:green;">
        <a href="index.html" class="navbar-brand d-flex d-lg-none">
            <h1 class="m-0 display-4 text-secondary"><span class="text-white">Farm</span>Fresh</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse" >
            <div class="navbar-nav mx-auto py-0">
               <a href="index.php" class="nav-item nav-link">Home</a>
                
               
                
                <?php 
                 if(isset($_SESSION['f_id'])){
                    $fid=$_SESSION['f_id'];
                    $s=$ad->ret("SELECT * FROM `farmer` WHERE `f_id`='$fid' AND `nstatus`='sent'");
                    $c=$s->rowCount();
                
                    if($c==0){
                    ?>
                    <a href="notification.php" class="nav-item nav-link">Notification
                   <span class="" style="background-color: black;border:1px solid black;border-radius:30px;">0</span>
                   </a>
                    <?php
                    }else{
                        ?>
                        <a href="notification.php" class="nav-item nav-link">Notification
                   <span class="" style="background-color: black;border:1px solid black;border-radius:30px;">1</span>
                   </a>


                        <?php
                    }
                   
                   

                 }
               
                ?>
                
                
                <?php 
                if(isset($_SESSION['f_id'])){
                    ?>
                     <a href="controller/flogout.php" class="nav-item nav-link">logOut</a>

                <?php }else{ ?>


                  <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Login</a>
                    <div class="dropdown-menu m-0">
                        <a href="register/a_login.php" class="dropdown-item">Admin</a>
                        <a href="register/f_login.php" class="dropdown-item">Farmer</a>
                        <a href="register/sp_login.php" class="dropdown-item">Supervisor</a>
                       
                    </div>
                </div>


               <?php } ?>

               
            </div>
        </div>
    </nav>
