<div class="card">
    <div class="card-header">
        <div class="d-sm-flex align-items-center justify-content-between">
            <h3>Data Fasilitas</h3>
            <button type="button" class="btn btn-primary col-md-2" data-toggle="modal" data-target="#modaltambah">
                Tambah Fasilitas
            </button>
        </div>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead class="text-center bg-info">
                <tr>
                    <th class="text-center">No</th>
                    <th>Nama Fasilitas</th>
                    <th>Keterangan Fasilitas</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php

                include '../functions/koneksi.php';

                $no = 1;

                $sql_fasilitas = mysqli_query($koneksi, "SELECT * from fasilitas");

                while ($fasilitas = mysqli_fetch_array($sql_fasilitas)) :

                ?>
                    <tr>
                        <td class="text-center"><?= $no++; ?></td>
                        <td><?= $fasilitas['nama_fasilitas']; ?></td>
                        <td><?= $fasilitas['ket_fasilitas']; ?></td>
                        <td>
                            <img src="../img/fasilitas/<?= $fasilitas['gambar_fasilitas']; ?>" width="150">
                        </td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                    Pilih
                                </button>
                                <div class="dropdown-menu" role="menu">
                                    <button type="button" class="dropdown-item" data-toggle="modal" data-target="#modalubah<?= $fasilitas['id_fasilitas']; ?>">
                                        Ubah
                                    </button>
                                    <button type="button" class="dropdown-item" data-toggle="modal" data-target="#modalhapus<?= $fasilitas['id_fasilitas']; ?>">
                                        Hapus
                                    </button>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <!-- Modal Hapus -->
                    <div class="modal fade" id="modalhapus<?= $fasilitas['id_fasilitas']; ?>">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Hapus Fasilitas</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="../functions/fasilitas.php" method="post">
                                    <div class="modal-body">
                                        <p>Apakah anda yakin ingin menghapus data <?= $fasilitas['nama_fasilitas']; ?> ?</p>
                                    </div>
                                    <input type="hidden" name="id_fasilitas" value="<?= $fasilitas['id_fasilitas']; ?>">
                                    <input type="hidden" name="gambar_lama" value="<?= $fasilitas['gambar_fasilitas']; ?>">
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                        <button type="submit" name="hapus_fasilitas" class="btn btn-danger">Hapus Fasilitas</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>

                    <!-- Modal Ubah -->
                    <div class="modal fade" id="modalubah<?= $fasilitas['id_fasilitas']; ?>">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Ubah Fasilitas</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="../functions/fasilitas.php" method="post" autocomplete="off" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="nama_fasilitas">Nama Fasilitas</label>
                                            <input type="text" name="nama_fasilitas" id="nama_fasilitas" class="form-control" placeholder="Masukkan Nama Fasilitas" value="<?= $fasilitas['nama_fasilitas']; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="ket_fasilitas">Keterangan Fasilitas</label>
                                            <textarea name="ket_fasilitas" class="form-control" placeholder="Masukkan Keterangan Fasilitas" id="ket_fasilitas" rows="3" required><?= $fasilitas['ket_fasilitas']; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Gambar Fasilitas</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="gambar_fasilitas" class="custom-file-input" id="exampleInputFile">
                                                    <label class="custom-file-label" for="exampleInputFile">Pilih Gambar</label>
                                                </div>
                                            </div>
                                            <img src="../img/fasilitas/<?= $fasilitas['gambar_fasilitas']; ?>" width="150" class="mt-3">
                                        </div>
                                        <input type="hidden" name="id_fasilitas" value="<?= $fasilitas['id_fasilitas']; ?>">
                                        <input type="hidden" name="gambar_lama" value="<?= $fasilitas['gambar_fasilitas']; ?>">
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                        <button type="submit" name="ubah_fasilitas" class="btn btn-primary">Simpan Fasilitas</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
    </div>
<?php endwhile ?>
</tbody>
<tfoot class="text-center">
    <tr>
        <th>No</th>
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

<!-- Modal Tambah -->
<div class="modal fade" id="modaltambah">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Fasilitas</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../functions/fasilitas.php" method="post" autocomplete="off" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama_fasilitas">Nama Fasilitas</label>
                        <input type="text" name="nama_fasilitas" id="nama_fasilitas" class="form-control" placeholder="Masukkan Nama Fasilitas" required>
                    </div>
                    <div class="form-group">
                        <label for="ket_fasilitas">Keterangan Fasilitas</label>
                        <textarea name="ket_fasilitas" class="form-control" placeholder="Masukkan Keterangan Fasilitas" id="ket_fasilitas" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Gambar Fasilitas</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="gambar_fasilitas" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Pilih Gambar</label>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" name="tambah_fasilitas" class="btn btn-primary">Tambah Fasilitas</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>