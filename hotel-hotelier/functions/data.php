<?php 

include 'koneksi.php';

$sql_totalKamar 	= mysqli_query($koneksi, "SELECT * from kamar");
$total_kamar		= mysqli_num_rows($sql_totalKamar);

$sql_totalFasilitas	= mysqli_query($koneksi, "SELECT * from fasilitas");
$total_fasilitas	= mysqli_num_rows($sql_totalFasilitas);

$sql_totalPelanggan	= mysqli_query($koneksi, "SELECT * from langganan");
$total_pelanggan	= mysqli_num_rows($sql_totalPelanggan);

$sql_totalPetugas 	= mysqli_query($koneksi, "SELECT * from petugas");
$total_petugas		= mysqli_num_rows($sql_totalPetugas);

$sql_totalKlien 	= mysqli_query($koneksi, "SELECT * from pemesanan order by id_pemesanan desc");
$fetch_petugas		= mysqli_fetch_array($sql_totalKlien);
$total_klien		= $fetch_petugas['id_pemesanan'];

 ?>