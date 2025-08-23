<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Farmer</title>
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
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
             


              <form class="pt-3" method="post" action="../controller/login_farmer.php">
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username" name="femail" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"/ title=" Email should have no capital letter">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="fpass" required>
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="signin">SIGN IN</button>
                </div>
               
               
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="f_reg.php" class="text-primary">Create</a>
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
