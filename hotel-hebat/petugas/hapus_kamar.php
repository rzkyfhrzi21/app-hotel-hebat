<?php

include '../koneksi.php';

$id_kamar   = $_GET['id'];

$query  = "DELETE From kamar where id_kamar ='$id_kamar'";

$hapus  = mysqli_query($koneksi, $query);

if ($hapus) {
    echo "<script>
            alert('Berhasil Terhapus!');
            location.replace('admin.php?page=kamar');
        </script>";
} else {
    echo "<script>
            alert('Gagal Terhapus!');
            location.replace('admin.php?page=kamar');
        </script>";
}
