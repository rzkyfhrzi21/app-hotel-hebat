<?php

$servername = "localhost";
$username	= "root";
$password	= "";
$database	= "db_hotel";

$koneksi = mysqli_connect($servername, $username, $password, $database);

if (!$koneksi) {
	die('Koneksi database gagal terhubung : ' . mysqli_connect_error());
}
