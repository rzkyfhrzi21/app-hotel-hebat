<?php

date_default_timezone_set('Asia/Jakarta');

$tanggal = date('d/m/Y');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Hebat</title>

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

    <!-- Plugin Print -->
    <link rel="stylesheet" type="text/css" href="print/print.css">
    <style>
        /* Hide Print button */
        @media print {
            .print-button {
                display: none;
            }
        }
    </style>
</head>

<body style="background-color: #777;">
    <div class="container">
        <div class="card mt-4 mb-4">
            <div class="card-header mt-3">
                <h2 class="text-center">Invoice Pemesanan Kamar</h2>
                <div class="d-sm-flex justify-content-between align-items-right">
                    <h4>Tanggal : <?= $tanggal; ?> </h4>
                    <h4>Dibuat : XII RPL </h4>

                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered" style="width: 100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pemesan</th>
                            <th>Nomor Hp</th>
                            <th>Email</th>
                            <th>Nama Tamu</th>
                            <th>Check In</th>
                            <th>Check Out</th>
                            <th>Tipe Kamar</th>
                            <th>Jumlah Kamar</th>
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
                                <td> <?php echo $row['tipe_kamar'] ?> </td>
                                <td> <?php echo $row['jumlah_kamar'] ?> </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6"></td>
                            <td colspan="3">YA</td>
                        </tr>
                    </tfoot>
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

<!-- Print -->
<script src="print/print.js"></script>
<script>
    const printButton = document.querySelector('.print-button');

    // Print PDF.
    printButton.addEventListener('click', () => {
        window.print();
    });
</script>

</html>