<?php
include '../../../config.php';
$ad=new Admin();
if(!isset($_SESSION['sp_id'])){
  $ad->redirect('../../../register/sp_login');
}
$s_id=$_SESSION['sp_id'];
$st=$ad->ret("SELECT * FROM `booking` INNER JOIN `supervisor` ON booking.s_id=supervisor.s_id WHERE booking.s_id=$s_id ORDER BY `b_id` DESC");
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
                            <img src="https://th.bing.com/th/id/OIP.T3DFNomYpoF9xVlURqSigAHaJX?w=167&h=194&c=7&r=0&o=5&dpr=1.5&pid=1.7" alt="image"/>
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
                            if($row['b_status']=='requested'){

                              ?>


                              <button type="button" class="btn btn-success btn-sm btn-icon-text mr-3"  data-mdb-toggle="modal" data-mdb-target="#exampleModal" data-bid="<?php echo $row['b_id']; ?>">
                              Approve
                            <i class="fas fa-check"></i>                    
                              </button>
                            <a type="button" class="btn btn-danger" href="../../../controller/rejectreq.php?bid=<?php echo $row['b_id']; ?>"><i class="fas fa-xmark" ></i>&nbsp;Reject</a>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Labour Approval Form</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <form method="post" action="../../../controller/updatereq.php">
    <div class="modal-body">
        <input type="hidden" name="b_id" id="b_id">
        <label>Labour Service Charge</label>
        <input type="number" name="amount" required><br>
       
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
        <button class="btn btn-primary" name="submit">Submit Request</button>
    </div>
</form>

      </div>
      
    </div>
  </div>
</div>


                          <?php  }



                            ?>
                              
                          </td>
                        </tr>

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
