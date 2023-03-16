<?php 

session_start();

$level = $_SESSION['level']; 

include 'koneksi.php';

if (isset($_POST['kirim_pesan'])) {
	$nama_pengirim	= $_POST['nama_pengirim'];
	$level			= $_POST['level'];
	$jam			= $_POST['jam'];
	$tanggal		= $_POST['tanggal'];

	$pesan			= htmlspecialchars($_POST['pesan']);

	$query_kirim	= "INSERT into percakapan set nama_pengirim = '$nama_pengirim', level = '$level', jam = '$jam', tanggal = '$tanggal', pesan = '$pesan'";
	$kirim_pesan	= mysqli_query($koneksi, $query_kirim);

	if ($kirim_pesan) {
		header('Location: ../petugas/' . $level . '.php');
	} else {
		echo "<script>
			alert('Pesan gagal terkirim!');
		</script>";
		header('Location: ../petugas/' . $level . '.php');
	}
}


 ?>