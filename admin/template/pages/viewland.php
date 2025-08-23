<?php
include '../../../config.php';
$ad=new Admin();
if(!isset($_SESSION['a_id'])){
  $ad->redirect('../../../register/a_login');
}
$id=$_GET['id'];
$st=$ad->ret("SELECT * FROM `farmer` WHERE `f_id`='$id'");
$row=$st->fetch(PDO::FETCH_ASSOC);




?>




<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Agrosys</title>
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
    <!-- partial:../../partials/_navbar.html -->



 <?php include 'topbar.php'; ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      
      <!-- partial:../../partials/_sidebar.html -->
      <?php include 'sidebar.php'; ?>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">




            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Land Details</h4>
                  <p class="card-description">Farmer Land Details
             
                  </p>
                  <form class="forms-sample" method="post" action="../../../controller/addinfo.php" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputName1">Location</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name" value="<?php echo $row['f_landloc'];?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Land Area in Sq feet</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name" value="<?php echo $row['f_landarea'];?>" readonly>
                    </div>

                     <div class="form-group">
                      <label for="exampleInputName1">Rent for per Sq feet</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name" value="<?php echo $row['rent'];?>" readonly>
                    </div>
                                   <div class="form-group">
                      <label for="exampleInputCity1">Land Documnet</label>&nbsp;&nbsp;
                     <a type="button" class="btn btn-info btn-sm btn-icon-text mr-3" href="../../../controller/land_doc/">
                              View 
                             <i class="far fa-eye"></i>                          
                            </a>
                    </div>
                    <?php
                    if($row['f_status']=='approved'){
                      ?>

                        <button type="submit" class="btn btn-success mr-2" name="submit" ><i class="fas fa-check-double"></i>&nbsp;&nbsp;Land Approved</button>


                  <?php  }else if($row['f_status']=='rejected'){
                    ?>
                        <button type="submit" class="btn btn-danger mr-2" name="submit" ><i class="fas fa-xmark"></i>&nbsp;&nbsp;Land Rejected</button>


                    <?php
                  }else{
                    ?>
                    <a type="submit" class="btn btn-success mr-2" name="submit" href="../../../controller/apland.php?id=<?php echo $row['f_id']; ?>">Approve the Land</a>
                        <a type="submit" class="btn btn-danger mr-2" name="submit" href="../../../controller/rjland.php?id=<?php echo $row['f_id']; ?>">Reject the Land</a>
                  <?php }?>
                    

                    <a type="submit" class="btn btn-dark mr-2" name="submit" href="viewfarmer.php">Back</a>
                    
                  </form>
                </div>
              </div>
            </div>






            
          
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
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
