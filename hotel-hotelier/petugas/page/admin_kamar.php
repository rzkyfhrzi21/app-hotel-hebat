<?php 

if ($_SESSION['level'] !== 'admin') {
  return;
}

 ?>

            <div class="card">
              <div class="card-header">
                <div class="d-sm-flex justify-content-between align-items-center">
                   <h4>Kamar Hotel</h4>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah">
                    Tambah Kamar
                  </button>

                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead class="bg-info">
                  <tr>
                    <th class="text-center">No</th>
                    <th>Nama Kamar</th>
                    <th>Harga <sup>/Malam</sup></th>
                    <th>Keterangan</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 

                    $no = 1;

                    include '../functions/koneksi.php';

                    $sql_kamar = mysqli_query($koneksi, "SELECT * from kamar");

                    while ($kamar = mysqli_fetch_array($sql_kamar)) :

                     ?>
                      <tr>
                        <td class="text-center"><?= $no++; ?></td>
                        <td><?= $kamar['nama_kamar']; ?></td>
                        <td>Rp <?= $kamar['harga_kamar']; ?></td>
                        <td><?= $kamar['ket_kamar']; ?></td>
                        <td>
                          <img src="../img/kamar/<?= $kamar['gambar_kamar']; ?>" width="150" alt="gambar error" title="<?= $kamar['nama_kamar']; ?>">
                        </td>
                        <td>
                          <div class="btn-group">
                            <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                              Detail
                            </button>
                            <div class="dropdown-menu" role="menu">
                              <button type="button" class="dropdown-item" data-toggle="modal" data-target="#modal-ubah<?= $kamar['id_kamar']; ?>">
                                Ubah
                              </button>
                              <button type="button" class="dropdown-item" data-toggle="modal" data-target="#modal-hapus<?= $kamar['id_kamar']; ?>">
                                Hapus
                              </button>
                            </div>
                          </div>
                        </td>
                      </tr>

                      <!-- Modal Ubah -->
                      <div class="modal fade" id="modal-ubah<?= $kamar['id_kamar']; ?>">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Ubah Kamar</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form action="../functions/crud_kamar.php" method="post" enctype="multipart/form-data" autocomplete="off">
                              <div class="modal-body">
                                  <div class="form-group">
                                    <label for="nama_kamar">Nama Kamar <code>*Maksimal 30 huruf</code></label>
                                    <input type="text" name="nama_kamar" max="30" class="form-control" id="nama_kamar" placeholder="Masukkan Nama Kamar" value="<?= $kamar['nama_kamar']; ?>" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="harga_kamar">Harga Kamar <code>*Harga permalam & menggunakan mata uang rupiah</code></label>
                                    <input type="number" name="harga_kamar" class="form-control" id="harga_kamar" placeholder="Masukkan Harga Kamar" value="<?= $kamar['harga_kamar']; ?>" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="ket_kamar">Keterangan Kamar <code>*Maksimal 250 huruf</code></label>
                                    <textarea name="ket_kamar" class="form-control" id="ket_kamar" maxlength="250" rows="3" placeholder="Masukkan Keterangan Kamar" required><?= $kamar['ket_kamar']; ?></textarea>
                                  </div>
                                  <div class="form-group">
                                    <label for="jumlah_kasur">Jumlah Kasur <code>*Maksimal 2 digit</code></label>
                                    <input type="number" name="jumlah_kasur" class="form-control" id="jumlah_kasur" maxlength="2" placeholder="Masukkan Jumlah Kasur" value="<?= $kamar['jumlah_kasur']; ?>" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="ukuran_kamar">Ukuran Kamar <code>*Menggunakan satuan M<sup>2</sup> & maksimal 2 digit</code></label>
                                    <input type="number" name="ukuran_kamar" class="form-control" id="ukuran_kamar" maxlength="2" placeholder="Masukkan Ukuran Kamar" value="<?= $kamar['ukuran_kamar']; ?>" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="gambar_kamar">Gambar Kamar <code>*Abaikan jika tidak ingin mengganti gambar</code></label>
                                    <div class="input-group">
                                      <div class="custom-file">
                                        <input type="file" name="gambar_kamar" class="custom-file-input" id="gambar_kamar">
                                        <label class="custom-file-label" for="gambar_kamar">Pilih Gambar Kamar</label>
                                      </div>
                                    </div>
                                  </div>
                                  <img src="../img/kamar/<?= $kamar['gambar_kamar']; ?>" alt="gambar error" title="<?= $kamar['nama_kamar']; ?>" width="200">
                                  <input type="hidden" name="id_kamar" value="<?= $kamar['id_kamar']; ?>">
                                  <input type="hidden" name="gambar_kamar" value="<?= $kamar['gambar_kamar']; ?>">
                              </div>
                              <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                <button type="submit" name="ubah_kamar" class="btn btn-primary">Ubah Kamar</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Modal Hapus -->
                      <div class="modal fade" id="modal-hapus<?= $kamar['id_kamar']; ?>">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Hapus Kamar</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form action="../functions/crud_kamar.php" method="post" enctype="multipart/form-data" autocomplete="off">
                              <div class="modal-body">
                                <p>Apakah anda yakin ingin menghapus data kamar dari <em><?= $kamar['nama_kamar']; ?></em> ?</p>
                                  <input type="hidden" name="id_kamar" value="<?= $kamar['id_kamar']; ?>">
                                  <input type="hidden" name="gambar_kamar" value="<?= $kamar['gambar_kamar']; ?>">
                              </div>
                              <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                <button type="submit" name="hapus_kamar" class="btn btn-primary">Hapus Kamar</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>

                    <?php endwhile ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th class="text-center">No</th>
                    <th>Nama Kamar</th>
                    <th>Harga <sup>/Malam</sup></th>
                    <th>Keterangan</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
            </div>

      <!-- Modal Tambah -->
      <div class="modal fade" id="modal-tambah">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Kamar</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="../functions/crud_kamar.php" method="post" enctype="multipart/form-data" autocomplete="off">
              <div class="modal-body">
                  <div class="form-group">
                    <label for="nama_kamar">Nama Kamar <code>*Maksimal 30 huruf</code></label>
                    <input type="text" name="nama_kamar" maxlength="30" class="form-control" id="nama_kamar" placeholder="Masukkan Nama Kamar" required>
                  </div>
                  <div class="form-group">
                    <label for="harga_kamar">Harga Kamar <code>*Harga permalam & menggunakan mata uang rupiah</code></label>
                    <input type="number" name="harga_kamar" class="form-control" id="harga_kamar" placeholder="Masukkan Harga Kamar" required>
                  </div>
                  <div class="form-group">
                    <label for="ket_kamar">Keterangan Kamar <code>*Maksimal 250 huruf</code></label>
                    <textarea name="ket_kamar" maxlength="250" class="form-control" id="ket_kamar" rows="3" placeholder="Masukkan Keterangan Kamar" required></textarea>
                  </div>
                  <div class="form-group">
                    <label for="jumlah_kasur">Jumlah Kasur <code>*Maksimal 2 digit</code></label>
                    <input type="number" name="jumlah_kasur" maxlength="2" class="form-control" id="jumlah_kasur" placeholder="Masukkan Jumlah Kasur" required>
                  </div>
                  <div class="form-group">
                    <label for="ukuran_kamar">Ukuran Kamar <code>*Menggunakan satuan M<sup>2</sup> & maksimal 2 digit</code></label>
                    <input type="number" name="ukuran_kamar" maxlength="2" class="form-control" id="ukuran_kamar" placeholder="Masukkan Ukuran Kamar" required>
                  </div>
                  <div class="form-group">
                    <label for="gambar_kamar">Gambar Kamar <code>*Wajib melampirkan gambar</code></label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="gambar_kamar" class="custom-file-input" id="gambar_kamar">
                        <label class="custom-file-label" for="gambar_kamar">Pilih Gambar Kamar</label>
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
        </div>
      </div>