<?php

require '../koneksi.php';

if (isset($_POST["proses"])) {

	$nama_fasilitas	= $_POST["nama_fasilitas"];
	$ket_fasilitas 	= $_POST["ket_fasilitas"];

	if ($_FILES["gambar_fasilitas"]["error"] == 4) {
		echo "<script>
				alert('Harap Masukkan Gambar');
				location.replace('admin.php?page=fasilitas');
			</script>";
	} else {
		$fileName	= $_FILES["gambar_fasilitas"]["name"];
		$fileSize	= $_FILES["gambar_fasilitas"]["size"];
		$tmpName	= $_FILES["gambar_fasilitas"]["tmp_name"];

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

			$query = "INSERT INTO fasilitas SET nama_fasilitas = '$nama_fasilitas', ket_fasilitas = '$ket_fasilitas', gambar_fasilitas = '$newImageName'";

			mysqli_query($koneksi, $query);

			echo "<script> 
					alert('Berhasil Menambah');
					location.replace('admin.php?page=fasilitas');
				</script>";
		}
	}
}
