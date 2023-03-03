<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hiroto Template">
    <meta name="keywords" content="Hiroto, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hiroto | Hotel Hebat</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="template1/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="template1/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="template1/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="template1/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="template1/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="template1/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="template1/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="template1/css/style.css" type="text/css">

    <link rel="icon" href="../bahan/Logo.png">
</head>

<body>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__nav__option">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="header__logo">
                            <a href="./index.php"><img src="../bahan/Logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="header__nav">
                            <nav class="header__menu">
                                <ul class="menu__class">
                                    <li><a href="./index.php">Home</a></li>
                                    <li class="active"><a href="./kamar.php">Kamar</a></li>
                                    <li><a href="./fasilitas.php">Fasilitas</a></li>
                                    <li><a href="./login.php">Petugas</a></li>
                                    <li><a href="./kontak.php">Kontak</a></li>
                                </ul>
                            </nav>
                            <div class="header__nav__widget">
                                <a href="#">Book Now <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="canvas__open">
                    <span class="fa fa-bars"></span>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option set-bg" data-setbg="template1/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h1>Kamar Yang Tersedia</h1>
                        <div class="breadcrumb__links">
                            <a href="./index.php">Home</a>
                            <span>Kamar</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Rooms Section Begin -->
    <section class="rooms spad">
        <div class="container">

            <div class="row">
                <?php

                include 'functions/koneksi.php';

                $no = 1;

                $sql_kamar = mysqli_query($koneksi, "SELECT * from kamar where id_kamar % 2 = 1");

                while ($kamar = mysqli_fetch_array($sql_kamar)) :

                ?>
                    <div class="col-lg-6 p-0 order-lg-<?= $kamar['id_kamar']; ?> order-md-<?= $kamar['id_kamar']; ?> col-md-6">
                        <div class="room__text right__text">
                            <h3><?= $kamar['nama_kamar']; ?></h3>
                            <h2><sup>RP</sup><?= $kamar['harga_kamar']; ?><span>/hari</span></h2>
                            <ul>
                                <li><span>Ukuran</span>: <?= $kamar['ukuran_kamar']; ?></li>
                                <li><span>Jumlah Kasur</span>: <?= $kamar['jumlah_kasur']; ?></li>
                                <li><span>Fasilitas</span>: <?= $kamar['fasilitas_kamar']; ?></li>
                            </ul>
                            <a href="#">View Details</a>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0 order-lg-<?= $kamar['id_kamar']; ?> order-md-<?= $kamar['id_kamar']; ?> col-md-6">
                        <div class="room__pic__slider owl-carousel">
                            <div class="room__pic__item set-bg" data-setbg="img/kamar/<?= $kamar['gambar_kamar']; ?>" title="<?= $kamar['nama_kamar']; ?>" alt="<?= $kamar['nama_kamar']; ?>"></div>
                            <div class="room__pic__item set-bg" data-setbg="img/kamar/<?= $kamar['gambar_kamar']; ?>" title="<?= $kamar['nama_kamar']; ?>" alt="<?= $kamar['nama_kamar']; ?>"></div>
                        </div>
                    </div>
                <?php endwhile ?>
                <?php

                include 'functions/koneksi.php';

                $no = 1;

                $sql_kamar = mysqli_query($koneksi, "SELECT * from kamar where id_kamar % 2 = 0");

                while ($kamar = mysqli_fetch_array($sql_kamar)) :

                ?>
                    <div class="col-lg-6 p-0 order-lg-<?= $kamar['id_kamar']; ?> order-md-<?= $kamar['id_kamar']; ?> col-md-6">
                        <div class="room__pic__slider owl-carousel">
                            <div class="room__pic__item set-bg" data-setbg="img/kamar/<?= $kamar['gambar_kamar']; ?>" title="<?= $kamar['nama_kamar']; ?>" alt="<?= $kamar['nama_kamar']; ?>"></div>
                            <div class="room__pic__item set-bg" data-setbg="img/kamar/<?= $kamar['gambar_kamar']; ?>" title="<?= $kamar['nama_kamar']; ?>" alt="<?= $kamar['nama_kamar']; ?>"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 p-0 order-lg-<?= $kamar['id_kamar']; ?> order-md-<?= $kamar['id_kamar']; ?> col-md-6">
                        <div class="room__text right__text">
                            <h3><?= $kamar['nama_kamar']; ?></h3>
                            <h2><sup>RP</sup><?= $kamar['harga_kamar']; ?><span>/hari</span></h2>
                            <ul>
                                <li><span>Ukuran</span>: <?= $kamar['ukuran_kamar']; ?></li>
                                <li><span>Jumlah Kasur</span>: <?= $kamar['jumlah_kasur']; ?></li>
                                <li><span>Fasilitas</span>: <?= $kamar['fasilitas_kamar']; ?></li>
                            </ul>
                            <a href="#">View Details</a>
                        </div>
                    </div>
                <?php endwhile ?>
            </div>

        </div>
    </section>
    <!-- Rooms Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer set-bg" data-setbg="template1/img/footer-bg.jpg">
        <div class="container">
            <div class="footer__content">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer__about">
                            <div class="footer__logo">
                                <a href="#"><img src="../bahan/Logo.png" alt=""></a>
                            </div>
                            <h4>(62) 851-7320-0421</h4>
                            <ul>
                                <li>Jl. Swadhipa No. 217, Natar</li>
                                <li>rzkyfhrzi21@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1 col-md-5 offset-md-1 col-sm-6">
                        <div class="footer__widget">
                            <h4>Quick Link</h4>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="kamar.php">Kamar</a></li>
                                <li><a href="fasilitas.php">Fasilitas</a></li>
                                <li><a href="login.php">Petugas Login</a></li>
                                <li><a href="kontak.php">Kontak</a></li>
                            </ul>
                            <ul>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Our Room</a></li>
                                <li><a href="#">Restaurants</a></li>
                                <li><a href="#">Payments</a></li>
                                <li><a href="#">Events</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-8 col-sm-12">
                        <div class="footer__newslatter">
                            <h4>Berlangganan untuk menerima informasi terbaru kami</h4>
                            <form action="#">
                                <input type="text" placeholder="Alamat@Email.Kamu">
                                <button type="submit">Langganan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__copyright">
                <div class="row">
                    <div class="col-lg-7 col-md-7">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <div class="footer__copyright__text">
                            <p>Copyright &copy; <script>
                                    document.write(new Date().getFullYear());
                                </script> SMK Swadhipa 2 Natar | Rekayasa Perangkat Lunak <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://linktr.ee/rzkyfhrzi21" target="_blank">Rizky Fahrezi</a></p>
                        </div>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <ul class="footer__copyright__links">
                            <li><a href="#">Terms Of Use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="template1/js/jquery-3.3.1.min.js"></script>
    <script src="template1/js/bootstrap.min.js"></script>
    <script src="template1/js/jquery.nice-select.min.js"></script>
    <script src="template1/js/jquery-ui.min.js"></script>
    <script src="template1/js/jquery.slicknav.js"></script>
    <script src="template1/js/owl.carousel.min.js"></script>
    <script src="template1/js/main.js"></script>
</body>

</html>