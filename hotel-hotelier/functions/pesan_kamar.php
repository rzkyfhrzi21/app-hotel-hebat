<?php

include 'koneksi.php';

if (isset($_POST['pesan_kamar'])) {
    $nama_pemesan       = htmlspecialchars($_POST['nama_pemesan']);
    $no_hp              = htmlspecialchars($_POST['no_hp']);
    $email              = htmlspecialchars($_POST['email']);
    $check_in           = htmlspecialchars($_POST['check_in']);
    $check_out          = htmlspecialchars($_POST['check_out']);
    $jumlah_kamar       = htmlspecialchars($_POST['jumlah_kamar']);
    $tipe_kamar         = htmlspecialchars($_POST['tipe_kamar']);
    $permintaan_khusus  = htmlspecialchars($_POST['permintaan_khusus']);

    $query          = "INSERT into pemesanan set nama_pemesan = '$nama_pemesan', no_hp = '$no_hp', email = '$email', check_in = '$check_in', check_out = '$check_out', jumlah_kamar = '$jumlah_kamar', permintaan_khusus = '$permintaan_khusus', tipe_kamar = '$tipe_kamar'";
    $pesan_kamar    = mysqli_query($koneksi, $query);

    if ($pesan_kamar) {
        echo "<script>
                alert('Kamar berhasil dipesan!');
                location.replace('../booking.php');
                window.open('../invoice.php');
                
            </script>";
    } else {
        echo "<script>
                alert('Kamar gagal dipesan!');
                location.replace('../booking.php');
            </script>";
    }
}
