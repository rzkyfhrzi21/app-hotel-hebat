<?php

include 'koneksi.php';

if (isset($_POST['pesan_kamar'])) {
	$nama_pemesan	= htmlspecialchars($_POST['nama_pemesan']);
	$check_in		= htmlspecialchars($_POST['check_in']);
	$check_out		= htmlspecialchars($_POST['check_out']);
	$jumlah_kamar	= htmlspecialchars($_POST['jumlah_kamar']);
	$nama_kamar		= htmlspecialchars($_POST['nama_kamar']);
	$email			= htmlspecialchars($_POST['email']);
	$no_hp			= htmlspecialchars($_POST['no_hp']);
	$catatan		= htmlspecialchars($_POST['catatan']);
	$status			= 'pending';

	$query_pesan	= "INSERT into pemesanan set nama_pemesan = '$nama_pemesan', check_in = '$check_in', check_out = '$check_out', jumlah_kamar = '$jumlah_kamar', nama_kamar = '$nama_kamar', email = '$email', no_hp = '$no_hp', catatan = '$catatan', status = '$status'";
	$pesan_kamar	= mysqli_query($koneksi, $query_pesan);

	if ($pesan_kamar) {
		echo "<script>
			alert('Kamar berhasil dipesan!');
			location.replace('../invoice.php');
			</script>";
	} else {
		echo "<script>
			alert('Kamar gagal dipesan!');
			location.replace('../pesan_kamar.php');
		</script>";
	}
}

if (isset($_POST['rsp_pesankamar'])) {
	$nama_pemesan	= htmlspecialchars($_POST['nama_pemesan']);
	$check_in		= htmlspecialchars($_POST['check_in']);
	$check_out		= htmlspecialchars($_POST['check_out']);
	$jumlah_kamar	= htmlspecialchars($_POST['jumlah_kamar']);
	$nama_kamar		= htmlspecialchars($_POST['nama_kamar']);
	$email			= htmlspecialchars($_POST['email']);
	$no_hp			= htmlspecialchars($_POST['no_hp']);
	$catatan		= htmlspecialchars($_POST['catatan']);

	$query_pesan	= "INSERT into pemesanan set nama_pemesan = '$nama_pemesan', check_in = '$check_in', check_out = '$check_out', jumlah_kamar = '$jumlah_kamar', nama_kamar = '$nama_kamar', email = '$email', no_hp = '$no_hp', catatan = '$catatan'";
	$pesan_kamar	= mysqli_query($koneksi, $query_pesan);

	if ($pesan_kamar) {
		echo "<script>
			location.replace('../petugas/resepsionis.php?page=pesankamar');
			</script>";
	} else {
		echo "<script>
			alert('Kamar gagal dipesan!');
			location.replace('../petugas/resepsionis.php?page=pesankamar');
		</script>";
	}
}

if (isset($_POST['pesan'])) {
	$check_in		= $_POST['check_in'];
	$check_out		= $_POST['check_out'];
	$nama_kamar		= $_POST['nama_kamar'];
	$jumlah_kamar	= $_POST['jumlah_kamar'];

	header('Location: ../pesan_kamar.php?nama_kamar=' . $nama_kamar . '&jumlah_kamar=' . $jumlah_kamar . '&check_in=' . $check_in . '&check_out=' . $check_out);
}
