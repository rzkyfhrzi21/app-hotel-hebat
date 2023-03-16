<?php 

include 'koneksi.php';

if (isset($_POST['hapus_pemesanan'])) {
	$id_pemesanan		= $_POST['id_pemesanan'];

	$query_hapus 		= "DELETE from pemesanan where id_pemesanan = '$id_pemesanan'";
	$hapus_pemesanan 	= mysqli_query($koneksi, $query_hapus);

	if ($hapus_pemesanan) {
		echo "<script>
			alert('Reservasi berhasil dihapus!');
			location.replace('../petugas/resepsionis.php?page=reservasi');
		</script>";
	} else {
		echo "<script>
			alert('Reservasi gagal dihapus!');
			location.replace('../petugas/resepsionis.php?page=reservasi');
		</script>";
	}

}



 ?>