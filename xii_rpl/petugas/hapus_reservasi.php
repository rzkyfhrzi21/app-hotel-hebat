<?php

include '../koneksi.php';

$id_pemesanan   = $_GET['id'];

$query  = "DELETE From pemesanan where id_pemesanan ='$id_pemesanan'";

$hapus  = mysqli_query($koneksi, $query);

if ($hapus) {
    echo "<script>
            alert('Berhasil Terhapus!');
            location.replace('resepsionis.php?page=reservasi');
        </script>";
} else {
    echo "<script>
            alert('Gagal Terhapus!');
            location.replace('resepsionis.php?page=reservasi');
        </script>";
}
