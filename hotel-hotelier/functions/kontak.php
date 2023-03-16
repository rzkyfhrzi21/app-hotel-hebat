<?php 

include 'koneksi.php';

if (isset($_POST['kontak'])) {
	$nama	= htmlspecialchars($_POST['nama']);
	$judul	= htmlspecialchars($_POST['judul']);
	$email	= htmlspecialchars($_POST['email']);
	$pesan	= htmlspecialchars($_POST['pesan']);

	$query_kontak	= "INSERT into kontak set nama = '$nama', judul = '$judul', email = '$email', pesan = '$pesan'";
	$kontak	= mysqli_query($koneksi, $query_kontak);

	if ($kontak) {
		echo "<script>
			alert('Pesan berhasil terkirim!');
			alert('Tunggu jawaban dari kami di email anda.');
			location.replace('../kontak.php');
			</script>";
	} else {
		echo "<script>
			alert('Pesan gagal terkirim!');
			location.replace('../kontak.php');
		</script>";
	}
}

if (isset($_POST['balas_kontak'])) {
	$nama	= htmlspecialchars($_POST['nama']);
	$judul	= htmlspecialchars($_POST['judul']);
	$email	= htmlspecialchars($_POST['email']);
	$pesan	= htmlspecialchars($_POST['pesan']);

	header('Location: ../petugas/admin.php?page=kontak');

	$kirim_email = mail($nama, $judul, $pesan);

	// if ($kirim_email) {
	// 	echo "<script>
	// 		location.replace('../petugas/admin.php?page=kontak');
	// 	</script>";
	// } else {
	// 	echo "<script>
	// 		location.replace('../petugas/admin.php?page=kontak');
	// 	</script>";
	// }

}

if (isset($_POST['hapus_kontak'])) {
	$id_kontak		= $_POST['id_kontak'];

	$query_hapus 	= "DELETE from kontak where id_kontak = '$id_kontak'";
	$hapus_kontak 	= mysqli_query($koneksi, $query_hapus);

	if ($hapus_kontak) {
		echo "<script>
			alert('Pertanyaan berhasil dihapus!');
			location.replace('../petugas/admin.php?page=kontak');
		</script>";
	} else {
		echo "<script>
			alert('Pertanyaan gagal dihapus!');
			location.replace('../petugas/admin.php?page=kontak');
		</script>";
	}

}

 ?>