<div class="card">
    <div class="card-header">
        <div class="d-sm-flex align-items-center justify-content-between">
            <h3>Data Reservasi</h3>
        </div>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead class="text-center">
                <tr>
                    <th>No</th>
                    <th>Nama Pemesan</th>
                    <th>No Hp</th>
                    <th>Email</th>
                    <th>Nama Tamu</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                    <th>Tipe Kamar</th>
                    <th>Jumlah Kamar</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php

                include '../functions/koneksi.php';

                $no = 1;

                $sql_pemesanan = mysqli_query($koneksi, "SELECT * from pemesanan order by id_pemesanan desc");

                while ($pemesanan = mysqli_fetch_array($sql_pemesanan)) :

                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $pemesanan['nama_pemesan']; ?></td>
                        <td><?= $pemesanan['no_hp']; ?></td>
                        <td><?= $pemesanan['email']; ?></td>
                        <td><?= $pemesanan['nama_tamu']; ?></td>
                        <td><?= $pemesanan['check_in']; ?></td>
                        <td><?= $pemesanan['check_out']; ?></td>
                        <td><?= $pemesanan['tipe_kamar']; ?></td>
                        <td><?= $pemesanan['jumlah_kamar']; ?></td>
                        <td>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalhapus<?= $pemesanan['id_pemesanan']; ?>">
                                Hapus
                            </button>
                        </td>
                    </tr>

                    <!-- Modal Hapus -->
                    <div class="modal fade" id="modalhapus<?= $pemesanan['id_pemesanan']; ?>">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Hapus Reservasi</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="../functions/reservasi.php" method="post">
                                    <div class="modal-body">
                                        <p>Apakah anda yakin ingin menghapus reservasi dari <?= $pemesanan['nama_pemesan']; ?> ?</p>
                                    </div>
                                    <input type="hidden" name="id_pemesanan" value="<?= $pemesanan['id_pemesanan']; ?>">
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                        <button type="submit" name="hapus_reservasi" class="btn btn-danger">Hapus Reservasi</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                <?php endwhile ?>
            </tbody>
            <tfoot class="text-center">
                <tr>
                    <th>No</th>
                    <th>Nama Pemesan</th>
                    <th>No Hp</th>
                    <th>Email</th>
                    <th>Nama Tamu</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                    <th>Tipe Kamar</th>
                    <th>Jumlah Kamar</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>