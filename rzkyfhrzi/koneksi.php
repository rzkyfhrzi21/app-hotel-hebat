<?php

$koneksi = mysqli_connect("localhost", "root", "", "db-hotel");

if (!$koneksi) {
    echo "Koneksi gagal tersambung" . mysqli_connect_error();
}
