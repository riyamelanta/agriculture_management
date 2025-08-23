
<?php
include '../../../config.php';
$ad=new Admin();
if(!isset($_SESSION['a_id'])){
  $ad->redirect('../../../register/a_login');
}

$st=$ad->ret("SELECT * FROM `supervisor`");


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
                  <h4 class="card-title">Supervisor Details</h4>
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
                            Email
                          </th>
                          <th>
                            Address
                          </th>
                          <th>
                            Phone
                          </th>
                          <th>
                            No of labour
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
                          <td class="py-1">
                            <img src="https://th.bing.com/th/id/OIP.T3DFNomYpoF9xVlURqSigAHaJX?w=167&h=194&c=7&r=0&o=5&dpr=1.5&pid=1.7" alt="image"/>
                          </td>
                          <td>
                          <?php echo $row['s_name']; ?>
                          </td>
                          <td>
                            <?php echo $row['s_email']; ?>
                          </td>
                          <td>
                            <?php echo $row['s_address']; ?>
                          </td>
                          <td>
                           <?php echo $row['s_phone']; ?>
                          </td>
                           <td id="tot_lb">
                           <?php
                           $s_id=$row['s_id'];
                           $s=$ad->ret("SELECT * FROM `labour` WHERE `s_id`='$s_id'");
                            $count=$s->rowCount();





                            echo $count; ?>
                          </td>
                          <td>
                            <a type="button" class="btn btn-success btn-sm btn-icon-text mr-3" href="viewlabour.php?id=<?php echo $s_id; ?>">
                              View Labour Details
                             <i class="far fa-eye"></i>                          
                            </a>
                           
                            <button type="button" class="btn btn-warning btn-sm btn-icon-text mr-3"  data-mdb-toggle="modal" data-mdb-target="#exampleModal" data-sid="<?php echo $s_id; ?>">
    Request for labour
    <i class="fas fa-circle-chevron-right"></i>                        
</button>
                  <a type="button" class="btn btn-danger btn-sm btn-icon-text" href="../../../controller/deletesuper.php?id=<?php echo $row['s_id']; ?>">
                              Delete
                              <i class="far fa-trash-can"></i>                          
                            </a>

                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color:orange;">Labour Request Form</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      
    <form method="post" action="../../../controller/reqlabour.php">
    <div class="modal-body">
        <input type="hidden" name="s_id" id="s_id">
        <label>No of labour required</label>
        <input type="number" name="count" required><br>
        <label>No of days required</label>
        <input type="number" name="no" required><br>
        <label>Start Date</label>
        <input type="date" name="start" required>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
        <button class="btn btn-primary" name="submit">Submit Request</button>
    </div>
</form>

    </div>
  </div>
</div>
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
<script>
    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var s_id = button.data('sid') // Extract info from data-* attributes
        var modal = $(this)
        modal.find('#s_id').val(s_id)
    })
</script>


</html>
