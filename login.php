<?php

session_start();

include 'koneksi.php';

if (isset($_SESSION['level']) == "admin") {
    header("location: petugas/admin.php");
    exit();
} else if (isset($_SESSION['level']) == "resepsionis") {
    header("location: petugas/resepsionis.php");
    exit();
}


if (isset($_POST['btn_login'])) {

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $cek_akun = mysqli_query($koneksi, "SELECT * from tbl_petugas where username = '$username' and password = '$password'");
    $row_akun = mysqli_num_rows($cek_akun);
    $array_akun = mysqli_fetch_array($cek_akun);

    $_SESSION['nama'] = $array_akun['nama_petugas'];
    $_SESSION['level'] = $array_akun['level_petugas'];

    if ($row_akun > 0) {

        if ($_SESSION['level'] == 'admin') {
            echo "<script>
            alert('Anda berhasil login!');
            location.replace('petugas/admin.php');
            </script>";
        } else if ($_SESSION['level'] == 'resepsionis') {
            echo "<script>
            alert('Anda berhasil login!');
            location.replace('petugas/resepsionis.php');
            </script>";
        } else {
            echo "<script>
            alert('Anda gagal login!');
            location.replace('login.php');
            </script>";
        }
    } else {
        echo "<script>
        alert('Anda gagal login!');
        location.replace('login.php');
        </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel Hebat | Login</title>
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
            <a href="index.php"><b>Hotel</b> Hebat</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Silakan masukkan username dan password anda dengan benar.</p>

                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="username" placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="social-auth-links text-center mb-3">
                        <p> </p>
                        <button type="submit" name="btn_login" class="btn btn-xl btn-primary">Login</button>
                    </div>
                </form>
                <!-- /.social-auth-links -->

                <p class="mb-1">
                    <a href="index.php">Kembali..</a>
                </p>
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