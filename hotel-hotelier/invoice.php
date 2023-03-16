<?php 

include 'functions/koneksi.php';

$sql_invoice    = mysqli_query($koneksi, "SELECT * from pemesanan order by id_pemesanan desc limit 1");
$invoice        = mysqli_fetch_array($sql_invoice);
$tipe_kamar     = $invoice['nama_kamar'];

$sql_kamar      = mysqli_query($koneksi, "SELECT * from kamar where nama_kamar = '$tipe_kamar'");
$kamar          = mysqli_fetch_array($sql_kamar);
$harga_kamar    = $kamar['harga_kamar']; 

$total_hargaPemesanan   = $invoice['jumlah_kamar'] * $harga_kamar;

 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Invoice #<?= $invoice['id_pemesanan']; ?></title>

    <link rel="icon" href="img/logo.png">

    <link rel="stylesheet" type="text/css" href="template1/css/bootstrap.min.css">

</head>
<body style="padding: 0 20;">
    <div>
        <section class="content">
            <div class="row">
                <div>
                    <div class="span12">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>
                                        <h2><strong>Invoice </strong>#<?= $invoice['id_pemesanan']; ?></h2>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                    From
                    <address>
                        <strong>Admin Hotel Hebat</strong><br>
                        Jl. Swadhipa No. 217, Bumisari<br>
                        Kec. Natar, Lampung Selatan<br>
                        Lampung 35362<br>
                        Telp: (62) 851 7320 0421<br>
                        Email: rizkyfahrezi@xiirpl.com
                    </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                    To
                    <address>
                        <strong><?= $invoice['nama_pemesan']; ?></strong><br>
                        Telp: <?= $invoice['no_hp']; ?><br>
                        Email:<?= $invoice['email']; ?>
                    </address>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No Pemesanan</th>
                                <th>Tgl Check In</th>
                                <th>Tgl Check Out</th>
                                <th>Tipe Kamar</th>
                                <th>Jumlah Kamar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center"><?= $invoice['id_pemesanan']; ?></td>
                                <td><?= $invoice['check_in']; ?></td>
                                <td><?= $invoice['check_out']; ?></td>
                                <td><?= $invoice['nama_kamar']; ?></td>
                                <td><?= $invoice['jumlah_kamar']; ?></td>
                            </tr>
                            <tr>
                                <td colspan="3"></td>
                                <td><b>Total Biaya</b></td>
                                <td><b><?= $total_hargaPemesanan; ?></b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
        </section>
    </div>

<!-- Print -->
<script>
    window.print()
</script>
</body>
</html>