<?php

include 'koneksi.php';

if (isset($_POST['hapus_reservasi'])) {
    $id_pemesanan = $_POST['id_pemesanan'];

    $query  = "DELETE from pemesanan where id_pemesanan = '$id_pemesanan'";
    $hapus  = mysqli_query($koneksi, $query);

    if ($hapus) {
        header('location: ../petugas/resepsionis.php?page=reservasi');
    } else {
        echo "<script>
                alert('Reservasi gagal dihapus!');
                location.replace('../petugas/resepsionis.php?page=reservasi');
        </script>";
    }
}
