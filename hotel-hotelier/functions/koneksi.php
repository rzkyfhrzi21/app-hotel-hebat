<?php

// UNTUK PENGGUNAAN XAMPP
// $server     = 'localhost: 3306';
// $username   = 'u2ehk1nn_rzkyfhrzi21';
// $password   = 'RIZKY12321RIZKY';
// $database   = 'u2ehk1nn_db_hotelhebat';

// UNTUK HOSTING PHP.NET
$server     = 'localhost';
$username   = 'root';
$password   = '';
$database   = 'db-hotel-hebat';

$koneksi    = mysqli_connect($server, $username, $password, $database);

if (!$koneksi) {
    die();
}

date_default_timezone_set('Asia/Jakarta');

$pukul = date('H:i A');
