<?php

include '../koneksi.php';

function upload()
{

    if (!$_FILES['gambar']['error'] === 4) {

        $nama_file = $_FILES['gambar']['name'];
        $size_file = $_FILES['gambar']['size'];
        $tmp_name = $_FILES['gambar']['tmp_name'];

        $valid_gambar = ['jpg', 'jpeg', 'png'];
        $format_gambar = explode(".", $nama_file);
        $format_gambar = strtolower(end($format_gambar));

        if (!in_array($format_gambar, $valid_gambar)) {
            echo "<script>
            alert('Hanya masukkan gambar!');
            location.replace('admin.php');
            </script>";
            return false;
        } else if ($size_file > 10000000) {
            echo "<script>
            alert('Ukuran gambar terlalu besar!');
            location.replace('admin.php');
            </script>";
            return false;
        } else {
            $gambar_baru = uniqid();
            $gambar_baru .= "." . $format_gambar;

            move_uploaded_file($tmp_name, '../img/' . $gambar_baru);

            return $gambar_baru;
        }
    }
}

if (isset($_POST['btn_tambahfasilitas'])) {

    $nama_fasilitas     = htmlspecialchars($_POST['nama_fasilitas']);
    $ket_fasilitas      = htmlspecialchars($_POST['ket_fasilitas']);

    $gambar = upload();

    if (!$gambar) {
        echo "<script>
        alert('Harap masukkan gambar!');
        location.replace('admin.php');
        </script>";
        return false;
    }

    $tambah_fasilitas = mysqli_query($koneksi, "INSERT into tbl_fasilitas set nama_fasilitas = '$nama_fasilitas', ket_fasilitas = '$ket_fasilitas', gambar_fasilitas = '$gambar'");

    if ($tambah_fasilitas) {
        echo "<script>
                        alert('Fasilitas berhasil ditambahkan!');
                        location.replace('admin_fasilitas.php');
                        </script>";
    } else {
        echo "<script>
                        alert('Fasilitas gagal ditambahkan!');
                        location.replace('admin_fasilitas.php');
                        </script>";
    }
}

if (isset($_POST['btn_tambahkamar'])) {

    $nama_kamar         = htmlspecialchars($_POST['nama_kamar']);
    $jumlah_kasur       = htmlspecialchars($_POST['jumlah_kasur']);
    $fasilitas_kamar    = htmlspecialchars($_POST['fasilitas_kamar']);

    $gambar = upload();

    if (!$gambar) {
        echo "<script>
        alert('Harap masukkan gambar!');
        location.replace('admin.php');
        </script>";
        return false;
    }

    $tambah_kamar = mysqli_query($koneksi, "INSERT into tbl_kamar set nama_kamar = '$nama_kamar', fasilitas_kamar = '$fasilitas_kamar', jumlah_kasur = '$jumlah_kasur', gambar_kamar = '$gambar'");

    if ($tambah_kamar) {
        echo "<script>
                        alert('Kamar berhasil ditambahkan!');
                        location.replace('admin_kamar.php');
                        </script>";
    } else {
        echo "<script>
                        alert('Kamar gagal ditambahkan!');
                        location.replace('admin_kamar.php');
                        </script>";
    }
}

if (isset($_POST['btn_editfasilitas'])) {

    $nama_fasilitas = htmlspecialchars($_POST['nama_fasilitas']);
    $ket_fasilitas  = htmlspecialchars($_POST['ket_fasilitas']);
    $id_fasilitas   = htmlspecialchars($_POST['id_fasilitas']);
    $gambar_lama    = htmlspecialchars($_POST['gambar_lama']);

    if ($_FILES['gambar']['error'] == 4) {
        $gambar = $gambar_lama;
    } else {
        $gambar = upload();
    }

    $ubah_fasilitas = mysqli_query($koneksi, "UPDATE tbl_fasilitas set nama_fasilitas = '$nama_fasilitas', ket_fasilitas = '$ket_fasilitas', gambar_fasilitas = '$gambar' where id_fasilitas = '$id_fasilitas'");

    if ($ubah_fasilitas) {
        echo "<script>
        alert('Fasilitas berhasil diubah!');
        location.replace('admin_fasilitas.php');
        </script>";
    } else {
        echo "<script>
        alert('Fasilitas gagal diubah!');
        location.replace('admin_fasilitas.php');
        </script>";
    }
}

if (isset($_POST['btn_editkamar'])) {

    $nama_kamar         = htmlspecialchars($_POST['nama_kamar']);
    $fasilitas_kamar    = htmlspecialchars($_POST['fasilitas_kamar']);
    $jumlah_kasur       = htmlspecialchars($_POST['jumlah_kasur']);
    $id_kamar           = htmlspecialchars($_POST['id_kamar']);
    $gambar_lama        = htmlspecialchars($_POST['gambar_kamarlama']);

    if ($_FILES['gambar']['error'] == 4) {
        $gambar = $gambar_lama;
    } else {
        $gambar = upload();
    }

    $ubah_kamar = mysqli_query($koneksi, "UPDATE tbl_kamar set nama_kamar = '$nama_kamar', fasilitas_kamar = '$fasilitas_kamar', jumlah_kasur = '$jumlah_kasur', gambar_kamar = '$gambar' where id_kamar = '$id_kamar'");

    if ($ubah_kamar) {
        echo "<script>
        alert('Kamar berhasil diubah!');
        location.replace('admin_kamar.php');
        </script>";
    } else {
        echo "<script>
        alert('Kamar gagal diubah!');
        location.replace('admin_kamar.php');
        </script>";
    }
}

if (isset($_POST['btn_hapusfasilitas'])) {

    $id_fasilitas   = $_POST['id_fasilitas'];
    $gambar         = $_POST['gambar_fasilitas'];

    $hapus_fasilitas = mysqli_query($koneksi, "DELETE from tbl_fasilitas where id_fasilitas = '$id_fasilitas'");

    if ($hapus_fasilitas) {

        unlink('../img/' . $gambar);

        echo "<script>
        alert('Fasilitas berhasil dihapus!');
        location.replace('admin_fasilitas.php');
        </script>";
    } else {
        echo "<script>
        alert('Fasilitas gagal dihapus!');
        location.replace('admin_fasilitas.php');
        </script>";
    }
}

if (isset($_POST['btn_hapuskamar'])) {

    $id_kamar = $_POST['id_kamar'];
    $gambar = $_POST['gambar_kamar'];

    $hapus_kamar = mysqli_query($koneksi, "DELETE from tbl_kamar where id_kamar = '$id_kamar'");

    if ($hapus_kamar) {

        unlink('../img/' . $gambar);

        echo "<script>
        alert('Kamar berhasil dihapus!');
        location.replace('admin_kamar.php');
        </script>";
    } else {
        echo "<script>
        alert('Kamar gagal dihapus!');
        location.replace('admin_kamar.php');
        </script>";
    }
}
