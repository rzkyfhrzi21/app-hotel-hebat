<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<body style="padding: 0 20;">
    <div>
        <?php
        include "database.php";
        $select = mysqli_query($koneksi, 'select * from tagihan where notagihan = ' . $_GET['id']);
        $data = mysqli_fetch_array($select);
        ?>
        <section class="content">
            <div class="row">
                <div>
                    <div class="span12">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>
                                        <h2><strong>No Tagihan </strong>#<?php echo $data['notagihan']; ?> </h2>
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
                        <strong>Admin Sahretech</strong><br>
                        Jl. Sudirman No.3012, Palembang<br>
                        Kec. Palembang Raya, Palembang,<br>
                        Sumatera selatan 30961<br>
                        Phone: (804) 123-5432<br>
                        Email: info@sahretech.com
                    </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                    To
                    <address>
                        <strong><?php echo $data['pelanggan']; ?></strong><br>
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
                                <th>No Tagihan</th>
                                <th>Tgl Tagihan</th>
                                <th>Layanan</th>
                                <th>Tarif</th>
                                <th>Diskon</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $data['notagihan']; ?></td>
                                <td><?php echo date('d-m-Y', strtotime($data['tgltagihan'])); ?></td>
                                <td><?php echo $data['layanan']; ?></td>
                                <td><?php echo $data['tarif']; ?></td>
                                <td><?php echo $data['diskon'] . '%'; ?></td>
                            </tr>
                            <tr>
                                <td colspan="3"></td>
                                <td><b>Total Biaya</b></td>
                                <td><b><?php echo "Rp " . $data['total']; ?></b></td>
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