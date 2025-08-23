<?php
include '../../../config.php';
$ad=new Admin();
if(!isset($_SESSION['a_id'])){
  $ad->redirect('../../../register/a_login');
}

$st=$ad->ret("SELECT * FROM `payment_labours` INNER JOIN `supervisor` ON payment_labours.s_id=supervisor.s_id");
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
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../partials/_navbar.html -->
    <?php include 'topbar.php'; ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      
      
    
      <?php include 'sidebar.php'; ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">





           
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Supervisor Payment Details</h4>
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
                            Supervisor
                          </th>
                          <th>
                             Name
                          </th>
                          <th>
                            Amount
                          </th>
                          <th>
                            Date
                          </th>
                          <th>
                            Mode
                          </th>
                             <th>
                            Transaction Id
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
                                    <td><?php echo $i=$i+1; ?></td>
                          <td class="py-1">
                            <img src="https://th.bing.com/th/id/OIP.T3DFNomYpoF9xVlURqSigAHaJX?w=167&h=194&c=7&r=0&o=5&dpr=1.5&pid=1.7" alt="image"/>
                          </td>
                          <td>
                          <?php echo $row['s_name']; ?>
                          </td>
                          <td>
                            <?php echo $row['p_amount']; ?>
                          </td>
                          <td>
                            <?php $d= $row['p_date'];
                            $new_date=date('d-m-y',strtotime($d));
                            echo $new_date; ?>
                          </td>
                          <td>
                           <?php echo $row['p_mode']; ?>
                          </td>
                          <td>
                           <?php echo $row['transaction_id']; ?>
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
