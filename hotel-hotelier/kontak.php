<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Kontak - Hotel Hebat</title>
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
                                <a href="kontak.php" class="nav-item nav-link active">Kontak</a>
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
                            <li class="breadcrumb-item text-white active" aria-current="page">Kontak</li>
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


        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Kontak</h6>
                    <h1 class="mb-5">Hubungi Kami</h1>
                </div>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="row gy-4">
                            <div class="col-md-4">
                                <h6 class="section-title text-start text-primary text-uppercase">Pemesanan</h6>
                                <p><i class="fa fa-envelope-open text-primary me-2"></i>rsp@hotelhebat.com</p>
                            </div>
                            <div class="col-md-4">
                                <h6 class="section-title text-start text-primary text-uppercase">Umum</h6>
                                <p><i class="fa fa-envelope-open text-primary me-2"></i>info@hotelhebat.com</p>
                            </div>
                            <div class="col-md-4">
                                <h6 class="section-title text-start text-primary text-uppercase">Teknis</h6>
                                <p><i class="fa fa-envelope-open text-primary me-2"></i>teknis@hotelhebat.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.857340582476!2d105.19565031485865!3d-5.284945454546034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40c8b50bc15e6f%3A0x1ab3ff114beff389!2sSMK%20Swadhipa%202%20Natar!5e0!3m2!1sid!2sid!4v1678948845350!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-md-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form action="functions/kontak.php" method="post" autocomplete="off">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" name="nama" class="form-control" id="name" placeholder="Nama Anda" required>
                                            <label for="nama">Nama Anda</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                                            <label for="email">Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" name="judul" class="form-control" id="judul" placeholder="Judul" required>
                                            <label for="judul">Pertanyaan / Keluhan</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea name="pesan" class="form-control" placeholder="Ketikkan Pertanyaan Anda Disini" id="pesan" style="height: 150px"></textarea>
                                            <label for="pesan">Rincian</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button name="kontak" class="btn btn-primary w-100 py-3" type="submit">Kirim</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


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