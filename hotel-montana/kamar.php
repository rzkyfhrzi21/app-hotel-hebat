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
    <link rel="stylesheet" href="template1/css/font-awesome.min.css">
    <link rel="stylesheet" href="template1/css/themify-icons.css">
    <link rel="stylesheet" href="template1/css/nice-select.css">
    <link rel="stylesheet" href="template1/css/flaticon.css">
    <link rel="stylesheet" href="template1/css/gijgo.css">
    <link rel="stylesheet" href="template1/css/animate.css">
    <link rel="stylesheet" href="template1/css/slicknav.css">
    <link rel="stylesheet" href="template1/css/style.css">
    <link rel="stylesheet" href="template1/css/responsive.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="template2/dist/css/adminlte.min.css">
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
                                        <li><a class="active" href="kamar.php">kamar</a></li>
                                        <li><a href="fasilitas.php">fasilitas</a></li>
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
                                    <button type="button" class="btn btn-primary" style="padding: 10" data-toggle="modal" data-target="#modalpesankamar">
                                        Pesan Kamar
                                    </button>
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
        <h3>Kamar</h3>
    </div>
    <!-- bradcam_area_end -->

    <!-- features_room_startt -->
    <div class="features_room">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <span>Kamar yang Tersedia</span>
                        <h3>Pilih Kamar yang Terbaik</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="rooms_here">

            <?php

            include 'functions/koneksi.php';

            $sql_kamar = mysqli_query($koneksi, "SELECT * from kamar");

            while ($kamar = mysqli_fetch_array($sql_kamar)) :

            ?>

                <div class="single_rooms">
                    <div class="room_thumb">
                        <img src="img/kamar/<?= $kamar['gambar_kamar']; ?>" alt="">
                        <div class="room_heading d-flex justify-content-between align-items-center">
                            <div class="room_heading_inner">
                                <span><?= $kamar['fasilitas_kamar']; ?></span>
                                <h3><?= $kamar['nama_kamar']; ?></h3>
                                <span>Ada <?= $kamar['jumlah_kasur']; ?> Kasur</span>
                            </div>
                            <a class="popup-with-form" href="#test-form">pesan</a>
                        </div>
                    </div>
                </div>
            <?php endwhile ?>
        </div>
    </div>
    <!-- features_room_end -->

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

    <div class="modal fade" id="modalpesankamar">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div style="text-align: center;">
                        <h4 class="modal-title">Pesan Kamar</h4>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="../functions/kamar.php" method="post" autocomplete="off" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama_kamar">Nama Kamar</label>
                            <input type="text" name="nama_kamar" id="nama_kamar" class="form-control" placeholder="Masukkan Nama Kamar" required>
                        </div>
                        <div class="form-group">
                            <label for="fasilitas_kamar">Fasilitas Kamar</label>
                            <textarea name="fasilitas_kamar" class="form-control" placeholder="Masukkan Fasilitas Kamar" id="fasilitas_kamar" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="jumlah_kasur">Jumlah Kasur</label>
                            <input type="number" name="jumlah_kasur" class="form-control" id="jumlah_kasur" placeholder="Masukkan Jumlah Kasur" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Gambar Kamar</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="gambar_kamar" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Pilih Gambar</label>
                                </div>

                            </div>
                        </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" name="tambah_kamar" class="btn btn-primary">Tambah Kamar</button>
                </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <!-- jQuery -->
    <script src="template2/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="template2/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="template2/dist/js/adminlte.min.js"></script>
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