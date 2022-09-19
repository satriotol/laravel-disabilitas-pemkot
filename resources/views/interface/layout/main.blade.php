<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" href="{{ asset('img/logook.png') }}" type="image/x-icon">
    <title>Semarang Care Official</title>

    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css 1/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css 1/ion.rangeSlider.css')}}">
    <link rel="stylesheet" href="{{asset('css 1/ion.rangeSlider.skinFlat.css')}}">
    <link rel="stylesheet" href="{{asset('css 1/jquery.bxslider.css')}}">
    <link rel="stylesheet" href="{{asset('css 1/jquery.fancybox.css')}}">
    <link rel="stylesheet" href="{{asset('css 1/flexslider.css')}}">
    <link rel="stylesheet" href="{{asset('css 1/swiper.css')}}">
    <link rel="stylesheet" href="{{asset('css 1/style.css')}}">
    <link rel="stylesheet" href="{{asset('css 1/media.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{asset('tentang/css/style.css')}}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset('tentang/css/responsive.css')}}">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset('tentang/css/jquery.mCustomScrollbar.min.css')}}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/6.2.0/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="{{asset('tentang/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('tentang/css/owl.theme.defaSelt.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!-- FAQ -->
    <link rel="stylesheet" href="{{asset('css 1/faq.css')}}">

</head>
<body>
    <!-- Header - start -->
    <header class="header">
        <!-- Logo, Shop-menu - start -->
        @include('interface.partial.navbar')

        <!-- Logo, Shop-menu - end -->

        <!-- Topmenu - start -->
        @include('interface.partial.header')

    </header>
    <!-- Header - end -->

    <main>
        @yield('container')
    </main>

    <!-- Footer - start -->
    <footer class="footer-wrap">

        <div class="container f-menu-list">
            <div class="row">
                <div class="f-menu">
                    <a href="{{ route('home') }}">
                        <img src="{{asset('img/S-care logo part 2-03.png')}}" alt="S-care">
                    </a>
                </div>
                <div class="f-menu">
                    <h3>
                        Home
                    </h3>
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="{{ route('home') }}#kategori-bab">Kategori</a></li>
                        <li><a href="{{ route('home') }}#tentang-bab">Tentang</a></li>
                        <li><a href="{{ route('home') }}#faq-bab">FAQ</a></li>
                        <li><a href="{{ route('home') }}#kontakkami-bab">Kontak kami</a></li>
                    </ul>
                </div>
                <div class="f-menu">
                    <h3>
                        Kategori
                    </h3>
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="{{route('product-gallery')}}">Kursi Roda</a></li>
                        <li><a href="{{route('product-gallery')}}">Tongkat Bantu</a></li>
                        <li><a href="{{route('product-gallery')}}">Alat Bantu  Dengar</a></li>
                        <li><a href="{{route('product-gallery')}}">Kaki Palsu</a></li>
                        <li><a href="{{route('product-gallery')}}">Tangan Palsu</a></li>
                    </ul>
                </div>
                <div class="f-menu" style="text-size-adjust: 20px;">
                    <h3>
                        Kontak Kami
                    </h3>
                    <ul class="nav nav-pills nav-stacked">
                        <li><a> Telp: (024) 3513366</a></li>
                        <li><a> Kode: Pos 50132</a></li>
                        <li><a> Alamat: Jl.Pemuda No.148, Semarang</a></li>
                        <li><a> E-mail: pemkotsmg@semarangkota.go.id</a></li>
                    </ul>
                </div>
                <div class="f-subscribe" style="color: #fff;">
                    <h3>Subscribe to news</h3>
                    <form class="f-subscribe-form" action="#">
                        <input placeholder="Email Anda" type="text">
                        <button type="submit"><i class="fa fa-paper-plane"></i></button>
                    </form>
                    <p>Masukkan alamat email Anda jika Anda ingin menerima buletin kami. Berlangganan sekarang!</p>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <ul class="social-icons nav navbar-nav" style="color: #fff;">
                        <li >
                            <a href="http://youtube.com/" rel="nofollow" target="_blank">
                                <img src="{{asset('img/youtube-09.png')}}" style="width:35px; height:35px; margin-right: 3px;">
                            </a>
                        </li>
                        <li>
                            <a href="http://facebook.com/" rel="nofollow" target="_blank">
                                <img src="{{asset('img/facebook-10.png')}}" style="width:35px; height:35px; margin-right: 3px;">
                            </a>
                        </li>
                        <li>
                            <a href="http://instagram.com/" rel="nofollow" target="_blank">
                                <img src="{{asset('img/instagram-11.png')}}" style="width:35px; height:35px; margin-right: 3px;">
                            </a>
                        </li>
                        <li>
                            <a href="https://semarangkota.go.id/" rel="nofollow" target="_blank">
                                <img src="{{asset('img/pemkot.png')}}" style="width:35px; height:35px;">
                            </a>
                        </li>
                    </ul>
                    <div class="footer-copyright">
                        <i><a href="https://semarangkota.go.id/" style="color: #fff;">Pemkot Semarang</a></i> ©Copyright 2022
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- Footer - end -->


    <!-- jQuery plugins/scripts - start -->
    <!-- new script -->
    <script>
        var navBar = document.getElementById("navBar");
        window.onscroll = function() {
          if (window.scrollY > 22) {
            navBar.classList.add("scrolled");
          } else {
            navBar.classList.remove("scrolled");
          }
        };
      </script>

    <script src="{{asset('js/jquery-1.11.2.min.js')}}"></script>
    <script src="{{asset('js/jquery.bxslider.min.js')}}"></script>
    <script src="{{asset('js/fancybox/fancybox.js')}}"></script>
    <script src="{{asset('js/fancybox/helpers/jquery.fancybox-thumbs.js')}}"></script>
    <script src="{{asset('js/jquery.flexslider-min.js')}}"></script>
    <script src="{{asset('js/swiper.jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('js/progressbar.min.js')}}"></script>
    <script src="{{asset('js/ion.rangeSlider.min.js')}}"></script>
    <script src="{{asset('js/chosen.jquery.min.js')}}"></script>
    <script src="{{asset('js/jQuery.Brazzers-Carousel.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhAYvx0GmLyN5hlf6Uv_e9pPvUT3YpozE"></script>
    <script src="{{asset('js/gmap.js')}}"></script>
    <script src="{{asset('js/faq.js')}}"></script>
    <!-- jQuery plugins/scripts - end -->

    </body>
    </html>