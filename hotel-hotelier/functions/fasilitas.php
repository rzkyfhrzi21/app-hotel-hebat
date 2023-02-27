<?php

include 'koneksi.php';

function uploadFasilitas()
{
    $namaGambar = $_FILES['gambar_fasilitas']['name'];
    $sizeGambar = $_FILES['gambar_fasilitas']['size'];
    $tmpName    = $_FILES['gambar_fasilitas']['tmp_name'];

    $validGambar    = ['jpg', 'jpeg', 'png'];
    $formatGambar   = explode('.', $namaGambar);
    $formatGambar   = strtolower(end($formatGambar));

    if (!in_array($formatGambar, $validGambar)) {
        echo "<script>
                    alert('Format gambar tidak valid!');
                    location.replace('../petugas/admin.php?page=fasilitas');
                </script>";
    } else if ($sizeGambar > 10000000) {
        echo "<script>
                    alert('Ukuran gambar terlalu besar!');
                    location.replace('../petugas/admin.php?page=fasilitas');
                </script>";
    } else {
        $gambarBaru = uniqid();
        $gambarBaru .= '.' . $formatGambar;

        move_uploaded_file($tmpName, '../img/fasilitas/' . $gambarBaru);

        return $gambarBaru;
    }
}

if (isset($_POST['hapus_fasilitas'])) {
    $id_fasilitas   = $_POST['id_fasilitas'];
    $gambar_lama    = $_POST['gambar_lama'];

    $query  = "DELETE from fasilitas where id_fasilitas = '$id_fasilitas'";
    $hapus  = mysqli_query($koneksi, $query);

    if ($hapus) {
        unlink('../img/fasilitas/' . $gambar_lama);
        header('location: ../petugas/admin.php?page=fasilitas');
    } else {
        echo "<script>
                alert('Fasilitas gagal dihapus!');
                location.replace('../petugas/admin.php?page=fasilitas');
        </script>";
    }
}

if (isset($_POST['tambah_fasilitas'])) {
    $nama_fasilitas   = htmlspecialchars($_POST['nama_fasilitas']);
    $ket_fasilitas    = htmlspecialchars($_POST['ket_fasilitas']);

    if ($_FILES['gambar_fasilitas']['error'] == 4) {
        echo "<script>
                alert('Masukkan gambar terlebih dahulu!');
                location.replace('../petugas/admin.php?page=fasilitas');
            </script>";
    } else {
        $gambar_fasilitas   = uploadFasilitas();

        $query  = "INSERT into fasilitas set nama_fasilitas = '$nama_fasilitas', ket_fasilitas = '$ket_fasilitas', gambar_fasilitas = '$gambar_fasilitas'";
        $tambah = mysqli_query($koneksi, $query);

        if ($tambah) {
            echo "<script>
                    location.replace('../petugas/admin.php?page=fasilitas');
                </script>";
        } else {
            echo "<script>
                    alert('Fasilitas gagal ditambahkan!');
                    location.replace('../petugas/admin.php?page=fasilitas');
                </script>";
        }
    }
}

if (isset($_POST['ubah_fasilitas'])) {
    $nama_fasilitas = htmlspecialchars($_POST['nama_fasilitas']);
    $ket_fasilitas  = htmlspecialchars($_POST['ket_fasilitas']);

    $id_fasilitas   = htmlspecialchars($_POST['id_fasilitas']);
    $gambar_lama    = htmlspecialchars($_POST['gambar_lama']);

    if ($_FILES['gambar_fasilitas']['error'] == 4) {
        $query  = "UPDATE fasilitas set nama_fasilitas = '$nama_fasilitas', ket_fasilitas = '$ket_fasilitas' where id_fasilitas = '$id_fasilitas'";
    } else {
        unlink('../img/fasilitas/' . $gambar_lama);
        $gambar_fasilitas   = uploadFasilitas();

        $query  = "UPDATE fasilitas set nama_fasilitas = '$nama_fasilitas', ket_fasilitas = '$ket_fasilitas', gambar_fasilitas = '$gambar_fasilitas' where id_fasilitas = '$id_fasilitas'";
    }

    $ubah = mysqli_query($koneksi, $query);

    if ($ubah) {
        echo "<script>
                    location.replace('../petugas/admin.php?page=fasilitas');
                </script>";
    } else {
        echo "<script>
                    alert('Fasilitas gagal diubah!');
                    location.replace('../petugas/admin.php?page=fasilitas');
                </script>";
    }
}
