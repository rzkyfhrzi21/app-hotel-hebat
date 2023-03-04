<?php

include 'functions/koneksi.php';

$no = 1;

date_default_timezone_set('Asia/Jakarta');

$tanggal = date('l, d M Y');

$query = mysqli_query($koneksi, "SELECT * FROM pemesanan a, kamar b order by a.id_pemesanan desc limit 1");

while ($invoice = mysqli_fetch_array($query)) {


    $total_harga = $invoice['harga_kamar'] * $invoice['jumlah_kamar'];

?>

    <!-- Theme style -->
    <link rel="stylesheet" href="template1/css/bootstrap.min.css">
    <link rel="icon" href="../bahan/Logo.png">

    <body style="padding: 0 20;">
        <div>
            <section class="content">
                <div class="invoice">
                    <div>
                        <div class="span12">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <h2><strong>No Tagihan </strong>#<?php echo $invoice['id_pemesanan'] ?></h2>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="invoice">
                    <div class="col-sm-4">
                        From
                        <address>
                            <strong>Admin Hotel Hebat</strong><br>
                            Jl. Swadhipa No. 217, Bumisari<br>
                            Kec. Natar, Lampung Selatan,<br>
                            Lampung 35362<br>
                            Phone: (62) 851-7320-0421<br>
                            Email: admin@hotelhebat.com
                        </address>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4">
                        To
                        <address>
                            <strong>
                                <td> <?php echo $invoice['nama_pemesan'] ?> </td>
                            </strong><br>
                            <?php echo $tanggal; ?>,<br>
                            Lampung 35362,<br>
                            Phone: <td> <?php echo $invoice['no_hp'] ?>, </td><br>
                            Email: <?php echo $invoice['email'] ?>
                        </address>
                    </div>
                </div>
                <div class="invoice">
                    <div class="col-xs-12 table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th>Nama</th>
                                    <th>Check In</th>
                                    <th>Check Out</th>
                                    <th>Kamar</th>
                                    <th>Jumlah</th>
                                    <th>Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"> <?php echo $no++ ?> </td>
                                    <td> <?php echo $invoice['nama_pemesan'] ?> </td>
                                    <td> <?php echo $invoice['check_in'] ?> </td>
                                    <td> <?php echo $invoice['check_out'] ?> </td>
                                    <td> <?php echo $invoice['tipe_kamar'] ?> </td>
                                    <td> <?php echo $invoice['jumlah_kamar'] ?> </td>
                                    <td> <?php echo $invoice['harga_kamar'] ?> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                    <td><b>Pesan :</b></td>
                                    <td><?= $invoice['permintaan_khusus']; ?></td>
                                    <td colspan="1"></td>
                                    <td><b>Total :</b></td>
                                    <td><b> <?php echo $total_harga; ?> </b></td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
            </section>
        </div>
        <!-- <script>
            window.print()
        </script> -->
    </body>

<?php } ?>