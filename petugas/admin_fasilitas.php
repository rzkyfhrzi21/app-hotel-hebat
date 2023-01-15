<?php
session_start();

if (!isset($_SESSION['level']) == 'admin') {
    echo "<script>
    alert('Maaf, Anda harus login sebagai admin terlebih dahulu!');
    location.replace('../login.php');
    </script>";
}

$nama_admin = $_SESSION['nama'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel Hebat | Admin</title>

    <link rel="shortcut icon" type="image/x-icon" href="../bahan/logo.png">

    <!-- DataTables -->
    <link rel="stylesheet" href="../template2/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../template2/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../template2/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../template2/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../template2/dist/css/adminlte.min.css">
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
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../logout.php" class="nav-link">Logout</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
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
            <a href="admin.php" class="brand-link">
                <img src="../template2/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Admin</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../template2/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?= $nama_admin; ?></a>
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
                            <a href="admin_kamar.php" class="nav-link">
                                <i class="nav-icon fas fa-bed"></i>
                                <p>
                                    Kamar Hotel
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="admin_fasilitas.php" class="nav-link active">
                                <i class="nav-icon fas fa-hotel"></i>
                                <p>
                                    Fasilitas Hotel
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../logout.php" class="nav-link">
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
                            <h1>Halaman Admin</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <div class="card">
                    <div class="card-header">
                        <div class="d-sm-flex justify-content-between align-items-right">
                            <h3>Data Fasilitas</h3>
                            <button class="btn btn-primary col-md-2" data-toggle="modal" data-target="#modaltambahkamar">Tambah</button>
                        </div>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead class="text-center">
                                <tr>
                                    <th>#</th>
                                    <th>Nama Fasilitas</th>
                                    <th>Keterangan Fasilitas</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php

                                include '../koneksi.php';
                                $no = 1;

                                $sql_fasilitas = mysqli_query($koneksi, "SELECT * from tbl_fasilitas order by id_fasilitas desc");

                                while ($fasilitas = mysqli_fetch_array($sql_fasilitas)) :

                                ?>
                                    <tr class="text-center">
                                        <td><?= $no++; ?></td>
                                        <td><?= $fasilitas['nama_fasilitas']; ?></td>
                                        <td><?= $fasilitas['ket_fasilitas']; ?></td>
                                        <td><img src="../img/<?= $fasilitas['gambar_fasilitas']; ?>" width="100" alt=""></td>
                                        <td>
                                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modaleditfasilitas<?= $fasilitas['id_fasilitas']; ?>">
                                                Edit
                                            </button>
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalhapusfasilitas<?= $fasilitas['id_fasilitas']; ?>">
                                                Hapus
                                            </button>

                                        </td>
                                    </tr>
                                    <div class="modal fade" id="modaleditfasilitas<?= $fasilitas['id_fasilitas']; ?>">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Edit Fasilitas</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="functions.php" method="post" enctype="multipart/form-data">
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="nama_fasilitas">Nama Fasilitas </label>
                                                            <input type="text" name="nama_fasilitas" class="form-control" value="<?= $fasilitas['nama_fasilitas']; ?>" id="nama_fasilitas" placeholder="" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="ket_fasilitas">Keterangan Fasilitas </label>
                                                            <textarea name="ket_fasilitas" id="ket_fasilitas" rows="5" class="form-control" required><?= $fasilitas['ket_fasilitas']; ?></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="gambar">Gambar Fasilitas</label>
                                                            <div class="input-group">
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                                                    <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <input type="hidden" name="gambar_lama" value="<?= $fasilitas['gambar_fasilitas']; ?>">
                                                    <input type="hidden" name="id_fasilitas" value="<?= $fasilitas['id_fasilitas']; ?>">

                                                    <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-primary" name="btn_editfasilitas">Ubah</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <div class="modal fade" id="modalhapusfasilitas<?= $fasilitas['id_fasilitas']; ?>">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Hapus Fasilitas</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="functions.php" method="post">
                                                    <div class="modal-body">
                                                        <p>Apakah anda yakin ingin menghapus <?= $fasilitas['nama_fasilitas']; ?></p>
                                                    </div>
                                                    <input type="hidden" name="gambar_fasilitas" value="<?= $fasilitas['gambar_fasilitas']; ?>">
                                                    <input type="hidden" name="id_fasilitas" value="<?= $fasilitas['id_fasilitas']; ?>">

                                                    <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                                        <button type="submit" name="btn_hapusfasilitas" class="btn btn-primary">Hapus</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                            </tbody>
                        <?php endwhile ?>
                        <tfoot class="text-center">
                            <tr>
                                <th>#</th>
                                <th>Nama Fasilitas</th>
                                <th>Keterangan Fasilitas</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <div class="modal fade" id="modaltambahkamar">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Tambah Fasilitas</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="functions.php" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="nama_fasilitas">Nama Fasilitas </label>
                                <input type="text" name="nama_fasilitas" class="form-control" id="nama_fasilitas" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label for="ket_fasilitas">Keterangan Fasilitas </label>
                                <textarea name="ket_fasilitas" id="ket_fasilitas" rows="5" class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="gambar">Gambar Fasilitas</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                        <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary" name="btn_tambahfasilitas">Tambah</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 1.0
            </div>
            <strong>Copyright &copy; 2023 <a href="#">Hotel Hebat</a>.</strong> by Rizky Fahrezi.
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
    <!-- AdminLTE App -->
    <script src="../template2/dist/js/adminlte.min.js"></script><!-- bs-custom-file-input -->
    <script src="../template2/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
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
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
</body>

</html>