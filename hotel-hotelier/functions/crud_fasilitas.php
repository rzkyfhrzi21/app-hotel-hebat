<?php 

include 'koneksi.php';

function uploadFasilitas() {

	$nama_gambar 	= $_FILES['gambar_fasilitas']['name'];
	$size_gambar 	= $_FILES['gambar_fasilitas']['size'];
	$tmp_name 		= $_FILES['gambar_fasilitas']['tmp_name'];

	$valid_gambar	= ['png', 'jpeg', 'jpg'];
	$extensi_gambar	= explode('.', $nama_gambar);
	$extensi_gambar	= strtolower(end($extensi_gambar));

	if (!in_array($extensi_gambar, $valid_gambar)) {
		echo "<script>
				alert('Exstensi gambar tidak valid!');
				location.replace('../petugas/admin.php?page=fasilitas');
			</script>";
	} else if ($size_gambar > 10000000) {
		echo "<script>
				alert('Ukuran gambar terlalu besar!');
				location.replace('../petugas/admin.php?page=fasilitas');
			</script>";
	} else {
		$gambar_baru 	= uniqid();
		$gambar_baru 	.= '.' . $extensi_gambar;

		move_uploaded_file($tmp_name, '../img/fasilitas/' . $gambar_baru);

		return $gambar_baru;
	}
}

if (isset($_POST['tambah_fasilitas'])) {
	$nama_fasilitas		= htmlspecialchars($_POST['nama_fasilitas']); 
	$ket_fasilitas		= htmlspecialchars($_POST['ket_fasilitas']);

	$sql_fasilitas		= mysqli_query($koneksi, "SELECT * from fasilitas where nama_fasilitas = '$nama_fasilitas'");
	$cek_fasilitas		= mysqli_num_rows($sql_fasilitas);

	if ($cek_fasilitas > 0) {
			echo "<script>
				alert('Maaf, Fasilitas telah ada!');
				location.replace('../petugas/admin.php?page=fasilitas');
			</script>";
	} else {

		if ($_FILES['gambar_fasilitas']['error'] == 4) {
				echo "<script>
					alert('Harap masukkan gambar!');
					location.replace('../petugas/admin.php?page=fasilitas');
				</script>";
		} else {
			$gambar_fasilitas	= uploadFasilitas();

			$query_tambah 		= "INSERT into fasilitas set nama_fasilitas = '$nama_fasilitas', ket_fasilitas = '$ket_fasilitas', gambar_fasilitas = '$gambar_fasilitas'";
			$tambah_fasilitas 	= mysqli_query($koneksi, $query_tambah);

			if ($tambah_fasilitas) {
				echo "<script>
					alert('Fasilitas berhasil ditambahkan!');
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
}

if (isset($_POST['ubah_fasilitas'])) {
	$nama_fasilitas		= htmlspecialchars($_POST['nama_fasilitas']); 
	$ket_fasilitas		= htmlspecialchars($_POST['ket_fasilitas']);

	$id_fasilitas		= $_POST['id_fasilitas'];
	$gambar_lama		= $_POST['gambar_fasilitas'];

	if ($_FILES['gambar_fasilitas']['error'] == 4) {
		$gambar_fasilitas	= $gambar_lama;
	} else {
		unlink('../img/fasilitas/' . $gambar_lama);
		$gambar_fasilitas	= uploadFasilitas();
	}

	$query_ubah 		= "UPDATE fasilitas set nama_fasilitas = '$nama_fasilitas', ket_fasilitas = '$ket_fasilitas', gambar_fasilitas = '$gambar_fasilitas' where id_fasilitas = '$id_fasilitas'";
	$ubah_fasilitas 	= mysqli_query($koneksi, $query_ubah);

	if ($ubah_fasilitas) {
		echo "<script>
			alert('Fasilitas berhasil diubah!');
			location.replace('../petugas/admin.php?page=fasilitas');
		</script>";
	} else {
		echo "<script>
			alert('Fasilitas gagal diubah!');
			location.replace('../petugas/admin.php?page=fasilitas');
		</script>";
	}
}

if (isset($_POST['hapus_fasilitas'])) {
	$id_fasilitas		= $_POST['id_fasilitas'];
	$gambar_lama		= $_POST['gambar_fasilitas'];

	$query_hapus 		= "DELETE from fasilitas where id_fasilitas = '$id_fasilitas'";
	$hapus_fasilitas 	= mysqli_query($koneksi, $query_hapus);

	if ($hapus_fasilitas) {
		unlink('../img/fasilitas/' . $gambar_lama);
		echo "<script>
			alert('Fasilitas berhasil dihapus!');
			location.replace('../petugas/admin.php?page=fasilitas');
		</script>";
	} else {
		echo "<script>
			alert('Fasilitas gagal dihapus!');
			location.replace('../petugas/admin.php?page=fasilitas');
		</script>";
	}

}



 ?>