<?php


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Pemesanan Kamar</title>

    <link rel="shortcut icon" type="image/x-icon" href="bahan/logo.png">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="template2/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="template2/dist/css/adminlte.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="template2/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="template2/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="template2/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>

<body style="background-color: cadetblue;">
    <div class="container">
        <div class="card mt-4 mb-4">
            <div class="card-header mt-3">
                <h2 class="text-center">Invoice Pemesanan Kamar</h2>
                <div class="d-sm-flex justify-content-between align-items-right">
                    <h4>Hotel Hebat</h4>
                    <h4>Dibuat : XII RPL</h4>
                </div>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped" style="width: 100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pemesan</th>
                            <th>Nomor Hp</th>
                            <th>Email</th>
                            <th>Nama Tamu</th>
                            <th>Check In</th>
                            <th>Check Out</th>
                            <th>Jumlah Kamar</th>
                            <th>Tipe Kamar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        include 'koneksi.php';

                        $no = 1;

                        $query = mysqli_query($koneksi, "SELECT * FROM pemesanan order by id_pemesanan desc limit 1");

                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <td> <?php echo $no++ ?> </td>
                                <td> <?php echo $row['nama_pemesan'] ?> </td>
                                <td> <?php echo $row['no_hp'] ?> </td>
                                <td> <?php echo $row['email'] ?> </td>
                                <td> <?php echo $row['nama_tamu'] ?> </td>
                                <td> <?php echo $row['check_in'] ?> </td>
                                <td> <?php echo $row['check_out'] ?> </td>
                                <td> <?php echo $row['jumlah_kamar'] ?> </td>
                                <td> <?php echo $row['tipe_kamar'] ?> </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</body>

<!-- jQuery -->
<script src="template2/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="template2/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="template2/dist/js/adminlte.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="template2/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="template2/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="template2/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="template2/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="template2/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="template2/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="template2/plugins/jszip/jszip.min.js"></script>
<script src="template2/plugins/pdfmake/pdfmake.min.js"></script>
<script src="template2/plugins/pdfmake/vfs_fonts.js"></script>
<script src="template2/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="template2/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="template2/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ['copy',
                {
                    extend: 'excelHtml5',
                    autoFilter: true,
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'pdfHtml5',
                    messageTop: 'Berikut Data Siswa Pada Aplikasi Absensi RFID.',
                    orientation: 'portrait',
                    pageSize: 'LEGAL',
                    download: 'open',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'print',
                    messageTop: 'Berikut Data Siswa Pada Aplikasi Absensi RFID.',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                'colvis'
            ],
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

</html>