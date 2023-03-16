<?php

if (@$_GET['nama_kamar'] or @$_GET['jumlah_kamar'] or @$_GET['check_in'] or @$_GET['check_out']) {
    $nama_kamar     = @$_GET['nama_kamar'];
    $jumlah_kamar   = @$_GET['jumlah_kamar'];
    $check_in       = @$_GET['check_in'];
    $check_out      = @$_GET['check_out'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pesan Kamar - Hotel Hebat</title>
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
                                <a href="petugas.php" class="nav-item nav-link">Petugas</a>
                                <a href="kontak.php" class="nav-item nav-link">Kontak</a>
                            </div>
                            <a href="pesan_kamar.php" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block active">Pesan Kamar<i class="fa fa-arrow-right ms-3"></i></a>
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
                            <li class="breadcrumb-item text-white active" aria-current="page">Pesan Kamar</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Booking Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Pesan Kamar</h6>
                    <h1 class="mb-5">Pesan <span class="text-primary text-uppercase">Kamar Terbaik</span></h1>
                </div>
                <div class="row g-5">
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
                    <div class="col-lg-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form action="functions/pesan_kamar.php" method="post" autocomplete="off">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" name="nama_pemesan" class="form-control" id="nama_pemesan" placeholder="Nama Pemesan" required>
                                            <label for="nama_pemesan">Nama Pemesan</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                                            <label for="email">Email</label>
                                        </div>
                                    </div>
                                    <!--                                     <div class="col-md-6">
                                        <div class="form-floating date" id="date3" data-target-input="nearest">
                                            <input type="text" name="check_in" class="form-control datetimepicker-input" id="check_in" placeholder="Check In" data-target="#date3" data-toggle="datetimepicker" required />
                                            <label for="check_in">Check In</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating date" id="date4" data-target-input="nearest">
                                            <input type="text" name="check_out" class="form-control datetimepicker-input" id="check_out" placeholder="Check Out" data-target="#date4" data-toggle="datetimepicker" required />
                                            <label for="check_out">Check Out</label>
                                        </div>
                                    </div> -->
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="date" name="check_in" class="form-control" id="check_in" placeholder="Check In" value="<?= @$check_in; ?>" required>
                                            <label for="check_in">Check In</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="date" name="check_out" class="form-control" id="check_out" placeholder="Check Out" value="<?= @$check_out; ?>" required>
                                            <label for="check_out">Check Out</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" name="jumlah_kamar" class="form-control" id="jumlah_kamar" placeholder="Jumlah Kamar" value="<?= @$jumlah_kamar; ?>" required>
                                            <label for="jumlah_kamar">Jumlah Kamar</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" name="no_hp" class="form-control" id="no_hp" placeholder="No Handphone" required>
                                            <label for="no_hp">No Handphone</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <select class="form-select" name="nama_kamar" id="nama_kamar" required>
                                                <option value="<?= @$nama_kamar; ?>"><?= @$nama_kamar; ?></option>
                                                <?php

                                                include 'functions/koneksi.php';

                                                $sql_kamar = mysqli_query($koneksi, "SELECT * from kamar");

                                                while ($kamar = mysqli_fetch_array($sql_kamar)) :

                                                ?>
                                                    <option value="<?= $kamar['nama_kamar']; ?>"><?= $kamar['nama_kamar']; ?> - Rp.<?= $kamar['harga_kamar']; ?>/Malam</option>
                                                <?php endwhile ?>
                                            </select>
                                            <label for="nama_kamar">Tipe Kamar</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" name="catatan" placeholder="Catatan" id="catatan" style="height: 100px"></textarea>
                                            <label for="catatan">Catatan</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button name="pesan_kamar" class="btn btn-primary w-100 py-3" type="submit">Pesan Kamar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Booking End -->


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

</body>

</html>