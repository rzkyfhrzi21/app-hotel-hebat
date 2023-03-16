<?php 

include 'koneksi.php';

if (isset($_POST['berlangganan'])) {
	$email		= htmlspecialchars($_POST['email_berlangganan']);

	$sql_langganan	= mysqli_query($koneksi, "SELECT * from langganan where email = '$email'");
	$cek_email		= mysqli_num_rows($sql_langganan);

	if ($cek_email > 0) {
			echo "<script>
				alert('Maaf, Email telah berlangganan!');
				location.replace('../');
			</script>";
	} else {

		$query_langganan 	= "INSERT into langganan set email = '$email'";
		$berlangganan 		= mysqli_query($koneksi, $query_langganan);

		if ($berlangganan) {
			echo "<script>
				alert('Selamat anda telah berlangganan dan akan sering menerima berita dari kami!');
				location.replace('../');
			</script>";
		} else {
			echo "<script>
				alert('Maaf, anda gagal untuk berlangganan!');
				location.replace('../');
			</script>";
		}
	}
}

 ?>