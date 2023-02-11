<?php

$servername = "localhost"; 	// NAMA SERVER
$username	= "root";		// USERNAME SERVER
$password	= "";			// PASSWORD SERVER, DISINI PASSWORD SERVER KITA KOSONG
$database	= "db_hotel";	// NAMA DATABASE

// BUAT VARIABEL KONEKSI YANG MENJALANKAN ARGUMEN AGAR TERKONEKSI KE SERVER DAN DATABASE
$koneksi = mysqli_connect($servername, $username, $password, $database);

// CEK JIKA KONEKSI GAGAL TERHUBUNG KE SERVER DAN DATABASE
if (!$koneksi) {

	// JIKA TIDAK TERKONEKSI, JALANKAN FUNGSI die YANG MENCETAK PESAN SEKALIGUS MENGELUARKAN PROGRAM INI
	die('Koneksi database gagal terhubung : ' . mysqli_connect_error());
}
