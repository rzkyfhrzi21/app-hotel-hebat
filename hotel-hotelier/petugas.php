<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tim - UKK RPL</title>
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
                                <a href="./" class="nav-item nav-link">Home</a>
                                <a href="kamar.php" class="nav-item nav-link">Kamar</a>
                                <a href="fasilitas.php" class="nav-item nav-link">Fasilitas</a>
                                <a href="petugas.php" class="nav-item nav-link active">Petugas</a>
                                <a href="kontak.php" class="nav-item nav-link">Kontak</a>
                            </div>
                            <a href="pesan_kamar.php" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block">Pesan Kamar<i class="fa fa-arrow-right ms-3"></i></a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(template1/img/carousel-1.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Hotel Hebat</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="./">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Petugas</li>
                            <li class="breadcrumb-item"><a href="auth/login.php">Login</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


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


        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Petugas</h6>
                    <h1 class="mb-5">Petugas Yang Aktif</h1>
                </div>
                <div class="row g-4">
                    <?php

                    include 'functions/koneksi.php';

                    $sql_petugas = mysqli_query($koneksi, "SELECT * from petugas");

                    while ($petugas = mysqli_fetch_array($sql_petugas)) :

                    ?>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="rounded shadow overflow-hidden">
                                <div class="position-relative">
                                    <img class="img-fluid" src="template1/img/team-3.jpg" alt="">
                                    <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="text-center p-4 mt-3">
                                    <h5 class="fw-bold mb-0"><?= $petugas['nama_petugas']; ?></h5>
                                    <small style="text-transform: capitalize;"><?= $petugas['level']; ?></small>
                                </div>
                            </div>
                        </div>
                    <?php endwhile ?>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Newsletter Start -->
        <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="row justify-content-center">
                <div class="col-lg-10 border rounded p-1">
                    <div class="border rounded text-center p-1">
                        <div class="bg-white rounded text-center p-5">
                            <h4 class="mb-4">Berlangganan untuk menerima <span class="text-primary text-uppercase">Berita Terbaru</span></h4>
                            <div class="position-relative mx-auto" style="max-width: 400px;">
                                <form action="functions/berlangganan.php" method="post" autocomplete="off">
                                    <input name="email_berlangganan" class="form-control w-100 py-3 ps-4 pe-5" type="text" placeholder="Alamat Email Anda" required="">
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

</html>