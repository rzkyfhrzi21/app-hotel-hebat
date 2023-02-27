<?php

session_start();
date_default_timezone_set('Asia/Jakarta');

$sesi_nama  = $_SESSION['nama'];
$sesi_level = $_SESSION['level'];

if ($_SESSION['level'] !== 'resepsionis') {
    header('location: ../login.php');
}

if (isset($_GET['page'])) {
    $page   = $_GET['page'];
} else {
    $page   = 'home';
}
$pukul  = date('h:i A');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel Hebat | Resepsionis</title>

    <link rel="icon" href="../bahan/Logo.png">

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
                    <a href="resepsionis.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../functions/logout.php" class="nav-link">Logout</a>
                </li>

            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">
                        <h5>Pukul <?= $pukul; ?></h5>
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
                <span class="brand-text font-weight-light">Resepsionis</span>
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
                        <input class="form-control form-control-sidebar" type="search" placeholder="Cari" aria-label="Search">
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
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="?page=reservasi" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Reservasi
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../functions/logout.php" class="nav-link">
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
                            <h1>Resepsionis Hotel Hebat</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">
                                    <p class="text-primary">Resepsionis</p>
                                </li>
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
                    switch (@$_GET['page']) {
                        case 'reservasi':
                            include 'resepsionis/reservasi.php';
                            break;
                    }
                } else {
                    include 'resepsionis/home.php';
                }
                ?>



            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>UKK RPL 2023</b>
            </div>
            <strong>Copyright &copy; 2023 <a href="https://linktr.ee/rzkyfhrzi21" target="_blank">Rizky Fahrezi</a>.</strong> XII RPL
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../template2/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../template2/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../template2/dist/js/adminlte.min.js"></script>
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
    <!-- Page specific script -->
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