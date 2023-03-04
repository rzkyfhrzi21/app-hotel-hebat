<?php

include 'koneksi.php';

if (isset($_GET['booking_kamar'])) {
    $tipe_kamar     = $_GET['tipe_kamar'];
    $check_in       = $_GET['check_in'];
    $check_out      = $_GET['check_out'];
    $jumlah_kamar   = $_GET['jumlah_kamar'];

    header('Location: ../booking.php?tipe_kamar=' . $tipe_kamar . '&check_in=' . $check_in . '&check_out=' . $check_out . '&jumlah_kamar=' . $jumlah_kamar);
}

if (isset($_GET['book_now'])) {
    $nama_kamar     = $_GET['nama_kamar'];

    header('Location: ../booking.php?tipe_kamar=' . $nama_kamar);
}
