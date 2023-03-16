<?php 

if ($_SESSION['level'] !== 'admin') {
  return;
}

 ?>

            <div class="card">
              <div class="card-header">
                <div class="d-sm-flex justify-content-between align-items-center">
                   <h4>Fasilitas Hotel</h4>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah">
                    Tambah Fasilitas
                  </button>

                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead class="bg-info">
                  <tr>
                    <th class="text-center">No</th>
                    <th>Nama Fasilitas</th>
                    <th>Keterangan</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 

                    $no = 1;

                    include '../functions/koneksi.php';

                    $sql_fasilitas = mysqli_query($koneksi, "SELECT * from fasilitas");

                    while ($fasilitas = mysqli_fetch_array($sql_fasilitas)) :

                     ?>
                      <tr>
                        <td class="text-center"><?= $no++; ?></td>
                        <td><?= $fasilitas['nama_fasilitas']; ?></td>
                        <td><?= $fasilitas['ket_fasilitas']; ?></td>
                        <td>
                          <img src="../img/fasilitas/<?= $fasilitas['gambar_fasilitas']; ?>" width="150" alt="gambar error" title="<?= $fasilitas['nama_fasilitas']; ?>">
                        </td>
                        <td>
                          <div class="btn-group">
                            <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                              Detail
                            </button>
                            <div class="dropdown-menu" role="menu">
                              <button type="button" class="dropdown-item" data-toggle="modal" data-target="#modal-ubah<?= $fasilitas['id_fasilitas']; ?>">
                                Ubah
                              </button>
                              <button type="button" class="dropdown-item" data-toggle="modal" data-target="#modal-hapus<?= $fasilitas['id_fasilitas']; ?>">
                                Hapus
                              </button>
                            </div>
                          </div>
                        </td>
                      </tr>

                      <!-- Modal Ubah -->
                      <div class="modal fade" id="modal-ubah<?= $fasilitas['id_fasilitas']; ?>">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Ubah Fasilitas</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form action="../functions/crud_fasilitas.php" method="post" enctype="multipart/form-data" autocomplete="off">
                              <div class="modal-body">
                                  <div class="form-group">
                                    <label for="nama_fasilitas">Nama Fasilitas <code>*Maksimal 30 huruf</code></label>
                                    <input type="text" name="nama_fasilitas" class="form-control" id="nama_fasilitas" placeholder="Masukkan Nama Fasilitas" maxlength="30" value="<?= $fasilitas['nama_fasilitas']; ?>" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="ket_fasilitas">Keterangan Fasilitas <code>*Maksimal 250 huruf</code></label>
                                    <textarea name="ket_fasilitas" class="form-control" maxlength="250" id="ket_fasilitas" rows="3" placeholder="Masukkan Keterangan Fasilitas" required><?= $fasilitas['ket_fasilitas']; ?></textarea>
                                  </div>
                                  <div class="form-group">
                                    <label for="gambar_fasilitas">Gambar Fasilitas <code>*Abaikan jika tidak ingin mengganti gambar</code></label>
                                    <div class="input-group">
                                      <div class="custom-file">
                                        <input type="file" name="gambar_fasilitas" class="custom-file-input" id="gambar_fasilitas">
                                        <label class="custom-file-label" for="gambar_fasilitas">Pilih Gambar Fasilitas</label>
                                      </div>
                                    </div>
                                  </div>
                                  <img src="../img/fasilitas/<?= $fasilitas['gambar_fasilitas']; ?>" alt="gambar error" title="<?= $fasilitas['nama_fasilitas']; ?>" width="200">
                                  <input type="hidden" name="id_fasilitas" value="<?= $fasilitas['id_fasilitas']; ?>">
                                  <input type="hidden" name="gambar_fasilitas" value="<?= $fasilitas['gambar_fasilitas']; ?>">
                              </div>
                              <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                <button type="submit" name="ubah_fasilitas" class="btn btn-primary">Ubah Fasilitas</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Modal Hapus -->
                      <div class="modal fade" id="modal-hapus<?= $fasilitas['id_fasilitas']; ?>">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Hapus Fasilitas</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form action="../functions/crud_fasilitas.php" method="post" enctype="multipart/form-data" autocomplete="off">
                              <div class="modal-body">
                                <p>Apakah anda yakin ingin menghapus data fasilitas dari <em><?= $fasilitas['nama_fasilitas']; ?></em> ?</p>
                                  <input type="hidden" name="id_fasilitas" value="<?= $fasilitas['id_fasilitas']; ?>">
                                  <input type="hidden" name="gambar_fasilitas" value="<?= $fasilitas['gambar_fasilitas']; ?>">
                              </div>
                              <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                <button type="submit" name="hapus_fasilitas" class="btn btn-primary">Hapus Fasilitas</button>
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
                    <th>Nama Fasilitas</th>
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
              <h4 class="modal-title">Tambah Fasilitas</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="../functions/crud_fasilitas.php" method="post" enctype="multipart/form-data" autocomplete="off">
              <div class="modal-body">
                  <div class="form-group">
                    <label for="nama_fasilitas">Nama Fasilitas <code>*Maksimal 30 huruf</code></label>
                    <input type="text" name="nama_fasilitas" class="form-control" id="nama_fasilitas" placeholder="Masukkan Nama Fasilitas" maxlength="30" required>
                  </div>
                  <div class="form-group">
                    <label for="ket_fasilitas">Keterangan Fasilitas <code>*Maksimal 250 huruf</code></label>
                    <textarea name="ket_fasilitas" class="form-control" id="ket_fasilitas" rows="3" placeholder="Masukkan Keterangan Fasilitas" required maxlength="250"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="gambar_fasilitas">Gambar Fasilitas <code>*Wajib melampirkan gambar</code></label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="gambar_fasilitas" class="custom-file-input" id="gambar_fasilitas">
                        <label class="custom-file-label" for="gambar_fasilitas">Pilih Gambar Fasilitas</label>
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
        </div>
      </div>