<?php

require '../koneksi.php';

if (isset($_POST["proses"])) {

	$id_fasilitas 	= $_POST['id_fasilitas'];

	$nama_fasilitas	= $_POST["nama_fasilitas"];
	$ket_fasilitas 	= $_POST["ket_fasilitas"];

	$gambar_lama 	= $_POST['gambar_lama'];

	if ($_FILES["gambar"]["error"] == 4) {

		$query = "UPDATE fasilitas SET nama_fasilitas = '$nama_fasilitas', ket_fasilitas ='$ket_fasilitas' where id_fasilitas ='$id_fasilitas'";

		mysqli_query($koneksi, $query);

		echo "<script> 
				alert('Berhasil Mengedit');
				location.replace('admin.php?page=fasilitas');
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

			$query = "UPDATE fasilitas SET nama_fasilitas = '$nama_fasilitas', ket_fasilitas = '$ket_fasilitas', gambar_fasilitas = '$newImageName' where id_fasilitas = '$id_fasilitas'";

			mysqli_query($koneksi, $query);

			unlink('../img/' . $gambar_lama);

			echo "<script> 
					alert('Berhasil Mengedit');
					location.replace('admin.php?page=fasilitas');
				</script>";
		}
	}
}
