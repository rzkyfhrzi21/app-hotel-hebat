<?php

session_start();

if (isset($_SESSION['level'])) {

  if ($_SESSION['level'] == "admin") {
    header("location: petugas/admin.php");
  } else if ($_SESSION['level'] == "resepsionis") {
    header("location: petugas/resepsionis.php");
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Hotel Hebat</title>

  <link rel="shortcut icon" type="image/x-icon" href="bahan/logo.png">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="template2/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="template2/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="template2/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="index.php"><b>Petugas</b> Hotel Hebat</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Masukkan username dan password dengan benar</p>

        <form action="cek_login.php" method="post">
          <div class="input-group mb-3">
            <input type="username" name="username" class="form-control" placeholder="Username">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- /.col -->
            <div class="col-xl-12">
              <button type="submit" name="login" class="btn btn-primary btn-block">Masuk</button>
              <a href="index.php" class="btn btn-outline-secondary btn-block">Kembali</a>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="template2/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="template2/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="template2/dist/js/adminlte.min.js"></script>
</body>

</html>