<div class="card">
    <div class="card-header">
        <div class="d-sm-flex align-items-center justify-content-between">
            <h3>Data Kamar</h3>
            <button type="button" class="btn btn-primary col-md-2" data-toggle="modal" data-target="#modaltambah">
                Tambah Kamar
            </button>
        </div>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead class="text-center bg-info">
                <tr>
                    <th class="text-center">No</th>
                    <th>Kamar</th>
                    <th>Harga</th>
                    <th>Fasilitas</th>
                    <th>Ukuran</th>
                    <th>Kasur</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php

                include '../functions/koneksi.php';

                $no = 1;

                $sql_kamar = mysqli_query($koneksi, "SELECT * from kamar");

                while ($kamar = mysqli_fetch_array($sql_kamar)) :

                ?>
                    <tr>
                        <td class="text-center"><?= $no++; ?></td>
                        <td><?= $kamar['nama_kamar']; ?></td>
                        <td><sup>RP</sup><?= $kamar['harga_kamar']; ?></td>
                        <td><?= $kamar['fasilitas_kamar']; ?></td>
                        <td><?= $kamar['ukuran_kamar']; ?> m<sup>2</sup></td>
                        <td class="text-center"><?= $kamar['jumlah_kasur']; ?></td>
                        <td>
                            <img src="../img/kamar/<?= $kamar['gambar_kamar']; ?>" width="150">
                        </td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                    Pilih
                                </button>
                                <div class="dropdown-menu" role="menu">
                                    <button type="button" class="dropdown-item" data-toggle="modal" data-target="#modalubah<?= $kamar['id_kamar']; ?>">
                                        Ubah
                                    </button>
                                    <button type="button" class="dropdown-item" data-toggle="modal" data-target="#modalhapus<?= $kamar['id_kamar']; ?>">
                                        Hapus
                                    </button>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <!-- Modal Hapus -->
                    <div class="modal fade" id="modalhapus<?= $kamar['id_kamar']; ?>">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Hapus Kamar</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="../functions/kamar.php" method="post">
                                    <div class="modal-body">
                                        <p>Apakah anda yakin ingin menghapus data <?= $kamar['nama_kamar']; ?> ?</p>
                                    </div>
                                    <input type="hidden" name="id_kamar" value="<?= $kamar['id_kamar']; ?>">
                                    <input type="hidden" name="gambar_lama" value="<?= $kamar['gambar_kamar']; ?>">
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                        <button type="submit" name="hapus_kamar" class="btn btn-danger">Hapus Kamar</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>

                    <!-- Modal Ubah -->
                    <div class="modal fade" id="modalubah<?= $kamar['id_kamar']; ?>">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Ubah Kamar</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="../functions/kamar.php" method="post" autocomplete="off" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="nama_kamar">Nama Kamar</label>
                                            <input type="text" name="nama_kamar" id="nama_kamar" class="form-control" placeholder="Masukkan Nama Kamar" value="<?= $kamar['nama_kamar']; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="harga_kamar">Harga Kamar</label>
                                            <input type="number" name="harga_kamar" id="harga_kamar" class="form-control" value="<?= $kamar['harga_kamar']; ?>" placeholder="Masukkan Harga Kamar" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="fasilitas_kamar">Fasilitas Kamar</label>
                                            <textarea name="fasilitas_kamar" class="form-control" placeholder="Masukkan Fasilitas Kamar" id="fasilitas_kamar" rows="3" required><?= $kamar['fasilitas_kamar']; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="ukuran_kamar">Ukuran Kamar</label>
                                            <input type="number" name="ukuran_kamar" id="ukuran_kamar" class="form-control" value="<?= $kamar['ukuran_kamar']; ?>" placeholder="Masukkan Ukuran Kamar" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="jumlah_kasur">Jumlah Kasur</label>
                                            <input type="number" name="jumlah_kasur" class="form-control" id="jumlah_kasur" value="<?= $kamar['jumlah_kasur']; ?>" placeholder="Masukkan Jumlah Kasur" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Gambar Kamar</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="gambar_kamar" class="custom-file-input" id="exampleInputFile">
                                                    <label class="custom-file-label" for="exampleInputFile">Pilih Gambar</label>
                                                </div>
                                            </div>
                                            <img src="../img/kamar/<?= $kamar['gambar_kamar']; ?>" width="150" class="mt-3">
                                        </div>
                                        <input type="hidden" name="id_kamar" value="<?= $kamar['id_kamar']; ?>">
                                        <input type="hidden" name="gambar_lama" value="<?= $kamar['gambar_kamar']; ?>">
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                    <button type="submit" name="ubah_kamar" class="btn btn-primary">Simpan Kamar</button>
                                </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
    </div>
<?php endwhile ?>
</tbody>
<tfoot class="text-center">
    <tr>
        <th class="text-center">No</th>
        <th>Kamar</th>
        <th>Harga</th>
        <th>Fasilitas</th>
        <th>Ukuran</th>
        <th>Kasur</th>
        <th>Gambar</th>
        <th>Aksi</th>
    </tr>
</tfoot>
</table>
</div>
<!-- /.card-body -->
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="modaltambah">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Kamar</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="../functions/kamar.php" method="post" autocomplete="off" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama_kamar">Nama Kamar</label>
                        <input type="text" name="nama_kamar" id="nama_kamar" class="form-control" placeholder="Masukkan Nama Kamar" required>
                    </div>
                    <div class="form-group">
                        <label for="harga_kamar">Harga Kamar</label>
                        <input type="number" name="harga_kamar" id="harga_kamar" class="form-control" placeholder="Masukkan Harga Kamar" required>
                    </div>
                    <div class="form-group">
                        <label for="fasilitas_kamar">Fasilitas Kamar</label>
                        <textarea name="fasilitas_kamar" class="form-control" placeholder="Masukkan Fasilitas Kamar" id="fasilitas_kamar" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="ukuran_kamar">Ukuran Kamar</label>
                        <input type="number" name="ukuran_kamar" id="ukuran_kamar" class="form-control" placeholder="Masukkan Ukuran Kamar" required>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_kasur">Jumlah Kasur</label>
                        <input type="number" name="jumlah_kasur" class="form-control" id="jumlah_kasur" placeholder="Masukkan Jumlah Kasur" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Gambar Kamar</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="gambar_kamar" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Pilih Gambar</label>
                            </div>

                        </div>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="submit" name="tambah_kamar" class="btn btn-primary">Tambah Kamar</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>