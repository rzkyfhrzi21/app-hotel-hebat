<?php

$koneksi = mysqli_connect("localhost", "root", "", "db-hotel-hebat");

if (!$koneksi) {
    die('Koneksi tidak terhubung' . mysqli_connect_error());
}
