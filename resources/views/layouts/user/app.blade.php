<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Finloans</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="/images/assets/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/themify-icons.css">
    <link rel="stylesheet" href="/css/nice-select.css">
    <link rel="stylesheet" href="/css/flaticon.css">
    <link rel="stylesheet" href="/css/gijgo.css">
    <link rel="stylesheet" href="/css/animate.min.css">
    <link rel="stylesheet" href="/css/slick.css">
    <link rel="stylesheet" href="/css/slicknav.css">

    <link rel="stylesheet" href="/css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->

    <script src="/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/isotope.pkgd.min.js"></script>
    <script src="/js/ajax-form.js"></script>
    <script src="/js/waypoints.min.js"></script>
    <script src="/js/jquery.counterup.min.js"></script>
    <script src="/js/imagesloaded.pkgd.min.js"></script>
    <script src="/js/scrollIt.js"></script>
    <script src="/js/jquery.scrollUp.min.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/nice-select.min.js"></script>
    <script src="/js/jquery.slicknav.min.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/plugins.js"></script>
    <script src="/js/gijgo.min.js"></script>
    <script src="/js/slick.min.js"></script>

    <!--contact j/s-->
    <script src="/js/contact.js"></script>
    <script src="/js/jquery.ajaxchimp.min.js"></script>
    <script src="/js/jquery.form.js"></script>
    <script src="/js/jquery.validate.min.js"></script>
    <script src="/js/mail-script.js"></script>

    <script src="/js/main.js"></script>
</head>

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- header-start -->
<header>
    <div class="header-area ">
        <div id="sticky-header" class="@yield('header-class') ">
            <div class="container-fluid ">
                <div class="header_bottom_border">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="/images/logo_iremia.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <ul id="navigation">
                                    <li><a href="/">Beranda</a></li>
                                    <li><a href="#">Pemakaman <i class="ti-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="/pemakaman/cari">Semua Pemakaman</a></li>
                                            <li><a href="/pemakaman/jadwal">Jadwal Pemakaman</a></li>
                                            <li><a href="/pemakaman/tata-cara">Tata Cara Pemesanan</a></li>
                                            <li><a href="/pemakaman/syarat">Persyaratan</a></li>
                                        </ul>
                                    </li>

                                    @if(Auth::user())
                                        <li><a href="#">IPTM <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="/IPTM/buat-permohonan">Buat Permohonan IPTM</a></li>
                                                <li><a href="/IPTM/pesanan">Status IPTM Saya</a></li>
                                                <li><a href="/IPTM/pesanan/riwayat">Riwayat IPTM Saya</a></li>
                                            </ul>
                                        </li>
                                    @endif
                                    <li><a href="FAQ.html">FAQ</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>

                                <nav></nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            @if(\Illuminate\Support\Facades\Auth::user())
                                <div class="Appointment">
                                    <div class="d-none d-lg-block">
                                        <a class="boxed-btn4" href="{{url('/profile')}}">{{\Illuminate\Support\Facades\Auth::user()->fullname}}</a>
                                    </div>
                                </div>
                            @else
                                <div class="Appointment">
                                    <div class="phone_num d-none d-xl-block">
                                        <a href="#"> <i class="fa fa-phone"></i> +10 673 567 367</a>
                                    </div>
                                    <div class="d-none d-lg-block">
                                        <a class="boxed-btn4" data-toggle="modal" data-target="#LoginModal" href="#">Login</a>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- header-end -->
<div class="modal fade" id="LoginModal" data-backdrop="false" tabindex="-1" role="dialog" aria-labelledby="LoginModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="box-shadow: 0px 50px 90px 0 rgba(0, 0, 0, 0.2), 0px 0px 80px 90px rgba(0, 0, 0, 0.4);">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="LoginModalLabel">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div>
                        <label for="">Email</label>
                        <input type="email" name="email" placeholder="Input Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Input Email'" required class="single-input">
                    </div>
                    <div class="mt-10">
                        <label for="">Password</label>
                        <input type="password" name="password" placeholder="Input Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Input Password'" required class="single-input">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="genric-btn danger radius" data-dismiss="modal">Close</button>
                    <button class="genric-btn success radius" type="submit">Continue</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- slider_area_start -->


@yield('content');


<!-- footer start -->
<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-3">
                    <div class="footer_widget wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="footer_logo">
                            <a href="#">
                                <img src="/images/assets/footer_logo.png" alt="">
                            </a>
                        </div>
                        <p>
                            finloan@support.com <br>
                            +10 873 672 6782 <br>
                            600/D, Green road, NewYork
                        </p>
                        <div class="socail_links">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="ti-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-lg-3">
                    <div class="footer_widget wow fadeInUp" data-wow-duration="1.1s" data-wow-delay=".4s">
                        <h3 class="footer_title">
                            Services
                        </h3>
                        <ul>
                            <li><a href="#">SEO/SEM </a></li>
                            <li><a href="#">Web design </a></li>
                            <li><a href="#">Ecommerce</a></li>
                            <li><a href="#">Digital marketing</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-lg-2">
                    <div class="footer_widget wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".5s">
                        <h3 class="footer_title">
                            Useful Links
                        </h3>
                        <ul>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#"> Contact</a></li>
                            <li><a href="#">Support</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".6s">
                        <h3 class="footer_title">
                            Subscribe
                        </h3>
                        <form action="#" class="newsletter_form">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit">Subscribe</button>
                        </form>
                        <p class="newsletter_text">Esteem spirit temper too say adieus who direct esteem esteems
                            luckily.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right_text wow fadeInUp" data-wow-duration="1.4s" data-wow-delay=".3s">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy_right text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--/ footer end  -->

<!-- link that opens popup -->
</body>

</html>