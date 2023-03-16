<?php 

include 'koneksi.php';

$id_pemesanan 	= $_GET['id'];

$status_selesai = 'selesai';

$query_selesai		= "UPDATE pemesanan set status = '$status_selesai' where id_pemesanan = '$id_pemesanan'";
$pesanan_selesai	= mysqli_query($koneksi, $query_selesai);

if ($pesanan_selesai) {
	echo "<script>
			location.replace('../petugas/resepsionis.php?page=pesananselesai');
		</script>";
} else {
	echo "<script>
			alert('Gagal mengubah status!');
			location.replace('../petugas/resepsionis.php?page=reservasi');
		</script>";
}


 ?>