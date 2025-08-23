<?php
include '../../../config.php';
$ad=new Admin();
if(!isset($_SESSION['sp_id'])){
  $ad->redirect('../../../register/sp_login');
}
$s_id=$_SESSION['sp_id'];



?>




<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>AgroSys</title>
  <!-- base:css -->
  <link rel="stylesheet" href="../vendors/typicons/typicons.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="../vendors/select2/select2.min.css">
  <link rel="stylesheet" href="../vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../partials/_navbar.html -->
   <?php include 'topbar.php'; ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <?php include 'sidebar.php';?>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
             
            </div>
           
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Basic form elements</h4>
                  <p class="card-description">
                    Basic form elements
                  </p>
                  <form class="forms-sample" method="post" action="../../../controller/addworker.php" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputName1">Labour Name</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="lname" required pattern="[A-Za-z]{1,9}" title="Charater can only be alphabet"required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Contact No</label>
                      <input type="tel" class="form-control" id="exampleInputEmail3" placeholder="contact no" name="cno" pattern="[0-9]{10}" title="contact no should have length of 10 digits" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Age</label>
                      <input type="text" class="form-control" id="exampleInputPassword4" placeholder="age" name="lage" pattern="[0-9]{2}" title="Age should be numeric value"  required>
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Gender</label>
                        <select class="form-control" id="exampleSelectGender" name="lgender" required>
                          <option value="male">Male</option>
                          <option value="female">Female</option>
                        </select>
                      </div>
                    <div class="form-group">
                      <label>Labour Profile</label>
                      <input type="file" name="limage" class="file-upload-default" required>
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" >
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
                    </div>
                   
                    <div class="form-group">
                      <label for="exampleTextarea1">Address</label>
                      <textarea class="form-control" id="exampleTextarea1" rows="4" name="laddress" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>



           
           
           
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../partials/_footer.html -->
       <?php include 'footer.php'; ?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../js/off-canvas.js"></script>
  <script src="../js/hoverable-collapse.js"></script>
  <script src="../js/template.js"></script>
  <script src="../js/settings.js"></script>
  <script src="../js/todolist.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="../vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="../vendors/select2/select2.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="../js/file-upload.js"></script>
  <script src="../js/typeahead.js"></script>
  <script src="../js/select2.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
