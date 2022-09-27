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
                        <a href="{{ route('cart') }}">
                            {{-- <img src="{{asset('img/ikon keranjang-01.png')}}" style="width: 57px; height: 54px;" alt="Semarang Care Official"> --}}
                            <button class="btn-jual">Jual</button>
                        </a>

                    </li>
                    <li class="login">
                        <a href="{{ route('login') }}">
                            {{-- <img src="{{asset('img/ikon user-02.png')}}" style="width: 57px; height: 54px;" alt="Semarang Care Official"> --}}
                            <button class="btn-login">Masuk</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
