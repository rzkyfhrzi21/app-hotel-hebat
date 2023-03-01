<?php

include 'koneksi.php';

$no = 1;

date_default_timezone_set('Asia/Jakarta');

$tanggal = date('l, d M Y');

$query = mysqli_query($koneksi, "SELECT * FROM pemesanan order by id_pemesanan desc limit 1");

while ($row = mysqli_fetch_array($query)) {

?>

    <!-- Theme style -->
    <link rel="stylesheet" href="template1/css/bootstrap.min.css">

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
                                            <h2><strong>No Tagihan </strong>#<?php echo $row['id_pemesanan'] ?></h2>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
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
                                <td> <?php echo $row['nama_pemesan'] ?> </td>
                            </strong><br>
                            <?php echo $tanggal; ?>,<br>
                            Lampung 35362,<br>
                            Phone: <td> <?php echo $row['no_hp'] ?>, </td><br>
                            Email: <?php echo $row['email'] ?>
                        </address>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th>Nama Tamu</th>
                                    <th>Tanggal Check In</th>
                                    <th>Tanggal Check Out</th>
                                    <th>Tipe Kamar</th>
                                    <th>Jumlah Kamar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"> <?php echo $no++ ?> </td>
                                    <td> <?php echo $row['nama_tamu'] ?> </td>
                                    <td> <?php echo $row['check_in'] ?> </td>
                                    <td> <?php echo $row['check_out'] ?> </td>
                                    <td> <?php echo $row['tipe_kamar'] ?> </td>
                                    <td> <?php echo $row['jumlah_kamar'] ?> </td>
                                </tr>
                                <tr>
                                    <td colspan="4"></td>
                                    <td><b>Total Kamar</b></td>
                                    <td><b> <?php echo $row['jumlah_kamar'] ?> </b></td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
            </section>
        </div>
        <script>
            window.print()
        </script>
    </body>

<?php } ?>