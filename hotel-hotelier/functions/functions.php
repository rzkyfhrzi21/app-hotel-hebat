<?php

include 'koneksi.php';

$sql_kamar      = mysqli_query($koneksi, "SELECT * from kamar");
$sql_fasilitas  = mysqli_query($koneksi, "SELECT * from fasilitas");
$sql_petugas    = mysqli_query($koneksi, "SELECT * from petugas");
$sql_pemesanan  = mysqli_query($koneksi, "SELECT * from pemesanan");

$ray_kamar      = mysqli_fetch_array($sql_kamar);
$ray_fasilitas  = mysqli_fetch_array($sql_fasilitas);
$ray_petugas    = mysqli_fetch_array($sql_petugas);
$ray_pemesanan  = mysqli_fetch_array($sql_pemesanan);

$row_kamar      = mysqli_num_rows($sql_kamar);
$row_fasilitas  = mysqli_num_rows($sql_fasilitas);
$row_petugas    = mysqli_num_rows($sql_petugas);
$row_pemesanan  = mysqli_num_rows($sql_pemesanan);

$sql_totalpemesanan = mysqli_query($koneksi, "SELECT * from pemesanan order by id_pemesanan desc limit 1");

$total_pemesanan = mysqli_fetch_array($sql_totalpemesanan);
