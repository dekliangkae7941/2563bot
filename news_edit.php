<!DOCTYPE html>
<html lang="en">

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
          <h1 class="h3 mb-4 text-gray-800">News and Knowledge Base</h1>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
      <!-- Body -->
      <?PHP //require_once './header.php';	?>

		<!-- code  -->
    <?php
      include "connectdb.php";
         $main_id = $_GET['main_id'];
        $sql = "SELECT * FROM bot_news WHERE main_id = ".$main_id; 
         $result = $mysql->query($sql);
         $row = mysqli_fetch_assoc($result);
    ?>
        <div class="container">
        <h4 >Edit News and Knowledge</h4>
        <form action="news_update.php?main_id=<?php echo $main_id; ?>" method="post">
        <div class="form-group">
        <div style="padding-bottom:5px;">
        </div>
          <label for="main_name">Main Name</label>
          <input type="text" class="form-control" id="main_name"  name="main_name" value="<?php echo $row['main_name']; ?>">
        </div>
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title"  name="title" value="<?php echo $row['title']; ?>">
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <input type="text" class="form-control" id="description"  name="description" value="<?php echo $row['description']; ?>">
        </div>
        <div class="form-group">
          <label for="url_link">Url Link</label>
          <input type="text" class="form-control" id="url_link"  name="url_link" value="<?php echo $row['url_link']; ?>">
        </div>
        <div class="form-group">
          <label for="url_image">Url Image</label>
          <input type="text" class="form-control" id="url_image"  name="url_image" value="<?php echo $row['url_image']; ?>">
        </div>
        <button class="btn btn-primary" name="update">Update</button>
      </form>
        <br />
        <br />
          </tbody>
        </table>
        </div>
        </ul>
		<!-- code  -->

      <!-- End Body -->
      <!-- Footer -->
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
