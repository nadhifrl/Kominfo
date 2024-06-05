<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <link rel="icon" href="{{asset('img/Logo-Botani-1.png')}}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anchor.in</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__auth">
            <a href="#">Login</a>
            <a href="#">Register</a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header" style="background: linear-gradient(to top, #33ccff 0%, #ff99cc 100%);">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-2">
                    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                        <div class="header__logo" style="margin-left:-30px;margin-top:-30px;text-align: center;">
                            <img src="img/logo1.png" style="width: 100%;transform: translate(490px, 10px);" alt="">
                    </a>
                </div>
                </a>
            </div>
        </div>
        <div class="canvas__open">
            <i class="fa fa-bars"></i>
        </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Banner Section Begin -->
    <section class="banner set-bg" data-setbg="../20645.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-8 m-auto">
                    <div class="banner__slider owl-carousel">
                        <div class="banner__item">
                            <div class="banner__text">
                                <h1>Anchor.in</h1>
                                <span style="color: black; font-size: 17px;">Geser Ke Kanan Untuk Login/Mendaftar</span>
                            </div>
                        </div>
                        <div class="banner__item">
                            <div class="banner__text">
                                <h1>Sudah Punya Akun</h1>
                                <a href="<?php echo e(route('login')); ?>">Klik Disini Untuk Login</a>
                            </div>
                        </div>
                        <div class="banner__item">
                            <div class="banner__text">
                                <h1>Belum Punya Akun</h1>
                                <a href="<?php echo e(route('register')); ?>">Klik Disini Untuk Mendaftar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->
    <section class="services spad">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-4 col-sm-6" style="margin-left:300px">
                    <div class="services__item">
                        <i class="fa fa-money"></i>
                        <h6>Pembayaran</h6>
                        <p>100% pembayaran aman</p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-4 col-sm-6" style="margin-left:0px">
                    <div class="services__item">
                        <i class="fa fa-support"></i>
                        <h6>Fleksibel</h6>
                        <p>Mempermudah anda dalam mendapatkan tiket</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="instagram">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="img/wisata1.jpg">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="img/wisata2.jpg">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="img/wisata3.jpg">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="img/wisata4.jpg">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="img/wisata5.jpg">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="img/wisata6.jpg">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Section Begin -->


    <footer class="new_footer_area bg_color">
        <div class="new_footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-100 col-md-15 " style="margin-left:-60px">
                        <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                            <h3 class="f-title f_600 t_color f_size_20">Anchor.in</h3>
                            <h5 class="f-title f_10 t_color f_size_5">Merupakan website penjualan tiket wisata Ancol yang dijual secara online. Yang memudahkan anda dalam mendapatkan tiket, tanpa harus menunggu antrian.</h5>
                            <h5 class="f-title f_10 t_color f_size_5">Di dalam website ini, tersedia informasi dan sarana yang terdapat di Ancol. Tujuan diciptakannya website ini agar terciptanya keuntungan antar kedua belah pihak </h5>
                            <h5 class="f-title f_10 t_color f_size_5"> </h5>

                        </div>
                    </div>

                    <div class="footer_bg">
                        <div class="footer_bg_one"></div>
                        <div class="footer_bg_two"></div>
                    </div>
                </div>

    </footer>
    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>