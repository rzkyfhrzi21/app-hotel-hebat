<?php

session_start();

if (isset($_POST['login'])) {

	include 'koneksi.php';

	$username	= $_POST['username'];
	$password	= md5($_POST['password']);

	$admin 	= mysqli_query($koneksi, "SELECT * FROM petugas WHERE username = '$username' and password = '$password'");
	$log 	= mysqli_num_rows($admin);
	$r 		= mysqli_fetch_array($admin);

	if ($log > 0) {
		$_SESSION['username'] 	= $username;
		$_SESSION['password'] 	= $password;
		$_SESSION['nama'] 		= $r['nama_petugas'];
		$_SESSION['level'] 		= $r['level'];

		if ($r['level'] == 'admin') {
			header("location: petugas/admin.php");
		} elseif ($r['level'] == 'resepsionis') {
			header("location: petugas/resepsionis.php");
		} else {
			header("location: login.php?level akun tidak diketahui");
		}
	} else {
		header("location: login.php?akun tidak ditemukan");
	}
}
