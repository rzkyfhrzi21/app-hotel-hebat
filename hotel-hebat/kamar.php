<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Hotel Hebat</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="bahan/logo.png">
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
                                    <!-- AWAL MENU -->
                                    <ul id="navigation">
                                        <li><a href="index.php">Home</a></li>
                                        <li><a class="active" href="kamar.php">Kamar</a></li>
                                        <li><a href="fasilitas.php">Fasilitas</a></li>
                                        <li><a href="login.php">Login</a></li>
                                    </ul>
                                    <!-- AKHIR MENU -->
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.php">
                                    <img src="bahan/Logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-4 d-none d-lg-block">
                            <div class="book_room">
                                <div class="book_btn d-none d-lg-block">

                                    <!-- PANGGIL FORM PESAN KAMAR SAAT DI KLIK -->
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
    <div class="bradcam_area breadcam_bg_1">
        <h3>Hotel Hebat</h3>
        <H3>Kamar</H3>
    </div>
    <!-- bradcam_area_end -->

    <!-- features room start -->
    <div class="features_room">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <span>Featured Rooms</span>
                        <h3>Choose a Better Room</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="rooms_here">

            <!-- BUAT PERULANGAN UNTUK MENAMPILKAN DATA KAMAR DARI DATABASE -->
            <?php

            include 'koneksi.php';

            $no = 1;

            $query = mysqli_query($koneksi, "SELECT * FROM kamar");

            while ($row = mysqli_fetch_array($query)) {
            ?>
                <div class="single_rooms">
                    <div class="room_thumb">
                        <img src="img/<?php echo $row["gambar_kamar"]; ?>" alt="">
                        <div class="room_heading d-flex justify-content-between align-items-center">
                            <div class="room_heading_inner">
                                <span> <?php echo $row['fasilitas_kamar'] ?> </span>
                                <span> <?php echo $row['jumlah_kasur'] ?> BED </span>
                                <h3> <?php echo $row['nama_kamar'] ?> </h3>
                            </div>
                            <a class="popup-with-form" href="#test-form">book now</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- AKHIR PERULANGAN DATA KAMAR -->

        </div>
    </div>
    <!-- features room end -->

    <!-- AWAL FOOTER -->
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
                            </script> SMK Swadhipa 2 Natar | Rekayasa Perangkat Lunak <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://www.instagram.com/class.rplinvinicible/" target="_blank">XII RPL</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- AKHIR FOOTER -->


    <!-- AWAL FORM PEMESANAN KAMAR -->
    <form id="test-form" class="white-popup-block mfp-hide" action="simpan.php" method="post">
        <div class="popup_box ">
            <div class="popup_inner">
                <h3>Pesan Kamar</h3>
                <div class="row">
                    <div class="form-group col-xl-12">
                        <input type="text" class="form-control" name="nama_pemesan" autocomplete="off" placeholder="Masukkkan Nama Pemesan" required>
                    </div>
                    <div class="form-group col-xl-12">
                        <input type="phone_num" class="form-control" name="no_hp" autocomplete="off" placeholder="Masukkkan No HP" required>
                    </div>
                    <div class="form-group col-xl-12">
                        <input type="email" class="form-control" name="email" autocomplete="off" placeholder="Masukkkan Email" required>
                    </div>
                    <div class="form-group col-xl-12">
                        <input type="text" class="form-control" name="nama_tamu" autocomplete="off" placeholder="Masukkan Nama Tamu" required>
                    </div>
                    <div class="col-xl-6">
                        <input id="datepicker" name="check_in" autocomplete="off" placeholder="Tanggal Check In" required>
                    </div>
                    <div class="col-xl-6">
                        <input id="datepicker2" name="check_out" autocomplete="off" placeholder="Tanggal Check Out" required>
                    </div>
                    <div class="form-group col-xl-12">
                        <input type="number" class="form-control" autocomplete="off" name="jumlah_kamar" placeholder="Masukkkan Jumlah Kamar" required>
                    </div>
                    <div class="col-xl-12">
                        <select class="form-select wide" name="tipe_kamar" id="default-select" class="" required>
                            <option data-display="Tipe Kamar"></option>

                            <!-- BUAT PERULANGAN UNTUK TIPE KAMAR BERDASARKAN NAMA KAMAR DARI DATABASE -->
                            <?php

                            include 'koneksi.php';

                            $sql_kamar = mysqli_query($koneksi, "SELECT * from kamar");

                            while ($kamar = mysqli_fetch_array($sql_kamar)) {

                            ?>
                                <option value="<?= $kamar['nama_kamar']; ?>"><?= $kamar['nama_kamar']; ?></option>

                            <?php } ?>
                            <!-- AKHIR PERULANGAN TIPE KAMAR -->

                        </select>
                    </div>
                    <div class="col-xl-12">
                        <button type="submit" class="boxed-btn3">Pesan Kamar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- AKHIR FORM PEMESANAN KAMAR -->

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