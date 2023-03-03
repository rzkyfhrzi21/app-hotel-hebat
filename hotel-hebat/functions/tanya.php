<?php

if (isset($_POST['kirim_pertanyaan'])) {
    $nama   = htmlspecialchars($_POST['nama']);
    $email  = htmlspecialchars($_POST['email']);
    $pesan  = htmlspecialchars($_POST['pesan']);



    header('location: https://api.whatsapp.com/send?phone=6285173200421&text=Hai. Nama saya' . $nama . ', email: ' . $email . '. Saya punya pertanyaan :' . $pesan . '.Bisakah anda menolong saya?');
}
