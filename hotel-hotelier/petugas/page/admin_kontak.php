<?php 

if ($_SESSION['level'] !== 'admin') {
  return;
}

 ?>

            <div class="card">
              <div class="card-header">
                <div class="d-sm-flex justify-content-between align-items-center">
                   <h4>Kontak Pesan</h4>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th class="text-center" width="15">No</th>
                    <th>Nama Pengirim</th>
                    <th>Email</th>
                    <th>Pertanyaan</th>
                    <th>Rincian</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 

                    $no = 1;

                    include '../functions/koneksi.php';

                    $sql_kontak = mysqli_query($koneksi, "SELECT * from kontak");

                    while ($kontak = mysqli_fetch_array($sql_kontak)) :

                     ?>
                      <tr>
                        <td class="text-center"><?= $no++; ?></td>
                        <td><?= $kontak['nama']; ?></td>
                        <td><?= $kontak['email']; ?></td>
                        <td><?= $kontak['judul']; ?></td>
                        <td><?= $kontak['pesan']; ?></td>
                      <td>
                          <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                              Detail
                            </button>
                            <div class="dropdown-menu" role="menu">
                              <button type="button" class="dropdown-item" data-toggle="modal" data-target="#modal-balas<?= $kontak['id_kontak']; ?>">
                                Balas
                              </button>
                              <button type="button" class="dropdown-item" data-toggle="modal" data-target="#modal-hapus<?= $kontak['id_kontak']; ?>">
                                Hapus
                              </button>
                            </div>
                          </div>
                        </td>
                      </tr>

                      <!-- Modal Ubah -->
                      <div class="modal fade" id="modal-balas<?= $kontak['id_kontak']; ?>">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Balas Email</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form action="../functions/kontak.php" method="post" autocomplete="off">
                              <div class="modal-body">
                                  <div class="form-group">
                                    <label for="nama">Nama <code>*Nama penanya tidak akan dikirimkan</code></label>
                                    <input type="nama" class="form-control" id="nama" value="<?= $kontak['nama']; ?>" readonly>
                                  </div>
                                  <div class="form-group">
                                    <label for="email">Email Tujuan <code>*Alamat email tujuan</code></label>
                                    <input type="email" name="email" class="form-control" id="email" value="<?= $kontak['email']; ?>" readonly>
                                  </div>
                                  <div class="form-group">
                                    <label for="judul">Judul Balasan <code>*Pembuka pesan</code></label>
                                    <input type="text" name="judul" class="form-control" id="judul" placeholder="<?= $kontak['judul']; ?>" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="rincian">Rincian Balasan <code>*Sopan & jelas</code></label>
                                    <textarea name="rincian" class="form-control" id="rincian" rows="3" placeholder="<?= $kontak['pesan']; ?>" required></textarea>
                                  </div>
                                  <input type="hidden" name="id_kontak" value="<?= $kontak['id_kontak']; ?>">
                              </div>
                              <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                <button type="submit" name="balas_kontak" class="btn btn-primary" disabled>Kirim Balasan</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>

                      <!-- Modal Hapus -->
                      <div class="modal fade" id="modal-hapus<?= $kontak['id_kontak']; ?>">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Hapus Pertanyaan</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form action="../functions/kontak.php" method="post" enctype="multipart/form-data" autocomplete="off">
                              <div class="modal-body">
                                <p>Apakah anda yakin ingin menghapus pertanyaan dari <em><?= $kontak['nama']; ?></em> terkait <em><?= $kontak['judul']; ?></em> ?</p>
                                  <input type="hidden" name="id_kontak" value="<?= $kontak['id_kontak']; ?>">
                              </div>
                              <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                <button type="submit" name="hapus_kontak" class="btn btn-primary">Hapus Pertanyaan</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    <?php endwhile ?>
                  </tbody>
                  <tfoot>
<!--                   <tr>
                    <th class="text-center">No</th>
                    <th>Nama Pengirim</th>
                    <th>Email</th>
                    <th>Pertanyaan</th>
                    <th>Rincian</th>
                    <th>Aksi</th>
                  </tr> -->
                  </tfoot>
                </table>
              </div>
            </div>