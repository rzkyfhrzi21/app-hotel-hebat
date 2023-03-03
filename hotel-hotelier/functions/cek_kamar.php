<?php

include 'koneksi.php';

if (isset($_POST['booking_kamar'])) {
    $nama           = $_GET['nama'];
    $check_in       = $_GET['check_in'];
    $check_out      = $_GET['check_out'];
    $jumlah_kasur   = $_GET['jumlah_kasur'];

    header('Location: ../booking.php?nama=' . $nama . '?check_in=' . $check_in . '?check_out=' . $check_out . '?jumlah_kasur=' . $jumlah_kasur);
}
