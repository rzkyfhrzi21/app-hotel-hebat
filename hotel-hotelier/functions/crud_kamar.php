<?php 

include 'koneksi.php';

function uploadKamar() {

	$nama_gambar 	= $_FILES['gambar_kamar']['name'];
	$size_gambar 	= $_FILES['gambar_kamar']['size'];
	$tmp_name 		= $_FILES['gambar_kamar']['tmp_name'];

	$valid_gambar	= ['png', 'jpeg', 'jpg'];
	$extensi_gambar	= explode('.', $nama_gambar);
	$extensi_gambar	= strtolower(end($extensi_gambar));

	if (!in_array($extensi_gambar, $valid_gambar)) {
		echo "<script>
				alert('Exstensi gambar tidak valid!');
				location.replace('../petugas/admin.php?page=kamar');
			</script>";
	} else if ($size_gambar > 10000000) {
		echo "<script>
				alert('Ukuran gambar terlalu besar!');
				location.replace('../petugas/admin.php?page=kamar');
			</script>";
	} else {
		$gambar_baru 	= uniqid();
		$gambar_baru 	.= '.' . $extensi_gambar;

		move_uploaded_file($tmp_name, '../img/kamar/' . $gambar_baru);

		return $gambar_baru;
	}
}

if (isset($_POST['tambah_kamar'])) {
	$nama_kamar		= htmlspecialchars($_POST['nama_kamar']); 
	$ket_kamar		= htmlspecialchars($_POST['ket_kamar']);
	$harga_kamar	= htmlspecialchars($_POST['harga_kamar']); 
	$jumlah_kasur	= htmlspecialchars($_POST['jumlah_kasur']);
	$ukuran_kamar	= htmlspecialchars($_POST['ukuran_kamar']);

	$sql_kamar		= mysqli_query($koneksi, "SELECT * from kamar where nama_kamar = '$nama_kamar'");
	$cek_kamar		= mysqli_num_rows($sql_kamar);

	if ($cek_kamar > 0) {
			echo "<script>
				alert('Maaf, Kamar telah ada!');
				location.replace('../petugas/admin.php?page=kamar');
			</script>";
	} else {

		if ($_FILES['gambar_kamar']['error'] == 4) {
				echo "<script>
					alert('Harap masukkan gambar!');
					location.replace('../petugas/admin.php?page=kamar');
				</script>";
		} else {
			$gambar_kamar	= uploadKamar();

			$query_tambah 		= "INSERT into kamar set nama_kamar = '$nama_kamar', harga_kamar = '$harga_kamar',  jumlah_kasur = '$jumlah_kasur', ukuran_kamar = '$ukuran_kamar', ket_kamar = '$ket_kamar', gambar_kamar = '$gambar_kamar'";
			$tambah_kamar 	= mysqli_query($koneksi, $query_tambah);

			if ($tambah_kamar) {
				echo "<script>
					alert('Kamar berhasil ditambahkan!');
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
}

if (isset($_POST['ubah_kamar'])) {
	$nama_kamar		= htmlspecialchars($_POST['nama_kamar']); 
	$ket_kamar		= htmlspecialchars($_POST['ket_kamar']);
	$harga_kamar	= htmlspecialchars($_POST['harga_kamar']); 
	$jumlah_kasur	= htmlspecialchars($_POST['jumlah_kasur']);
	$ukuran_kamar	= htmlspecialchars($_POST['ukuran_kamar']);

	$id_kamar		= $_POST['id_kamar'];
	$gambar_lama	= $_POST['gambar_kamar'];

	if ($_FILES['gambar_kamar']['error'] == 4) {
		$gambar_kamar	= $gambar_lama;
	} else {
		unlink('../img/kamar/' . $gambar_lama);
		$gambar_kamar	= uploadKamar();
	}

	$query_ubah 		= "UPDATE kamar set nama_kamar = '$nama_kamar', harga_kamar = '$harga_kamar',  jumlah_kasur = '$jumlah_kasur', ukuran_kamar = '$ukuran_kamar', ket_kamar = '$ket_kamar', gambar_kamar = '$gambar_kamar' where id_kamar = '$id_kamar'";
	$ubah_kamar 	= mysqli_query($koneksi, $query_ubah);

	if ($ubah_kamar) {
		echo "<script>
			alert('Kamar berhasil diubah!');
			location.replace('../petugas/admin.php?page=kamar');
		</script>";
	} else {
		echo "<script>
			alert('Kamar gagal diubah!');
			location.replace('../petugas/admin.php?page=kamar');
		</script>";
	}
}

if (isset($_POST['hapus_kamar'])) {
	$id_kamar		= $_POST['id_kamar'];
	$gambar_lama	= $_POST['gambar_kamar'];

	$query_hapus 	= "DELETE from kamar where id_kamar = '$id_kamar'";
	$hapus_kamar 	= mysqli_query($koneksi, $query_hapus);

	if ($hapus_kamar) {
		unlink('../img/kamar/' . $gambar_lama);
		echo "<script>
			alert('Kamar berhasil dihapus!');
			location.replace('../petugas/admin.php?page=kamar');
		</script>";
	} else {
		echo "<script>
			alert('Kamar gagal dihapus!');
			location.replace('../petugas/admin.php?page=kamar');
		</script>";
	}

}



 ?>