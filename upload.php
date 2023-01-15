<?php

include 'koneksi.php';

if (isset($_POST['upload'])) {

    $namaGambar     = $_FILES['gambar']['name'];
    $errorGambar    = $_FILES['gambar']['error'];
    $sizeGambar     = $_FILES['gambar']['size'];
    $tmp_name       = $_FILES['gambar']['tmp_name'];


    if ($errorGambar == 4) {
        echo "<script>
        alert('Harap pilih gambar!');
        </script>";
    } else {
        $validGambar = ['jpg', 'png', 'jpeg'];
        $formatGambar = explode('.', $namaGambar);
        $formatGambar = strtolower(end($formatGambar));

        if (!in_array($formatGambar, $validGambar)) {
            echo "<script>
            alert('Hanya upload gambar!');
            </script>";
        } else if ($sizeGambar > 10000000) {
            echo "<script>
            alert('Gambar terlalu besar!');
            </script>";
        } else {
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Gambar</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <tr>
            <td><input type="file" name="gambar"></td>
        </tr>
        <tr>
            <td><button type="submit" name="upload">Upload</button></td>
        </tr>
    </form>
</body>

</html>