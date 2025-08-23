<?php
include '../../../config.php';
$ad=new Admin();
if(!isset($_SESSION['a_id'])){
  $ad->redirect('../../../register/a_login');
}


?>

!DOCTYPE html>
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
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/favicon.png" />
  <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.css"
  rel="stylesheet"
/>
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.js"
></script>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../partials/_navbar.html -->
    <?php include 'topbar.php'; ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../partials/_settings-panel.html -->
      
      <?php include 'sidebar.php'; ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">          
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">

                  <h4 class="card-title">Add Expenses </h4>
                  <p class="card-description">Expense Details
             
                  </p>
                  <form class="forms-sample" method="post" action="../../../controller/addexpense.php" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputName1">Fertilizer Cost</label>
                      <input type="number" class="form-control" id="exampleInputName1" placeholder="FertilizerCost" name="fert" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Crop Cost</label>
                      <input type="number" class="form-control" id="exampleInputName1" placeholder="CropCost" name="crop" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Miscellaneous Cost</label>
                      <input type="number" class="form-control" id="exampleInputName1" placeholder="MiscCost" name="misc" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                    
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
