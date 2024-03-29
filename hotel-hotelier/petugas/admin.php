<?php

session_start();

include '../functions/koneksi.php';

$sesi_nama  = $_SESSION['nama_petugas'];
$sesi_level = $_SESSION['level'];

if ($_SESSION['level'] !== 'admin') {
  header('Location: ../auth/login.php');
}

if (@$_GET['page']) {
  $page = $_GET['page'];
} else {
  $page = 'home';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin - Hotel Hebat</title>

  <link rel="icon" href="../img/logo.png">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../template2/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../template2/dist/css/adminlte.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../template2/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../template2/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../template2/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="admin.php" class="nav-link">Home</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item d-none d-sm-inline-block">
          <a class="nav-link">
            <h5>Pukul : <b><?= $pukul; ?></b></h5>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="../index.php" class="brand-link">
        <img src="../template2/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Hotel Hebat</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../template2/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?= $sesi_nama; ?></a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="?page=kamar" class="nav-link">
                <i class="nav-icon fas fa-bed"></i>
                <p>
                  Kamar Hotel
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="?page=fasilitas" class="nav-link">
                <i class="nav-icon fas fa-hotel"></i>
                <p>
                  Fasilitas Hotel
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="?page=kontak" class="nav-link">
                <i class="nav-icon far fa-envelope"></i>
                <p>
                  Kontak Pesan
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../auth/logout.php" class="nav-link">
                <i class="nav-icon fas fa-power-off"></i>
                <p>
                  Logout
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 style="text-transform: capitalize;">Selamat Datang <?= $sesi_nama; ?></h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="admin.php">Admin</a></li>
                <li class="breadcrumb-item active" style="text-transform: capitalize;"><?= $page; ?></li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <?php

        if (@$_GET['page']) {
          switch ($_GET['page']) {
            case 'kamar':
              include 'page/admin_kamar.php';
              break;
            case 'fasilitas':
              include 'page/admin_fasilitas.php';
              break;
            case 'kontak':
              include 'page/admin_kontak.php';
              break;
          }
        } else {
          include 'page/petugas_home.php';
        }

        ?>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> UKK RPL 2023
      </div>
      <strong>Copyright &copy; 2023 <a href="https://linktr.ee/rzkyfhrzi21" target="_blank">Rizky Fahrezi</a>.</strong> Rekayasa Perangkat Lunak
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../template2/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../template2/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../template2/dist/js/adminlte.min.js"></script>
  <!-- bs-custom-file-input -->
  <script src="../template2/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
  <script>
    $(function() {
      bsCustomFileInput.init();
    });
  </script>
  <!-- DataTables  & Plugins -->
  <script src="../template2/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="../template2/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="../template2/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="../template2/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="../template2/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="../template2/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="../template2/plugins/jszip/jszip.min.js"></script>
  <script src="../template2/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="../template2/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="../template2/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="../template2/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="../template2/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
</body>

</html>