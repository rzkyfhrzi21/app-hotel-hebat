<?php

session_start();

if ($_SESSION['level'] !== 'admin') {
  echo "<script>
          alert('Maaf, Anda harus login sebagai admin terlebih dahulu!');
          location.replace('../login.php');
        </script>";
}

$nama_admin = $_SESSION['nama'];

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Kamar</title>

  <link rel="shortcut icon" type="image/x-icon" href="../bahan/logo.png">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../template2/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../template2/dist/css/adminlte.min.css">
</head>

<body>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit Kamar</h3>
            </div>
            <!-- /.card-header -->

            <!-- form start -->
            <form action="simpan_edit.php" method="post" autocomplete="off" enctype="multipart/form-data">
              <?php

              $id_kamar = $_GET['id'];

              include "../koneksi.php";

              $query = mysqli_query($koneksi, "SELECT * from kamar WHERE id_kamar = $id_kamar");

              while ($data = mysqli_fetch_array($query)) {

              ?>
                <input type="hidden" value="<?php echo $data['id_kamar'] ?>" name="id_kamar">

                <input type="hidden" value="<?php echo $data['gambar_kamar'] ?>" name="gambar_lama">

                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Kamar</label>
                    <input type="text" name="nama_kamar" class="form-control" id="exampleInputEmail1" value="<?php echo $data['nama_kamar']; ?>" placeholder="Masukkan Nama Kamar" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Fasilitas Kamar</label>
                    <textarea name="fasilitas_kamar" class="form-control" id="exampleInputPassword1" rows="3" placeholder="Masukkan Fasilitas Kamar" required><?php echo $data['fasilitas_kamar']; ?></textarea>
                  </div>

                  <div class="form-group">
                    <label for="jumlah_kasur">Jumlah Kasur</label>
                    <input type="number" name="jumlah_kasur" class="form-control" id="jumlah_kasur" value="<?php echo $data['jumlah_kasur']; ?>" placeholder="Masukkan Jumlah Kasur" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Gambar Kamar</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="gambar" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Pilih Gambar</label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group">
                      <div class="custom-file">
                        <img src="../img/<?php echo $data["gambar_kamar"]; ?>" width=200 title="<?php echo $data['gambar_kamar'] ?>">
                      </div>
                    </div>
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="proses" value="proses" class="btn btn-primary">Simpan</button>
                </div>
              <?php } ?>
            </form>
          </div>
        </div>
        <!-- /.row -->
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <script src="../template2/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../template2/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- bs-custom-file-input -->
  <script src="../template2/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../template2/dist/js/adminlte.min.js"></script>
  <!-- Page specific script -->
  <script>
    $(function() {
      bsCustomFileInput.init();
    });
  </script>
</body>

</html>