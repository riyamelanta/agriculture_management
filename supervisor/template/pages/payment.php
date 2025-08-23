<?php
include '../../../config.php';
$ad=new Admin();
if(!isset($_SESSION['sp_id'])){
  $ad->redirect('../../../register/sp_login');
}
$s_id=$_SESSION['sp_id'];
$st=$ad->ret("SELECT * FROM `payment_labours` WHERE `s_id`='$s_id' ORDER BY `p_id` DESC");
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
      <?php include 'sidebar.php'; ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
           
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Manage Payment</h4>
                  <p class="card-description">
                    Payment Details
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            SI NO
                          </th>
                          
                          <th>
                            Booking_id
                          </th>
                           <th>
                            Transaction id
                          </th>
                          
                          <th>
                        Date
                          </th>
                          <th>
                            Amount
                          </th>
                           <th>
                            Mode
                          </th>
                            <th>
                            Status
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
                            <?php echo $i=$i+1; ?>
                          </td>
                          
                          <td>
                          <?php echo $row['b_id']; ?>
                          </td>
                          
                          <td>
                            <?php echo $row['transaction_id']; ?>
                          </td>
                          <td>
                            <?php $d=$row['p_date'];
                            $n=date('d-m-y',strtotime($d));
                            echo $n; ?>
                          </td>

                          <td>
                            
                           <span class="badge rounded-pill badge-success"><?php echo $row['p_amount']; ?></span>
                          </td>
                           <th>
                            <?php echo $row['p_mode']; ?>
                          </th>
                          
                          <td>
                          <span class="badge rounded-pill badge-success"><?php echo $row['p_status']; ?></span>


                           



                    
                              
                          </td>
                          <td>
                              <?php
                            if($row['p_status']=='pending'){
                              ?>
                               <a type="button" class="btn btn-outline-success" data-mdb-ripple-color="dark" href="../../../controller/appayl.php?pid=<?php echo $row['p_id']."&bid=".$row['b_id']; ?>">Accept</a>
<a type="button" class="btn btn-outline-danger" data-mdb-ripple-color="dark" href="../../../controller/rjpayl.php?pid=<?php echo $row['p_id']."&bid=".$row['b_id']; ?>">Reject</a>



                            <?php
                            } ?>
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
  <script>
    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var b_id = button.data('bid') // Extract info from data-* attributes
        var modal = $(this)
        modal.find('#b_id').val(b_id)
    })
</script>
</body>

</html>
