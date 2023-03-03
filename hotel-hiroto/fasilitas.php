<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hiroto Template">
    <meta name="keywords" content="Hiroto, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hiroto | Hotel Hebat</title>

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
                                    <li><a href="./kamar.php">Kamar</a></li>
                                    <li class="active"><a href="./fasilitas.php">Fasilitas</a></li>
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
                        <h1>Fasilitas Yang Tersedia</h1>
                        <div class="breadcrumb__links">
                            <a href="./index.php">Home</a>
                            <span>Fasilitas</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- History Section Begin -->
    <section class="history spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title history-title">
                        <h5>Fasilitas Kami</h5>
                        <h2>Jelajahi Hotel Hebat</h2>
                    </div>
                </div>
            </div>
            <div class="history__content">

                <div class="row">

                    <div class="col-lg-5 col-md-5">
                        <?php

                        include 'functions/koneksi.php';

                        $no = 1;

                        $sql_fasilitas = mysqli_query($koneksi, "SELECT * from fasilitas where id_fasilitas % 2 = 1");

                        while ($fasilitas = mysqli_fetch_array($sql_fasilitas)) :

                        ?>
                            <div class="history__item left__item">
                                <div class="history__date"></div>
                                <h4><?= $fasilitas['nama_fasilitas']; ?></h4>
                                <img src="img/fasilitas/<?= $fasilitas['gambar_fasilitas']; ?>" alt="">
                                <p><?= $fasilitas['ket_fasilitas']; ?></p>
                            </div>
                        <?php endwhile ?>
                    </div>
                    <div class="col-lg-5 offset-lg-2 col-md-5 offset-md-2">
                        <?php

                        include 'functions/koneksi.php';

                        $no = 1;

                        $sql_fasilitas = mysqli_query($koneksi, "SELECT * from fasilitas where id_fasilitas % 2 = 0");

                        while ($fasilitas = mysqli_fetch_array($sql_fasilitas)) :

                        ?>
                            <div class="history__item right__first__item">
                                <div class="history__date"></div>
                                <h4><?= $fasilitas['nama_fasilitas']; ?></h4>
                                <img src="img/fasilitas/<?= $fasilitas['gambar_fasilitas']; ?>" alt="">
                                <p><?= $fasilitas['ket_fasilitas']; ?></p>
                            </div>
                        <?php endwhile ?>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- History Section End -->

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