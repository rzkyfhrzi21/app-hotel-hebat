<?php 

include '../functions/koneksi.php';

include '../functions/data.php';

if ($_SESSION['level'] == 0) {
  return;
}

date_default_timezone_set('Asia/Jakarta');

$tanggal 	= date('d M');
$jam		  = date('H:i A');

$sesi_id      = $_SESSION['id_petugas'];
$sesi_nama		= $_SESSION['nama_petugas'];
$sesi_level		= $_SESSION['level'];

$sql_pesan		= mysqli_query($koneksi, "SELECT * from percakapan order by id_percakapan desc");
$hitung_pesan	= mysqli_num_rows($sql_pesan);

// <?php if ($sesi_level !== 'resepsionis') { echo "disabled"; } 

 ?>
         <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $total_kamar; ?></h3>
                <p>Total Kamar</p>
              </div>
              <div class="icon">
                <i class="fas fa-bed"></i>
              </div>
             
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?= $total_fasilitas; ?></h3>
                <p>Total Fasilitas</p>
              </div>
              <div class="icon">
                <i class="fas fa-hotel"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?= $total_klien; ?></h3>
                <p>Total Reservasi</p>
              </div>
              <div class="icon">
                <i class="fas fa-book"></i>
              </div>
             
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?= $total_pelanggan; ?></h3>
                <p>Total Email Berlangganan</p>
              </div>
              <div class="icon">
                <i class="fas fa-envelope"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
        </div>
        <div class="row">
          <div class="col">
            <!-- DIRECT CHAT PRIMARY -->
            <div class="card card-primary card-outline direct-chat direct-chat-primary">
              <div class="card-header">
                <h3 class="card-title">Percakapan Petugas Hotel Hebat</h3>

                <div class="card-tools">
                  <span title="Total Pesan <?= $hitung_pesan; ?>" class="badge bg-primary"><?= $hitung_pesan; ?></span>
                  <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                    <i class="fas fa-comments"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- Conversations are loaded here -->
                <div class="direct-chat-messages">
                  <?php 

                  while ($percakapan = mysqli_fetch_array($sql_pesan)) :

                   ?>

   					<?php if ($percakapan['nama_pengirim'] !== $sesi_nama) { ?>

	                  <div class="direct-chat-msg">
	                    <div class="direct-chat-infos clearfix">
                        <div class="row float-left">
	                       <span class="direct-chat-name" style="text-transform: capitalize;"><?= $percakapan['nama_pengirim']; ?></span>
	                       <span class="direct-chat-timestamp" style="text-transform: capitalize;">-<?= $percakapan['tanggal']; ?> <?= $percakapan['jam']; ?> - <?= $percakapan['level']; ?></span>
                        </div>
	                    </div>
	                    <img class="direct-chat-img" src="../img/user1.jpg" alt="Message User Image">
	                    <div class="direct-chat-text">
	                      <?= $percakapan['pesan']; ?>
	                    </div>
	                  </div>

   					<?php } else { ?>

	                  <div class="direct-chat-msg right">
	                    <div class="direct-chat-infos clearfix">
                        <div class="row float-right">
                          <span class="direct-chat-name" style="text-transform: capitalize;"><?= $percakapan['nama_pengirim']; ?></span>
                          <span class="direct-chat-timestamp" style="text-transform: capitalize;">-<?= $percakapan['tanggal']; ?> <?= $percakapan['jam']; ?></span>
                        </div>
	                    </div>
	                    <img class="direct-chat-img" src="../img/user8.jpg" alt="Message User Image">
	                    <div class="direct-chat-text">
	                      <?= $percakapan['pesan']; ?>
	                    </div>
	                  </div>

                    <?php } ?>

                <?php endwhile ?>

                </div>

                <!-- Contacts are loaded here -->
                <div class="direct-chat-contacts">
                  <ul class="contacts-list">
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="../img/user8.jpg" alt="User Avatar">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name" style="text-transform: capitalize;">
                            <?= $sesi_nama; ?>
                            <small class="contacts-list-date float-right">ID Petugas : <?= $sesi_id; ?></small>
                          </span>
                          <span class="contacts-list-msg" style="text-transform: capitalize;">Level : <?= $sesi_level; ?></span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                  </ul>
                  <!-- /.contatcts-list -->
                </div>
                <!-- /.direct-chat-pane -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <form action="../functions/percakapan.php" method="post">
                  <div class="input-group">
                    <input type="hidden" name="nama_pengirim" value="<?= $sesi_nama; ?>">
                    <input type="hidden" name="jam" value="<?= $jam; ?>">
                    <input type="hidden" name="tanggal" value="<?= $tanggal; ?>">
                    <input type="hidden" name="level" value="<?= $sesi_level; ?>">
                    <input type="text" name="pesan" placeholder="Ketikkan Pesan .." class="form-control" required>
                    <span class="input-group-append">
                      <button type="submit" name="kirim_pesan" class="btn btn-primary">Kirim Pesan</button>
                    </span>
                  </div>
                </form>
              </div>
            </div>
          </div>