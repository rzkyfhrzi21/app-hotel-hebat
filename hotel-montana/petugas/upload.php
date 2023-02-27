<?php

require '../koneksi.php';
if (isset($_POST["proses"])) {

	$nama_kamar			= $_POST["nama_kamar"];
	$fasilitas_kamar 	= $_POST["fasilitas_kamar"];
	$jumlah_kasur		= $_POST["jumlah_kasur"];

	if ($_FILES["gambar_kamar"]["error"] == 4) {
		echo "<script> 
				alert('Harap Masukkan Gambar');
				location.replace('admin.php?page=kamar');
			</script>";
	} else {
		$fileName	= $_FILES["gambar_kamar"]["name"];
		$fileSize	= $_FILES["gambar_kamar"]["size"];
		$tmpName	= $_FILES["gambar_kamar"]["tmp_name"];

		$validImageExtension 	= ['jpg', 'jpeg', 'png'];
		$imageExtension 		= explode('.', $fileName);
		$imageExtension 		= strtolower(end($imageExtension));

		if (!in_array($imageExtension, $validImageExtension)) {
			echo "<script>
					alert('Format Gambar Invalid');
					location.replace('admin.php?page=kamar');
				</script>";
		} else if ($fileSize > 100000000) { // angka 0 ada 7 digit atau dibaca 10 juta atau 10.000.000
			echo "<script> 
					alert('Ukuran Gambar Terlalu Besar');
					location.replace('admin.php?page=kamar');
				</script>";
		} else {
			$newImageName = uniqid();
			$newImageName .= '.' . $imageExtension;

			move_uploaded_file($tmpName, '../img/' . $newImageName);

			$query = "INSERT INTO kamar VALUES('', '$nama_kamar', '$fasilitas_kamar', '$jumlah_kasur','$newImageName')";

			mysqli_query($koneksi, $query);

			echo "<script> 
					alert('Berhasil Menambah');
					location.replace('admin.php?page=kamar');
				</script>";
		}
	}
}
