<!-- Logo, Shop-menu - start -->
<div class="header-middle">
    <div class="container header-middle-cont">
        <div class="toplogo">
            <a href="index.html" style="text-align: justify; font-size: 20px;">
                @foreach ($taglines as $t)
                <img src="{{asset('img/pemkot.png')}}" alt="Semarang Pemkot">
                <p>{{ $t->nama_website }}</p>
                @endforeach
            </a>

        </div>
        <div class="shop-menu">
            <ul>

                <li class="login">
                    <a href="{{ route('login') }}">
                        {{-- <img src="{{asset('img/ikon user-02.png')}}" style="width: 57px; height: 54px;" alt="Semarang Care Official"> --}}
                        <button class="btn-login">Donasikan Sekarang!</button>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Logo, Shop-menu - end -->
