<?php

session_start();

include 'koneksi.php';

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = md5(mysqli_real_escape_string($koneksi, $_POST['password']));

    $sql_petugas    = mysqli_query($koneksi, "SELECT * from petugas where username = '$username' and password = '$password'");
    $row_petugas    = mysqli_num_rows($sql_petugas);
    $petugas        = mysqli_fetch_array($sql_petugas);

    if ($row_petugas > 0) {
        $_SESSION['nama']       = $petugas['nama_petugas'];
        $_SESSION['level']      = $petugas['level'];
        $_SESSION['username']   = $petugas['username'];

        if ($_SESSION['level'] == 'admin') {
            header('location: ../petugas/admin.php');
        } else if ($_SESSION['level'] == 'resepsionis') {
            header('location: ../petugas/resepsionis.php');
        } else {
            header('location: ../login.php? Maaf level petugas tidak diketahui!');
        }
    } else {
        header('location: ../login.php? Maaf akun tidak ditemukan!');
    }
}
