<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Hotel Hebat</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="bahan/Logo.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="template1/css/bootstrap.min.css">
    <link rel="stylesheet" href="template1/css/owl.carousel.min.css">
    <link rel="stylesheet" href="template1/css/magnific-popup.css">
    <link rel="stylesheet" href="template1/css/font-awesome.min.css">
    <link rel="stylesheet" href="template1/css/themify-icons.css">
    <link rel="stylesheet" href="template1/css/nice-select.css">
    <link rel="stylesheet" href="template1/css/flaticon.css">
    <link rel="stylesheet" href="template1/css/gijgo.css">
    <link rel="stylesheet" href="template1/css/animate.css">
    <link rel="stylesheet" href="template1/css/slicknav.css">
    <link rel="stylesheet" href="template1/css/style.css">
    <!-- <link rel="stylesheet" href="template1/css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-5 col-lg-6">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index.php">home</a></li>
                                        <li><a href="kamar.php">kamar</a></li>
                                        <li><a class="active" href="fasilitas.php">fasilitas</a></li>
                                        <li><a href="login.php">login</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.html">
                                    <img src="bahan/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-4 d-none d-lg-block">
                            <div class="book_room">
                                <div class="book_btn d-none d-lg-block">
                                    <a class="popup-with-form" href="#test-form">Pesan Kamar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg">
        <h3>Hotel Hebat</h3>
        <h3>Fasilitas</h3>
    </div>
    <!-- bradcam_area_end -->

    <!-- about_area_start -->
    <div class="about_area">
        <div class="container">
            <?php

            include 'functions/koneksi.php';

            $sql_fasilitas = mysqli_query($koneksi, "SELECT * from fasilitas");

            while ($fasilitas = mysqli_fetch_array($sql_fasilitas)) :

            ?>
                <div class="row">
                    <div class="col-xl-5 col-lg-5">
                        <div class="about_info">
                            <div class="section_title mb-20px">
                                <span>Fasilitas</span>
                                <h3><?= $fasilitas['nama_fasilitas']; ?></h3>
                            </div>
                            <p><?= $fasilitas['ket_fasilitas']; ?></p>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="about_thumb d-flex">
                            <div class="img">
                                <img src="img/fasilitas/<?= $fasilitas['gambar_fasilitas']; ?>">
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile ?>
        </div>
    </div>
    <!-- about_area_end -->

    <!-- footer -->
    <footer class="footer">
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-8 col-md-7 col-lg-9">
                        <p class="copy_right">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> SMK Swadhipa 2 Natar | Rekayasa Perangkat Lunak <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://linktr.ee/rzkyfhrzi21" target="_blank">Rizky Fahrezi</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                    <div class="col-xl-4 col-md-5 col-lg-3">
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer_end -->

    <!-- form itself end-->
    <form action="functions/pesan_kamar.php" method="POST" id="test-form" class="white-popup-block mfp-hide" autocomplete="off">
        <div class="popup_box ">
            <div class="popup_inner">
                <h3>Pesan Kamar</h3>
                <form>
                    <div class="row">
                        <div class="form-group col-xl-12">
                            <input type="text" class="form-control" name="nama_pemesan" placeholder="Nama Pemesan" required>
                        </div>
                        <div class="form-group col-xl-12">
                            <input type="number" class="form-control" name="no_hp" placeholder="No Handphone" required>
                        </div>
                        <div class="form-group col-xl-12">
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group col-xl-12">
                            <input type="text" class="form-control" name="nama_tamu" placeholder="Nama Tamu" required>
                        </div>
                        <div class="col-xl-6">
                            <input id="datepicker" name="check_in" placeholder="Tanggal Check In">
                        </div>
                        <div class="col-xl-6">
                            <input id="datepicker2" name="check_out" placeholder="Tanggal Check Out">
                        </div>

                        <div class="col-xl-12">
                            <select class="form-select wide" id="default-select" name="tipe_kamar">
                                <option data-display="Tipe Kamar"></option>
                                <?php

                                include 'functions/koneksi.php';

                                $sql_kamar = mysqli_query($koneksi, "SELECT * from kamar");

                                while ($kamar = mysqli_fetch_array($sql_kamar)) :

                                ?>
                                    <option value="<?= $kamar['nama_kamar']; ?>"><?= $kamar['nama_kamar']; ?></option>
                                <?php endwhile ?>
                            </select>
                        </div>
                        <div class="form-group col-xl-12">
                            <input type="number" class="form-control" name="jumlah_kamar" placeholder="Jumlah Kamar" required>
                        </div>
                        <div class="col-xl-12">
                            <button type="submit" name="pesan_kamar" class="boxed-btn3">Pesan Kamar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </form>
    <!-- form itself end -->


    <!-- JS here -->
    <script src="template1/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="template1/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="template1/js/popper.min.js"></script>
    <script src="template1/js/bootstrap.min.js"></script>
    <script src="template1/js/owl.carousel.min.js"></script>
    <script src="template1/js/isotope.pkgd.min.js"></script>
    <script src="template1/js/ajax-form.js"></script>
    <script src="template1/js/waypoints.min.js"></script>
    <script src="template1/js/jquery.counterup.min.js"></script>
    <script src="template1/js/imagesloaded.pkgd.min.js"></script>
    <script src="template1/js/scrollIt.js"></script>
    <script src="template1/js/jquery.scrollUp.min.js"></script>
    <script src="template1/js/wow.min.js"></script>
    <script src="template1/js/nice-select.min.js"></script>
    <script src="template1/js/jquery.slicknav.min.js"></script>
    <script src="template1/js/jquery.magnific-popup.min.js"></script>
    <script src="template1/js/plugins.js"></script>
    <script src="template1/js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="template1/js/contact.js"></script>
    <script src="template1/js/jquery.ajaxchimp.min.js"></script>
    <script src="template1/js/jquery.form.js"></script>
    <script src="template1/js/jquery.validate.min.js"></script>
    <script src="template1/js/mail-script.js"></script>

    <script src="template1/js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }

        });
    </script>


</body>

</html>