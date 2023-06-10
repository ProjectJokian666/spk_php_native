<?php include_once('Database/database.php');
if ($_SESSION['login']==TRUE) {
  header("Location: Admin/index.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="id">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>KUESIONER</title>

  <!-- Custom fonts for this template-->
  <link href="startbootstrap-sb-admin-2-gh-pages/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="startbootstrap-sb-admin-2-gh-pages/css/sb-admin-2.min.css" rel="stylesheet">
  <!-- <script type="text/javascript" src="Jquery/code.jquery.com_jquery-3.7.0.min.js"></script> -->
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->

    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include('Layouts/topbar.php') ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">KUESIONER</h1>
          <div class="row justify-content-center">

            <?php include('Kuesioner/form_data.php'); ?>
            <?php include('Kuesioner/kues1.php'); ?>
            <?php include('Kuesioner/kues2.php'); ?>
            <?php include('Kuesioner/kues3.php'); ?>
            <?php include('Kuesioner/kues4.php'); ?>
            <?php include('Kuesioner/kues5.php'); ?>
            <?php include('Kuesioner/kues6.php'); ?>
            <?php include('Kuesioner/kues7.php'); ?>
            <?php include('Kuesioner/hasil.php'); ?>

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->

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
  <script src="startbootstrap-sb-admin-2-gh-pages/vendor/jquery/jquery.min.js"></script>
  <script src="startbootstrap-sb-admin-2-gh-pages/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="startbootstrap-sb-admin-2-gh-pages/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="startbootstrap-sb-admin-2-gh-pages/js/sb-admin-2.min.js"></script>

  <!-- Control for Kuesioner -->
  <script src="Kuesioner/control.js"></script>
  <script src="Kuesioner/form_data.js"></script>
  <script src="Kuesioner/kues1.js"></script>
  <script src="Kuesioner/kues2.js"></script>
  <script src="Kuesioner/kues3.js"></script>
  <script src="Kuesioner/kues4.js"></script>
  <script src="Kuesioner/kues5.js"></script>
  <script src="Kuesioner/kues6.js"></script>
  <script src="Kuesioner/kues7.js"></script>
  <script src="Kuesioner/hasil.js"></script>
</body>

</html>