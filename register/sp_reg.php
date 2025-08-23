<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>PolluxUI Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="../admin/template/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="../admin/template/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../admin/template/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../admin/template/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="aglogo.png" style="margin-left: 50px;border:1px;border-radius:80px;" alt="logo">
              </div>
            
              <h4>New here?</h4>
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
              <form class="pt-3" method="post" action="../controller/reg_supervisor.php">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Username" name="sname" pattern="[A-Za-z]{1,9}" title="Charater can only be alphabet"required>
                </div>
                
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email" name="semail" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"/ title=" Email should have no capital letter">
                </div>
               <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="password" name="spass" required>
                </div>

                <div class="form-group">
                  <input type="tel" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="phone number" name="sphone" pattern="[0-9]{10}" required>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="address" name="sadd" required>
                </div>
                

                
                
                                               
           
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="signup">SIGN UP</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="sp_login.php" class="text-primary">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="../admin/template/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../admin/template/js/off-canvas.js"></script>
  <script src="../admin/template/js/hoverable-collapse.js"></script>
  <script src="../admin/template/js/template.js"></script>
  <script src="../admin/template/js/settings.js"></script>
  <script src="../admin/template/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
