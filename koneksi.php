<?php

$koneksi = mysqli_connect("localhost", "root", "", "db_hotel");

if (!$koneksi) {
    echo "Koneksi gagal tersambung" . mysqli_connect_error();
}
