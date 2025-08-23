<?php
include '../../../config.php';
$ad=new Admin();
if(!isset($_SESSION['a_id'])){
  $ad->redirect('../../../register/a_login');
}

$st=$ad->ret("SELECT * FROM `booking` INNER JOIN `supervisor` ON booking.s_id=supervisor.s_id ORDER BY `b_id` DESC");
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
                  <h4 class="card-title">Booking Status</h4>
                  <p class="card-description">
                    Labour Booking
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
                            No of labour requested
                          </th>
                          
                          <th>
                            No of days
                          </th>
                          <th>
                            Status
                          </th>
                          <th>
                            Charge for Service
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
                          <td class="py-1">
                           <?php echo $row['s_name']; ?>
                          </td>
                          <td>
                          <?php echo $row['no_labours']; ?>
                          </td>
                          
                          <td>
                            <?php echo $row['no_days']; ?>
                          </td>
                          <td>
                            
                           <span class="badge rounded-pill badge-success"><?php echo $row['b_status']; ?></span>
                          </td>
                          <td>
                             <?php
                            if($row['b_status']=='approved' || $row['b_status']=='paid' || $row['b_status']=='pending' || $row['b_status']='payment approved' || $row['b_status']=='payment rejected'){
                              echo $row['amt']."Rs"; }else{
                                echo "-";
                              } ?>
                          </td>
                          <td>
                            <?php
                            if($row['b_status']=='approved'){
                              ?>
                               <button type="button" class="btn btn-info btn-sm btn-icon-text mr-3"  data-mdb-toggle="modal" data-mdb-target="#exampleModal" data-bid="<?php echo $row['b_id']; ?>">
                              View Response
                           <i class="far fa-circle-dot"></i>                  
                              </button>
                            <a type="button" class="btn btn-warning" href="payment.php?amt=<?php echo $row['amt']."&b_id=".$row['b_id']."&s_id=".$row['s_id']; ?>"><i class="fas fa-file-invoice-dollar"></i>&nbsp;Make Payment</a>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

                                 <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Message</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       
    <div class="modal-body">
       
         Hello,Your request has been approved by the supervisor..<br>
         To initiate the service please pay the due charge.<br>
         Thank You
      
       
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
        <button class="btn btn-primary" data-mdb-dismiss="modal">Okay</button>
    </div>

      </div>
      
    </div>
  </div>



                            <?php }else{
                              echo "-";
                            } ?>
                         

                          </td>


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
    <script>
    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var b_id = button.data('bid') // Extract info from data-* attributes
        var modal = $(this)
        modal.find('#b_id').val(b_id)
    })
</script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>
