<nav class="navBar">
    <div class="header-middle">
        <div class="container header-middle-cont">
            <div class="toplogo">
                <a href="{{ route('home') }}">
                    <img src="{{asset('img/S-care logo-01.png')}}" alt="Semarang Care Official">
                </a>
            </div>
            <div class="shop-menu">
                <ul>
                    <li>
                        <a href="compare.html">
                            <img src="{{asset('img/Button Jual-03.png')}}" style="width: 110px; height: 56px;" alt="Semarang Care Official">
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('cart') }}">
                            <img src="{{asset('img/ikon keranjang-01.png')}}" style="width: 57px; height: 54px;" alt="Semarang Care Official">
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('login') }}">
                            <img src="{{asset('img/ikon user-02.png')}}" style="width: 57px; height: 54px;" alt="Semarang Care Official">
                        </a>
                    </li>
            </div>
        </div>
    </div>
</nav>
