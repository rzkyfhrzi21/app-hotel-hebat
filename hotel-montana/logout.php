<?php

// MULAI EKSEKUSI SEMUA SESSION PADA SERVER DAN SIMPAN DI BROWSER
session_start();

// HAPUS SEMUA VARIABEL SESI
session_unset();

// HAPUS SEMUA SESI YANG TERSEDIA
session_destroy();

// REFRESH HALAMAN KE INDEX.PHP
header("location: index.php");
