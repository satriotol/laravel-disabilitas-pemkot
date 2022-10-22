<div class="header_top">
    <div class="container">
        <ul class="contactinfo nav nav-pills">
            <li>
                <i class="fa fa-phone"></i> +7 777 123 1575
            </li>
            <li>
                <i class="fa fa-envelope"></i> admin@real-web.pro
            </li>
        </ul>
        <!-- Social links -->
        <ul class="social-icons nav navbar-nav">
            <li>
                <a href="http://facebook.com" rel="nofollow" target="_blank">
                    <i class="fa fa-facebook"></i>
                </a>
            </li>
            <li>
                <a href="http://google.com" rel="nofollow" target="_blank">
                    <i class="fa fa-google-plus"></i>
                </a>
            </li>
            <li>
                <a href="http://twitter.com" rel="nofollow" target="_blank">
                    <i class="fa fa-twitter"></i>
                </a>
            </li>
            <li>
                <a href="http://vk.com" rel="nofollow" target="_blank">
                    <i class="fa fa-vk"></i>
                </a>
            </li>
            <li>
                <a href="http://instagram.com" rel="nofollow" target="_blank">
                    <i class="fa fa-instagram"></i>
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="header-middle">
    <div class="container header-middle-cont">
        <div class="toplogo">
            <a href="index.html">
                <img src="{{ asset('img/pemkot.png') }}" alt="PEMKOT SEMARANG">
                <p>{{ $tagline->nama_website ?? '' }}</p>
            </a>
        </div>
        <div class="shop-menu">
            <ul>
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
