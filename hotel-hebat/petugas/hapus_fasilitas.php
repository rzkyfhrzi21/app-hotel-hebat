<?php

include '../koneksi.php';

$id_fasilitas   = $_GET['id'];

$query  = "DELETE From fasilitas where id_fasilitas ='$id_fasilitas'";

$hapus  = mysqli_query($koneksi, $query);

if ($hapus) {
    echo "<script>
            alert('Berhasil Terhapus!');
            location.replace('admin.php?page=fasilitas');
        </script>";
} else {
    echo "<script>
            alert('Gagal Terhapus!');
            location.replace('admin.php?page=fasilitas');
        </script>";
}
