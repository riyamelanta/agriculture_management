<?php
include '../../../config.php';
$ad=new Admin();
if(!isset($_SESSION['a_id'])){
  $ad->redirect('../../../register/a_login');
}

$st=$ad->ret("SELECT * FROM `farmer` WHERE `f_status`=''");
$c=$st->rowCount();




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
                  <h4 class="card-title">Farmer Details</h4>
                  <p class="card-description">
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            SI NO
                          </th>
                          
                          <th>
                             Name
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Address
                          </th>
                          <th>
                            Phone
                          </th>
                           <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        if($c==0){
                          ?>
                          <td>No records found</td>
                        <?php }else{
                          $i=0;
                          while($row=$st->fetch(PDO::FETCH_ASSOC)){

                            ?>

                                <tr>
                                  <td>
                                    <?php echo $i=$i+1;?>
                                  </td>
                        
                          <td>
                          <?php echo $row['f_name']; ?>
                          </td>
                          <td>
                            <?php echo $row['f_email']; ?>
                          </td>
                          <td>
                            <?php echo $row['f_address']; ?>
                          </td>
                          <td>
                           <?php echo $row['f_phone']; ?>
                          </td>
                          <td>
                            <a type="button" class="btn btn-success btn-sm btn-icon-text mr-3" href="viewland.php?id=<?php echo $row['f_id']; ?>">
                              View Land Details
                             <i class="far fa-eye"></i>                          
                            </a>

                          </td>
                        </tr>


                        <?php  }
                        }




                        ?>
                      
                       
                      </tbody>
                    </table>
                  </div>
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
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../js/off-canvas.js"></script>
  <script src="../js/hoverable-collapse.js"></script>
  <script src="../js/template.js"></script>
  <script src="../js/settings.js"></script>
  <script src="../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>
