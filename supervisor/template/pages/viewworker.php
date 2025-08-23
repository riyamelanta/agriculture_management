<?php
include '../../../config.php';
$ad=new Admin();
if(!isset($_SESSION['sp_id'])){
  $ad->redirect('../../../register/sp_login');
}
$s_id=$_SESSION['sp_id'];
$st=$ad->ret("SELECT * FROM `labour` WHERE `s_id`='$s_id'");
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
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css"
  rel="stylesheet"
/>
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
                  <h4 class="card-title">Labour Details</h4>
                  <p class="card-description">
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Labour
                          </th>
                          <th>
                            Name
                          </th>
                          <th>
                             Age
                          </th>
                          <th>
                            Gender
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
                          while($row=$st->fetch(PDO::FETCH_ASSOC)){
                            ?>

                                <tr>
                          <td class="py-1">
                            <img src="../../../controller/<?php echo $row['l_image']; ?>" alt="image"/>
                          </td>
                          <td>
                          <?php echo $row['l_name']; ?>
                          </td>
                           <td>
                          <?php echo $row['l_age']; ?>
                          </td>
                          <td>
                            <?php echo $row['l_gender']; ?>
                          </td>
                          <td>
                            <?php echo $row['l_address']; ?>
                          </td>
                          <td>
                           <?php echo $row['l_phone']; ?>
                          </td>
                            <td>
                        <a type="button" class="btn btn-danger btn-floating" href="../../../controller/delworker.php?did=<?php echo $row['l_id']; ?>"  title="delete">
  <i class="fas fa-trash"></i>
</a>
    <a type="button" class="btn btn-info btn-floating" href="editworker.php?did=<?php echo $row['l_id']; ?>" title="edit">
 <i class="fas fa-pen-to-square"></i>
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
  <!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"
></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>
