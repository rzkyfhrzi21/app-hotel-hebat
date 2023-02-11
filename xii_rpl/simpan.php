<?php

// PANGGIL FILE KONEKSI.PHP
include 'koneksi.php';

// TAMPUNG NILAI DARI FIELD DI FORM PESAN KAMAR KEDALAM VARIABEL
$nama_pemesan   = $_POST['nama_pemesan'];
$email          = $_POST['email'];
$no_hp          = $_POST['no_hp'];
$nama_tamu      = $_POST['nama_tamu'];
$check_in       = $_POST['check_in'];
$check_out      = $_POST['check_out'];
$jumlah_kamar   = $_POST['jumlah_kamar'];
$tipe_kamar     = $_POST['tipe_kamar'];

// QUERY TAMBAH PESAN KAMAR KE TABEL PEMESANAN
$query          = "INSERT INTO pemesanan SET nama_pemesan = '$nama_pemesan', email = '$email', no_hp = '$no_hp', nama_tamu ='$nama_tamu', check_in = '$check_in', check_out = '$check_out', jumlah_kamar = ' $jumlah_kamar', tipe_kamar = '$tipe_kamar'";
$pesan_kamar    = mysqli_query($koneksi, $query);

// JIKA PESAN KAMAR BERHASIL
if ($pesan_kamar) {
    echo "<script>
            window.open('invoice.php');       // MEMBUKA HALAMAN BARU BUKTI PEMESANAN
            location.replace('kamar.php');  // MEREFRESH HALAMAN KE KAMAR.PHP
        </script>";
}
// JIKA PESAN KAMAR GAGAL 
else {
    echo "<script>
            alert('Kamar gagal dipesan!');  // ALERT JIKA PESAN KAMAR GAGAL
            location.replace('kamar.php');  // MEREFRESH HALAMAN KE KAMAR.PHP
        </script>";
}
