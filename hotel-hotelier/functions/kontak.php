<?php

include 'koneksi.php';

if (isset($_POST['kirim_pertanyaan'])) {
    $nama_pengirim  = htmlspecialchars($_POST['nama_pengirim']);
    $email_pengirim = htmlspecialchars($_POST['email_pengirim']);
    $judul          = htmlspecialchars($_POST['judul']);
    $pesan          = htmlspecialchars($_POST['pesan']);

    $kirim_pertanyaan = mysqli_query($koneksi, "INSERT into kontak set nama_pengirim = '$nama_pengirim', email_pengirim = '$email_pengirim', judul = '$judul', pesan = '$pesan'");

    if ($kirim_pertanyaan) {
        echo "<script>
                    alert('Pertanyaan Anda Berhasil Terkirim!');
                    location.replace('../kontak.php');
                </script>";
    } else {
        echo "<script>
                    alert('Pertanyaan Anda Gagal Terkirim!');
                    location.replace('../kontak.php');
                </script>";
    }
}
