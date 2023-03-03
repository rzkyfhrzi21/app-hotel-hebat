<?php

include 'koneksi.php';

function uploadKamar()
{
    $namaGambar = $_FILES['gambar_kamar']['name'];
    $sizeGambar = $_FILES['gambar_kamar']['size'];
    $tmpName    = $_FILES['gambar_kamar']['tmp_name'];

    $validGambar    = ['jpg', 'jpeg', 'png'];
    $formatGambar   = explode('.', $namaGambar);
    $formatGambar   = strtolower(end($formatGambar));

    if (!in_array($formatGambar, $validGambar)) {
        echo "<script>
                    alert('Format gambar tidak valid!');
                    location.replace('../petugas/admin.php?page=kamar');
                </script>";
    } else if ($sizeGambar > 10000000) {
        echo "<script>
                    alert('Ukuran gambar terlalu besar!');
                    location.replace('../petugas/admin.php?page=kamar');
                </script>";
    } else {
        $gambarBaru = uniqid();
        $gambarBaru .= '.' . $formatGambar;

        move_uploaded_file($tmpName, '../img/kamar/' . $gambarBaru);

        return $gambarBaru;
    }
}

if (isset($_POST['hapus_kamar'])) {
    $id_kamar       = $_POST['id_kamar'];
    $gambar_lama    = $_POST['gambar_lama'];

    $query  = "DELETE from kamar where id_kamar = '$id_kamar'";
    $hapus  = mysqli_query($koneksi, $query);

    if ($hapus) {
        unlink('../img/kamar/' . $gambar_lama);
        header('location: ../petugas/admin.php?page=kamar');
    } else {
        echo "<script>
                alert('Kamar gagal dihapus!');
                location.replace('../petugas/admin.php?page=kamar');
        </script>";
    }
}

if (isset($_POST['tambah_kamar'])) {
    $nama_kamar         = htmlspecialchars($_POST['nama_kamar']);
    $fasilitas_kamar    = htmlspecialchars($_POST['fasilitas_kamar']);
    $jumlah_kasur       = htmlspecialchars($_POST['jumlah_kasur']);
    $ukuran_kamar       = htmlspecialchars($_POST['ukuran_kamar']);
    $harga_kamar        = htmlspecialchars($_POST['harga_kamar']);

    if ($_FILES['gambar_kamar']['error'] == 4) {
        echo "<script>
                alert('Masukkan gambar terlebih dahulu!');
                location.replace('../petugas/admin.php?page=kamar');
            </script>";
    } else {
        $gambar_kamar   = uploadKamar();

        $query  = "INSERT into kamar set nama_kamar = '$nama_kamar', harga_kamar = '$harga_kamar', ukuran_kamar = '$ukuran_kamar', fasilitas_kamar = '$fasilitas_kamar', jumlah_kasur = '$jumlah_kasur', gambar_kamar = '$gambar_kamar'";
        $tambah = mysqli_query($koneksi, $query);

        if ($tambah) {
            echo "<script>
                    location.replace('../petugas/admin.php?page=kamar');
                </script>";
        } else {
            echo "<script>
                    alert('Kamar gagal ditambahkan!');
                    location.replace('../petugas/admin.php?page=kamar');
                </script>";
        }
    }
}

if (isset($_POST['ubah_kamar'])) {
    $nama_kamar         = htmlspecialchars($_POST['nama_kamar']);
    $fasilitas_kamar    = htmlspecialchars($_POST['fasilitas_kamar']);
    $jumlah_kasur       = htmlspecialchars($_POST['jumlah_kasur']);
    $ukuran_kamar       = htmlspecialchars($_POST['ukuran_kamar']);
    $harga_kamar        = htmlspecialchars($_POST['harga_kamar']);

    $id_kamar           = htmlspecialchars($_POST['id_kamar']);
    $gambar_lama        = htmlspecialchars($_POST['gambar_lama']);

    if ($_FILES['gambar_kamar']['error'] == 4) {
        $query  = "UPDATE kamar set nama_kamar = '$nama_kamar', harga_kamar = '$harga_kamar', ukuran_kamar = '$ukuran_kamar', fasilitas_kamar = '$fasilitas_kamar', jumlah_kasur = '$jumlah_kasur' where id_kamar = '$id_kamar'";
    } else {
        unlink('../img/kamar/' . $gambar_lama);
        $gambar_kamar   = uploadKamar();

        $query  = "UPDATE kamar set nama_kamar = '$nama_kamar', harga_kamar = '$harga_kamar', ukuran_kamar = '$ukuran_kamar', fasilitas_kamar = '$fasilitas_kamar', jumlah_kasur = '$jumlah_kasur', gambar_kamar = '$gambar_kamar', gambar_kamar = '$gambar_kamar' where id_kamar = '$id_kamar'";
    }

    $ubah = mysqli_query($koneksi, $query);

    if ($ubah) {
        echo "<script>
                    location.replace('../petugas/admin.php?page=kamar');
                </script>";
    } else {
        echo "<script>
                    alert('Kamar gagal diubah!');
                    location.replace('../petugas/admin.php?page=kamar');
                </script>";
    }
}
