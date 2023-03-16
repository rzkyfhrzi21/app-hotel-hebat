<?php

include 'functions/data.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Hotel Hebat - UKK RPL</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <?php include 'assets/css.php'; ?>
</head>

<body>
    <div class="container-xxl bg-white p-0">

        <!-- Header Start -->
        <div class="container-fluid bg-dark px-0">
            <div class="row gx-0">
                <div class="col-lg-3 bg-dark d-none d-lg-block">
                    <a href="./" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <h1 class="m-0 text-primary text-uppercase">Hotel Hebat</h1>
                    </a>
                </div>
                <div class="col-lg-9">
                    <div class="row gx-0 bg-white d-none d-lg-flex">
                        <div class="col-lg-7 px-5 text-start">
                            <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                                <i class="fa fa-envelope text-primary me-2"></i>
                                <p class="mb-0">rizkyfahrezi@xiirpl.com</p>
                            </div>
                            <div class="h-100 d-inline-flex align-items-center py-2">
                                <i class="fa fa-phone-alt text-primary me-2"></i>
                                <p class="mb-0">+62 851 7320 0421</p>
                            </div>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                        <a href="./" class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 text-primary text-uppercase">Hotel Hebat</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <a href="./" class="nav-item nav-link active">Home</a>
                                <a href="kamar.php" class="nav-item nav-link">Kamar</a>
                                <a href="fasilitas.php" class="nav-item nav-link">Fasilitas</a>
                                <a href="petugas.php" class="nav-item nav-link">Petugas</a>
                                <a href="kontak.php" class="nav-item nav-link">Kontak</a>
                            </div>
                            <a href="pesan_kamar.php" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block">Pesan Kamar<i class="fa fa-arrow-right ms-3"></i></a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="template1/img/carousel-1.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Hotel Hebat</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown">Nikmati Hotel Mewah Terbaik</h1>
                                <a href="kamar.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Cek Kamar</a>
                                <a href="pesan_kamar.php" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Pesan Kamar</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="template1/img/carousel-2.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Hotel Hebat</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown">Nikmati Hotel Mewah Terbaik</h1>
                                <a href="kamar.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Cek Kamar</a>
                                <a href="pesan_kamar.php" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Pesan Kamar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Booking Start -->
        <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="bg-white shadow" style="padding: 35px;">
                    <form action="functions/pesan_kamar.php" method="post" autocomplete="off">
                        <div class="row g-2">
                            <div class="col-md-10">
                                <div class="row g-2">
                                    <!--                                 <div class="col-md-3">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text" name="check_in" class="form-control datetimepicker-input"
                                            placeholder="Check In" data-target="#date1" data-toggle="datetimepicker" required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="date" id="date2" data-target-input="nearest">
                                        <input type="text" name="check_out" class="form-control datetimepicker-input" placeholder="Check Out" data-target="#date2" data-toggle="datetimepicker" required />
                                    </div>
                                </div> -->
                                    <div class="col-md-3">
                                        <input type="date" name="check_in" class="form-control" required>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="date" name="check_out" class="form-control" required>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-select" name="nama_kamar" required>
                                            <option value="">Tipe Kamar</option>
                                            <?php

                                            include 'functions/koneksi.php';

                                            $sql_kamar = mysqli_query($koneksi, "SELECT * from kamar");

                                            while ($kamar = mysqli_fetch_array($sql_kamar)) :

                                            ?>
                                                <option value="<?= $kamar['nama_kamar']; ?>"><?= $kamar['nama_kamar']; ?></option>
                                            <?php endwhile ?>

                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" name="jumlah_kamar" class="form-control" placeholder="Jumlah Kamar" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <button type="submit" name="pesan" class="btn btn-primary w-100">Pesan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Booking End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h6 class="section-title text-start text-primary text-uppercase">Tentang Kami</h6>
                        <h1 class="mb-4">Selamat Datang Di <br><span class="text-primary text-uppercase">Hotel Hebat</span></h1>
                        <p class="mb-4">Lepaskan diri anda ke Hotel Hebat, dikelilingi oleh keindahan pegunungan yang indah dan pantai yang cantik. Nikmati sore yang hangat dan berenang di kolam renang dengan pemandangan matahari terbenam yang memukau. <br><br>
                            Kids Club yang luas menawarkan beragam fasilitas dan kegiatan anak-anak yang akan melengkapi kenyamanan keluarga. Convention Center kami, dilengkapi pelayanan lengkap dan ruang konvensi terbesar di Lampung, mampu mengakomodasi hingga 3.000 delegasi.
                            Manfaatkan ruang penyelenggaraan konvensi M.I.C.E ataupun wujudkan acara pernikahan adat yang mewah.</p>
                        <div class="row g-3 pb-4">
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-hotel fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up"><?= $total_kamar; ?></h2>
                                        <p class="mb-0">Kamar</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up"><?= $total_petugas; ?></h2>
                                        <p class="mb-0">Petugas</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up"><?= $total_klien; ?></h2>
                                        <p class="mb-0">Klien</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="fasilitas.php">Lihat Fasilitas</a>
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="template1/img/about-1.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="template1/img/about-2.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="img/dashboard1.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="img/dashboard2.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Room Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Kamar</h6>
                    <h1 class="mb-5">Kamar Yang Tersedia</span></h1>
                </div>
                <div class="row g-4">
                    <?php

                    include 'functions/koneksi.php';

                    $sql_kamar = mysqli_query($koneksi, "SELECT * from kamar limit 6");

                    while ($kamar = mysqli_fetch_array($sql_kamar)) :

                    ?>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="room-item shadow rounded overflow-hidden">
                                <div class="position-relative">
                                    <img class="img-fluid" src="img/kamar/<?= $kamar['gambar_kamar']; ?>" title="<?= $kamar['nama_kamar']; ?>" alt="gambar error">
                                    <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">Rp <?= $kamar['harga_kamar']; ?>/Malam</small>
                                </div>
                                <div class="p-4 mt-2">
                                    <div class="d-flex justify-content-between mb-3">
                                        <h5 class="mb-0"><?= $kamar['nama_kamar']; ?></h5>
                                        <div class="ps-2">
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i><?= $kamar['jumlah_kasur']; ?> Kasur</small>
                                        <small class="border-end me-3 pe-3"><i class="fa fa-hotel text-primary me-2"></i><?= $kamar['ukuran_kamar']; ?> M<sup>2</sup></small>
                                        <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                    </div>
                                    <p class="text-body mb-3"><?= $kamar['ket_kamar']; ?></p>
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-sm btn-dark rounded py-2 px-4" href="pesan_kamar.php?nama_kamar=<?= $kamar['nama_kamar']; ?>">Pesan Kamar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile ?>
                </div>
            </div>
        </div>
        <!-- Room End -->

        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Fasilitas</h6>
                    <h1 class="mb-5">Fasilitas Yang Terbaik<span class="text-primary text-uppercase"></span></h1>
                </div>
                <div class="row g-4">
                    <?php

                    include 'functions/koneksi.php';

                    $sql_fasilitas = mysqli_query($koneksi, "SELECT * from fasilitas limit 6");

                    while ($fasilitas = mysqli_fetch_array($sql_fasilitas)) :

                    ?>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <a class="service-item rounded">
                                <div class="service-icon bg-transparent border rounded p-1">
                                    <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                        <img src="img/fasilitas/<?= $fasilitas['gambar_fasilitas']; ?>" title="<?= $fasilitas['nama_fasilitas']; ?>" alt="gambar error" width="150">
                                    </div>
                                </div>
                                <h5 class="mb-3"><?= $fasilitas['nama_fasilitas']; ?></h5>
                                <p class="text-body mb-0"><?= $fasilitas['ket_fasilitas']; ?></p>
                            </a>
                        </div>
                    <?php endwhile ?>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Newsletter Start -->
        <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="row justify-content-center">
                <div class="col-lg-10 border rounded p-1">
                    <div class="border rounded text-center p-1">
                        <div class="bg-white rounded text-center p-5">
                            <h4 class="mb-4">Berlangganan untuk menerima <span class="text-primary text-uppercase">Berita Terbaru</span></h4>
                            <div class="position-relative mx-auto" style="max-width: 400px;">
                                <form action="functions/berlangganan.php" method="post" autocomplete="off">
                                    <input name="email_berlangganan" class="form-control w-100 py-3 ps-4 pe-5" type="text" placeholder="Alamat Email Anda" required>
                                    <button type="submit" name="berlangganan" class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">Kirim</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter Start -->


        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Hotel Hebat</a>, Rekayasa Perangkat Lunak.
                            Dibuat dengan ❤ oleh <a class="border-bottom" href="https://linktr.ee/rzkyfhrzi21">Rizky Fahrezi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <?php include 'assets/js.php'; ?>
</body>

</html>