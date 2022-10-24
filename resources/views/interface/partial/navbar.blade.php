<div class="header_top">
    <div class="container">
        <ul class="contactinfo nav nav-pills">
            <li>
                <i class="fa fa-phone"></i> {{$kontak_kami->telp}}
            </li>
            <li>
                <i class="fa fa-envelope"></i> {{$kontak_kami->email}}
            </li>
        </ul>
    </div>
</div>
<div class="header-middle">
    <div class="container header-middle-cont">
        <div class="toplogo">
            <a href="{{ route('home') }}">
                <div class="row">
                    <h1 style="text-align: justify;"><img style="float: left;" src="{{ asset('img/pemkot.png') }}" alt="PEMKOT SEMARANG">{{$tagline->nama_website}}</h1>
                </div>
            </a>
        </div>
        <div class="shop-menu">
            <ul>
                <li>
                    <a href="{{ route('product-gallery') }}">
                        <i class="fa fa-heart"></i>
                        <span class="shop-menu-ttl">Produk Kami</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('dashboard') }}">
                        <i class="fa fa-heart"></i>
                        <span class="shop-menu-ttl">Donasi Sekarang</span>
                    </a>
                </li>
                <li class="topauth">
                    <a href="{{ route('register') }}">
                        <i class="fa fa-lock"></i>
                        <span class="shop-menu-ttl">Daftar</span>
                    </a>
                    <a href="{{ route('login') }}">
                        <span class="shop-menu-ttl">Login</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Logo, Shop-menu - end -->
