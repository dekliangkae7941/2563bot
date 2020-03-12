<!DOCTYPE html>
<?php
	include "connectdb.php";
?>

<html lang="en">
<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();

// <script>
// $(document).on("click", ".myEditModal", function () {
//      var id = $(this).data('id');
//      $(".modal-body #id").val( id );
// });
</script>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Line Chatbot - Tables</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>
<style>
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
</style>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">LINE Chatbot Chaokaset</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Tables -->
     <!-- Heading -->
     <div class="sidebar-heading">
     Admin
      </div>
      <!-- Nav Item - News -->
      <li class="nav-item active">
        <a class="nav-link" href="news.php">
          <i class="fas fa-fw fa-folder"></i>
          <span>News & Knowledge Base</span></a>
      </li>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->

          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="container">
            <h1 class="h3 mb-4 text-gray-800">News and Knowledge Base</h1>
            </div>
          </form>

          <!-- Topbar Navbar -->
        </nav>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <!--<h1 class="h3 mb-4 text-gray-800">News and Knowledge Base</h1>-->

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
      <!-- Body -->
      <?PHP require_once './header.php';	?>

    <!-- code  -->
    <div class="container">
    <!-- <div class="row">
    <div class="col-xl-7 col-lg-6"> -->
      <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add News and Knowledge Base</h6>
          </div>
            <div class="card-body" >
            <form action="news_insert.php" method="post"class="needs-validation" novalidate>
              <div class="form-group">
              <label for="main_name">Main Name</label>
              <input type="text" class="form-control" id="main_name"  name="main_name" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please enter a valid Main Name.</div>
              </div>
              <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" id="title"  name="title" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please enter a valid Title.</div>
              </div>
              <div class="form-group">
              <label for="description">Description</label>
              <input type="text" class="form-control" id="description"  name="description" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please enter a valid Description.</div>
              </div>
              <div class="form-group">
              <label for="url_link">Url Link</label>
              <input type="text" class="form-control" id="url_link"  name="url_link" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please enter a valid Url Link.</div>
              </div>
              <div class="form-group">
              <label for="url_image">Url Image</label>
              <input type="text" class="form-control" id="url_image"  name="url_image" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please enter a valid Url Image.</div>
              </div>
              <button type="submit" class="btn btn-primary" name="submit" value="submit">Save</button>
            </form>
          </div>
</div>
</div>
        <div class="container">
         
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">News and Knowledge Base</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                  <tr>
                    <th colspan="1" style="text-align:center">MainName</th>
                    <th colspan="2" style="text-align:center">Title</th>
                    <th colspan="2" style="text-align:center">Description</th>
                    <th colspan="3" style="text-align:center">Proceed</th>
                  </tr>
                  </thead>
                  <tbody>
                
                    
                  <?php
                  include "connectdb.php";
                  $query = "SELECT * FROM bot_news"; 
                  $result = $mysql->query($query); 
                  while($row = mysqli_fetch_assoc($result)){
                    $mainn_id = $row['main_id'];

                    echo $mainn_id;
                    echo "<tr>  
                          <td colspan=\"1\">".$row['main_name']."</td>
                          <td colspan=\"2\">".$row['title']."</td>
                          <td colspan=\"2\">".$row['description']."</td>
                          <td colspan=\"1\"><a  href=\"#modal-news".$row['main_id']."\" >  <button type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\">Preview</button></td>
                          <td colspan=\"1\"><a href=\"news_edit.php?main_id=".$row['main_id']."\"   ><button type=\"button\" class=\"btn btn-warning\">Edit</button></a></td>
                          <td colspan=\"1\"><a href=\"news_delete.php?main_id=".$row['main_id']."\"><button type=\"button\" class=\"btn btn-danger\">Delete</button></a></td>
                          </tr>";
                          echo "/"; 
                  }

                  ?>
                  <!-- Modal -->
                  <?php
                  include "connectdb.php";
                              //$id= $_GET['mainn_id'];
                              //echo "55555555555555555.$id";
                              $query = "SELECT * FROM bot_news"; 
                              $result = $mysql->query($query); 
                              while($row = mysqli_fetch_assoc($result)){
                                $main_id = $row['main_id'];
                                $main_name = $row['main_name'];
                                $title = $row['title'];
                                $description = $row['description'];
                                $url_link = $row['url_link'];
                                $url_image = $row['url_image'];
                              ?>
                  
                  <div class="container">
                  <?php echo $mainn_id; ?>
                  <div class="modal fade" id="modal-news<?php $mainn_id ?>" role="dialog">
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          
                        </div>
                        <div class="modal-body">
                        <div class="card shadow mb-4">
                          <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Preview News and Knowledge Base</h6>
                          </div>
                            <div class="card-body" >
                            
                              
                              <?php
                              if($main_id==$mainn_id){
                                  echo "<img src=\"$url_image\" alt=\"urlim\" style=\"width:50%; \">";
                                  echo "<span style=\"color:blue;font-weight:bold\">blue</span> eyes and my father has <span style=\"color:darkolivegreen;font-weight:bold\">dark green</span>";
                                  echo "$main_id.555$id";
                                }else{
                                  echo "<img src=\"$url_image\" alt=\"urlim\" style=\"width:50%; \">";
                                  echo "<span style=\"color:blue;font-weight:bold\">blue</span> eyes and my father has <span style=\"color:darkolivegreen;font-weight:bold\">dark green</span>";
                                  
                                  echo "$main_id.666$id";
                                }
                                 
                                 }  ?>

                      
                            
                            </div>

                        </div>
                         
                            <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                      
                    </div>
                  </div>



                  </tbody>
                </table>
              </div>
            </div>
          </div>

        
        <!-- /.container-fluid -->

      <!-- End of Main Content -->

      <!-- End Body -->
      <!-- Footer -->
      
      
    </div>
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Chaokaset &copy; NECTEC</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->
  </div>
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
