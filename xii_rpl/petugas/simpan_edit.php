<?php

require '../koneksi.php';
if (isset($_POST["proses"])) {

	$id_kamar 			= $_POST['id_kamar'];

	$nama_kamar			= $_POST["nama_kamar"];
	$fasilitas_kamar 	= $_POST["fasilitas_kamar"];
	$jumlah_kasur		= $_POST["jumlah_kasur"];

	$gambar_lama		= $_POST['gambar_lama'];

	if ($_FILES["gambar"]["error"] == 4) {

		$query = "UPDATE kamar SET nama_kamar = '$nama_kamar', fasilitas_kamar = '$fasilitas_kamar', jumlah_kasur = '$jumlah_kasur' where id_kamar = '$id_kamar'";

		mysqli_query($koneksi, $query);

		echo "<script> 
				alert('Berhasil Mengedit');
				location.replace('admin.php?page=kamar');
			</script>";
	} else {
		$fileName	= $_FILES["gambar"]["name"];
		$fileSize	= $_FILES["gambar"]["size"];
		$tmpName	= $_FILES["gambar"]["tmp_name"];

		$validImageExtension 	= ['jpg', 'jpeg', 'png'];
		$imageExtension 		= explode('.', $fileName);
		$imageExtension 		= strtolower(end($imageExtension));

		if (!in_array($imageExtension, $validImageExtension)) {
			echo "<script>
					alert('Format Gambar Invalid');
					location.replace('admin.php?page=fasilitas');
				</script>";
		} else if ($fileSize > 10000000) { // angka 0 ada 7 digit atau dibaca 10 juta atau 10.000.000
			echo "<script> 
					alert('Ukuran Gambar Terlalu Besar');
					location.replace('admin.php?page=fasilitas');
				</script>";
		} else {
			$newImageName = uniqid();
			$newImageName .= '.' . $imageExtension;

			move_uploaded_file($tmpName, '../img/' . $newImageName);

			$query = "UPDATE kamar SET nama_kamar = '$nama_kamar', fasilitas_kamar = '$fasilitas_kamar', jumlah_kasur = '$jumlah_kasur', gambar_kamar = '$newImageName' where id_kamar = '$id_kamar'";

			mysqli_query($koneksi, $query);

			unlink('../img/' . $gambar_lama);

			echo "<script> 
					alert('Berhasil Mengedit');
					location.replace('admin.php?page=kamar');
				</script>";
		}
	}
}
