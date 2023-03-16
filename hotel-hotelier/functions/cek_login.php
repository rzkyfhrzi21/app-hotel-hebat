<?php 

session_start();

include 'koneksi.php';

if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$sql_login = mysqli_query($koneksi, "SELECT * from petugas where username = '$username' and password = '$password'");
	$jumlah_petugas = mysqli_num_rows($sql_login);
	$data_petugas	= mysqli_fetch_array($sql_login);

	if ($jumlah_petugas > 0) {
		$_SESSION['nama_petugas'] 	= $data_petugas['nama_petugas'];
		$_SESSION['level'] 			= $data_petugas['level'];
		$_SESSION['id_petugas'] 	= $data_petugas['id_petugas'];

		if ($data_petugas['level'] == 'admin') {
			header('Location: ../petugas/admin.php');
		} else if ($data_petugas['level'] == 'resepsionis') {
			header('Location: ../petugas/resepsionis.php');
		} else {
			echo "<script>
				alert('Level petugas tidak diketahui!');
				location.replace('../auth/login.php');
			</script>";
		}

	} else {
		echo "<script>
				alert('Petugas tidak ditemukan!');
				location.replace('../auth/login.php');
			</script>";
	}
}



 ?>