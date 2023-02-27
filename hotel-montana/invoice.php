<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

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
                                        <h2><strong>No Tagihan </strong># </h2>
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
                        <strong>Admin Sahretech</strong><br>
                        Jl. Sudirman No.3012, Palembang<br>
                        Kec. Palembang Raya, Palembang,<br>
                        Sumatera selatan 30961<br>
                        Phone: (804) 123-5432<br>
                        Email: info@sahretech.com
                    </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                    To
                    <address>
                        <strong></strong><br>
                        Jl. Sudirman No. 3012, Palembang<br>
                        Kec. Palembang Raya, Palembang,<br>
                        Sumatera selatan 30961<br>
                        Phone: (555) 539-1037<br>
                        Email: nbelputra437@gmail.com
                    </address>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 table-responsive">
                    <table class="table table-striped">
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
                            <tr>
                                <td colspan="3"></td>
                                <td><b>Total Biaya</b></td>
                                <td><b></b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
        </section>
    </div>
</body>
<script>
    window.print()
</script>