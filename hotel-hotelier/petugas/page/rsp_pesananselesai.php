<?php 

if ($_SESSION['level'] !== 'resepsionis') {
  return;
}

 ?>

            <div class="card">
              <div class="card-header">
                <div class="d-sm-flex justify-content-between align-items-center">
                   <h4>Data Reservasi Selesai</h4>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th class="text-center">No</th>
                    <th>Nama Pemesan</th>
                    <th>Email</th>
                    <th>Nama Kamar</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                    <th>Jumlah Kamar</th>
                    <th>No Hp</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 

                    $no = 1;

                    include '../functions/koneksi.php';

                    $status_selesai = 'selesai';

                    $sql_pemesanan = mysqli_query($koneksi, "SELECT * from pemesanan where status = '$status_selesai'");

                    while ($pemesanan = mysqli_fetch_array($sql_pemesanan)) :

                     ?>
                      <tr>
                        <td class="text-center"><?= $no++; ?></td>
                        <td><?= $pemesanan['nama_pemesan']; ?></td>
                        <td><?= $pemesanan['email']; ?></td>
                        <td><?= $pemesanan['nama_kamar']; ?></td>
                        <td><?= $pemesanan['check_in']; ?></td>
                        <td><?= $pemesanan['check_out']; ?></td>
                        <td><?= $pemesanan['jumlah_kamar']; ?></td>
                        <td><?= $pemesanan['no_hp']; ?></td>
                        <td>
                          <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                              Detail
                            </button>
                            <div class="dropdown-menu" role="menu">
<!--                               <a href="?invoice=<?= $pemesanan['id_pemesanan']; ?>" class="dropdown-item" target="_blank">
                                Print
                              </a> -->
                              <button type="button" class="dropdown-item" data-toggle="modal" data-target="#modal-hapus<?= $pemesanan['id_pemesanan']; ?>">
                                Hapus
                              </button>
                            </div>
                          </div>
                        </td>
                      </tr>
                      
                      <!-- Modal Hapus -->
                      <div class="modal fade" id="modal-hapus<?= $pemesanan['id_pemesanan']; ?>">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Hapus Reservasi</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form action="../functions/crud_reservasi.php" method="post" enctype="multipart/form-data" autocomplete="off">
                              <div class="modal-body">
                                <p>Apakah anda yakin ingin menghapus data reservasi dari <?= $pemesanan['nama_pemesan']; ?> ?</p>
                                  <input type="hidden" name="id_pemesanan" value="<?= $pemesanan['id_pemesanan']; ?>">
                              </div>
                              <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                <button type="submit" name="hapus_pemesanan" class="btn btn-danger">Hapus Reservasi</button>
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
                    	<th>Nama Pemesan</th>
                    	<th>Email</th>
                    	<th>Nama Kamar</th>
                    	<th>Check In</th>
                    	<th>Check Out</th>
                    	<th>Jumlah Kamar</th>
                    	<th>No Hp</th>
                    	<th>Aksi</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
            </div>