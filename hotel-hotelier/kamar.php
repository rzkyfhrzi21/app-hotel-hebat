<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Hotelier - Hotel HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../bahan/Logo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="template1/lib/animate/animate.min.css" rel="stylesheet">
    <link href="template1/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="template1/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="template1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="template1/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">

        <!-- Header Start -->
        <div class="container-fluid bg-dark px-0">
            <div class="row gx-0">
                <div class="col-sm-3 bg-dark d-none d-lg-block">
                    <a href="index.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <h1 class="m-0 text-primary text-uppercase">Hotelier</h1>
                    </a>
                </div>
                <div class="col-lg-9">
                    <div class="row gx-0 bg-white d-none d-sm-flex">
                        <div class="col-lg-7 px-5 text-start">
                            <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                                <i class="fa fa-envelope text-primary me-2"></i>
                                <p class="mb-0">admin@hotelhebat.com</p>
                            </div>
                            <div class="h-100 d-inline-flex align-items-center py-2">
                                <i class="fa fa-phone-alt text-primary me-2"></i>
                                <p class="mb-0">+62 851 7320 0421</p>
                            </div>
                        </div>
                        <div class="col-lg-5 px-5 text-end">
                            <div class="d-inline-flex align-items-center py-2">
                                <!-- <a class="me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="me-3" href=""><i class="fab fa-instagram"></i></a>
                                <a class="" href=""><i class="fab fa-youtube"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                        <a href="index.html" class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 text-primary text-uppercase">Hotel Hebat</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <a href="index.php" class="nav-item nav-link">Home</a>
                                <a href="kamar.php" class="nav-item nav-link  active">Kamar</a>
                                <a href="fasilitas.php" class="nav-item nav-link">Fasilitas</a>
                                <a href="kontak.php" class="nav-item nav-link">Kontak</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Lain</a>
                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href="booking.php" class="dropdown-item">Pesan Kamar</a>
                                        <a href="login.php" class="dropdown-item">Login</a>
                                    </div>
                                </div>
                            </div>
                            <a href="booking.php" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block">Pesan Kamar<i class="fa fa-arrow-right ms-3"></i></a>
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
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Kamar</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Kamar</li>
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
                    <form action="functions/cek_kamar.php" method="get">
                        <div class="row g-2">
                            <div class="col-md-9">
                                <div class="row g-2">
                                    <div class="col-md-3">
                                        <div class="date" id="date1" data-target-input="nearest">
                                            <input type="text" name="check_in" class="form-control datetimepicker-input" placeholder="Tanggal Check in" data-target="#date1" data-toggle="datetimepicker" required />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="date" id="date2" data-target-input="nearest">
                                            <input type="text" name="check_out" class="form-control datetimepicker-input" placeholder="Tanggal Check out" data-target="#date2" data-toggle="datetimepicker" required />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-select" name="tipe_kamar" required>
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
                                        <input type="number" name="jumlah_kamar" placeholder="Jumlah Kamar" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-primary w-100" name="booking_kamar" type="submit">Cek</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Booking End -->


        <!-- Room Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">KAMAR</h6>
                    <h1 class="mb-5"> Kamar Yang Tersedia <span class="text-primary text-uppercase"></span></h1>
                </div>
                <div class="row g-4">
                    <?php
                    include 'functions/koneksi.php';

                    $sql_kamar = mysqli_query($koneksi, "SELECT * from kamar");

                    while ($kamar = mysqli_fetch_array($sql_kamar)) :

                    ?>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="room-item shadow rounded overflow-hidden">
                                <div class="position-relative">
                                    <img class="img-fluid" src="img/kamar/<?= $kamar['gambar_kamar']; ?>" alt="">
                                    <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">Rp.<?= $kamar['harga_kamar']; ?>/Malam</small>
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
                                        <small class="border-end me-3 pe-3"><i class="fa fa-hotel text-primary me-2"></i><?= $kamar['ukuran_kamar']; ?> M <sup>2</sup></small>
                                        <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                    </div>
                                    <p class="text-body mb-3"><?= $kamar['fasilitas_kamar']; ?></p>
                                    <div class="d-flex justify-content-between">
                                        <!-- <a class="btn btn-sm btn-primary rounded py-2 px-4" href="">View Detail</a> -->
                                        <form action="functions/cek_kamar.php" method="get">
                                            <input type="hidden" name="nama_kamar" value="<?= $kamar['nama_kamar']; ?>">
                                            <button type="submit" name="book_now" class="btn btn-sm btn-dark rounded py-2 px-4">Pesan Kamar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile ?>
                </div>
            </div>
        </div>
        <!-- Room End -->

        <!-- Newsletter Start -->
        <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="row justify-content-center">
                <div class="col-lg-10 border rounded p-1">
                    <div class="border rounded text-center p-1">
                        <div class="bg-white rounded text-center p-5">
                            <h4 class="mb-4">Subscribe Our <span class="text-primary text-uppercase">Newsletter</span></h4>
                            <div class="position-relative mx-auto" style="max-width: 400px;">
                                <input class="form-control w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
                                <button type="button" class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">Submit</button>
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
                        <div class="col-md-6 text-center text-md-start mb- mb-md-0">
                            &copy; <a class="border-bottom" href="#">SMK Swadhipa 2 Natar</a>, Rekayasa Perangkat Lunak.
                            Designed By <a class="border-bottom" href="https://linktr.ee/rzkyfhrzi21/" target="_blank">Rizky Fahrezi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="template1/lib/wow/wow.min.js"></script>
    <script src="template1/lib/easing/easing.min.js"></script>
    <script src="template1/lib/waypoints/waypoints.min.js"></script>
    <script src="template1/lib/counterup/counterup.min.js"></script>
    <script src="template1/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="template1/lib/tempusdominus/js/moment.min.js"></script>
    <script src="template1/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="template1/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="template1/js/main.js"></script>
</body>

</html>