<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hiroto Template">
    <meta name="keywords" content="Hiroto, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hiroto | Template</title>

    <!-- Css Styles -->
    <link rel="stylesheet" href="template1/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="template1/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="template1/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="template1/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="template1/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="template1/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="template1/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="template1/css/style.css" type="text/css">
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
                                    <li><a href="./fasilitas.php">Fasilitas</a></li>
                                    <li><a href="./login.php">Petugas</a></li>
                                    <li class="active"><a href="./kontak.php">Kontak</a></li>
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

    <!-- Map Begin -->
    <div class="map">
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m22!1m8!1m3!1d3972.8557139942063!2d105.19584821476477!3d-5.285199046165695!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d-5.285548299999999!2d105.1980269!4m5!1s0x2e40c8b50bc15e6f%3A0x1ab3ff114beff389!2sswadhipa%202%20natar!3m2!1d-5.284952199999999!2d105.19790499999999!5e0!3m2!1sid!2sid!4v1677728969945!5m2!1sid!2sid" height="600" style="border:0;" allowfullscreen=""></iframe> -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d3972.8557139942063!2d105.19584821476477!3d-5.285199046165695!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x2e40c8b50bc15e6f%3A0x1ab3ff114beff389!2sswadhipa%202%20natar!3m2!1d-5.284952199999999!2d105.19790499999999!5e0!3m2!1sid!2sid!4v1677729064174!5m2!1sid!2sid" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- Map End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-5">
                    <div class="contact__widget">
                        <div class="contact__widget__item">
                            <h4>Hubungi Kami</h4>
                            <ul>
                                <li>(62) 851-7320-0421</li>
                                <li>admin@hotelhebat.com</li>
                            </ul>
                        </div>
                        <div class="contact__widget__item">
                            <h4>Alamat</h4>
                            <p>Jl. Swadhipa No. 217, Natar <br />Lampung</p>
                        </div>
                        <div class="contact__widget__time">
                            <h4>Jam Buka</h4>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="contact__widget__time__item">
                                        <ul>
                                            <li>Senin - Jumat</li>
                                            <li><span>8 am - 9 pm</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="contact__widget__time__item">
                                        <ul>
                                            <li>Sabtu - Minggu</li>
                                            <li><span>8 am - 10 pm</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 col-md-6 col-sm-7">
                    <div class="contact__form">
                        <h2>Ada pertanyaan?</h2>
                        <form action="functions/tanya.php" method="post">
                            <input type="text" name="nama" placeholder="Nama Anda" required>
                            <input type="text" name="email" placeholder="Email" required>
                            <textarea name="pesan" placeholder="Pertanyaan Anda" required></textarea>
                            <button name="kirim_pertanyaan" type="submit">Kirim Pesan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

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