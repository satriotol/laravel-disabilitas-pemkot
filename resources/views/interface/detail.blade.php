@extends('interface.layout.main')

@section('container')
<section class="container">


    <ul class="b-crumbs">
        <li>
            <a href="{{route('home')}}">
                Home
            </a>
        </li>
        <li>
            <a href="{{route('product-gallery')}}">
                Produk
            </a>
        </li>
        <li>
            <a href="{{route('product-gallery')}}">
                Kursi Roda
            </a>
        </li>
        <li>
            <span>Kursi Roda Spesial</span>
        </li>
    </ul>
    <h1 class="main-ttl"><span>Kursi Roda Spesial</span></h1>
    <!-- Single Product - start -->
    <div class="prod-wrap">
        @foreach ($products as $product )
               <!-- Product Images -->
        <div class="prod-slider-wrap">
            <div class="prod-slider">
                <ul class="prod-slider-car">
                    <li>
                        <a data-fancybox-group="product" class="fancy-img" href="http://placehold.it/500x642">
                            <img src="{{ asset('gambar/' . $product->image) }}" alt="" style="width: 100%" height="auto">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="prod-thumbs">
                <ul class="prod-thumbs-car">
                    <li>
                        <a data-slide-index="0" href="#">
                            <img src="{{ asset('gambar/' . $product->image) }}" alt="" style="width: 100%" height="auto">
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Product Description/Info -->
        <div class="prod-cont">
            <div class="prod-cont-txt">
                <p>{{  $product->description }}</p>
            </div>

            <div class="prod-info">
                <p class="prod-addwrap">
                    <a href="#" class="prod-add" rel="nofollow">Masukkan Keranjang</a>
                </p>
            </div>
            <ul class="prod-i-props" style="font-size: 25px;">
                <li>Rp.{{ $product->price  }}</li>
            </ul>
        </div>


        @endforeach


    </div>
    <!-- Single Product - end -->

    <!-- Related Products - start -->
    <div class="prod-related">
        <h2><span>Produk Terkait</span></h2>
        <div class="prod-related-car" id="prod-related-car">
            <ul class="slides">
                <li class="prod-rel-wrap">
                    <div class="prod-rel">
                        <a href="{{route('product-detail')}}" class="prod-rel-img">
                            <img src="https://ecs7.tokopedia.net/img/cache/700/product-1/2020/7/31/1721278/1721278_adc869e5-4955-4705-b661-77f9610b24aa_1080_1080.jpg" alt="Adipisci aperiam commodi">
                        </a>
                        <div class="prod-rel-cont">
                            <h3><a href="{{route('product-detail')}}">Tongkat Bantu</a></h3>
                            <p class="prod-rel-price">
                                <b>Rp. 30.000</b>
                            </p>
                        </div>
                    </div>



                    <div class="prod-rel">
                        <a href="{{route('product-detail')}}" class="prod-rel-img">
                            <img src="https://s1.bukalapak.com/img/1500314121/w-1000/img20170505_091519_alat_bantu_dengar_nbs_2.jpg" alt="Nulla numquam obcaecati">
                        </a>
                        <div class="prod-rel-cont">
                            <h3><a href="{{route('product-detail')}}">Alat Bantu Dengar</a></h3>
                            <p class="prod-rel-price">
                                <b>Rp. 40.000</b>
                            </p>
                        </div>
                    </div>



                    <div class="prod-rel">
                        <a href="{{route('product-detail')}}" class="prod-rel-img">
                            <img src="https://cf.shopee.co.id/file/b3044087ff365b5a40c5f6db1c8616c7" alt="Dignissimos eaque earum">
                        </a>
                        <div class="prod-rel-cont">
                            <h3><a href="{{route('product-detail')}}">Kaki Palsu</a></h3>
                            <p class="prod-rel-price">
                                <b>Rp. 45.000</b>
                            </p>
                        </div>
                    </div>



                    <div class="prod-rel">
                        <a href="{{route('product-detail')}}" class="prod-rel-img">
                            <img src="https://s3.bukalapak.com/img/3897836966/large/kURSI_RODA_BEKAS_MEREK_TRANSMED.jpg" alt="Porro quae quasi">
                        </a>
                        <div class="prod-rel-cont">
                            <h3><a href="{{route('product-detail')}}">Kursi Roda Silver</a></h3>
                            <p class="prod-rel-price">
                                <b>Rp. 40.000</b>
                            </p>
                        </div>
                    </div>

                </li>
                <li class="prod-rel-wrap">
                    <div class="prod-rel">
                        <a href="{{route('product-detail')}}" class="prod-rel-img">
                            <img src="https://ecs7.tokopedia.net/img/cache/700/product-1/2020/7/31/1721278/1721278_adc869e5-4955-4705-b661-77f9610b24aa_1080_1080.jpg" alt="Sunt temporibus velit">
                        </a>
                        <div class="prod-rel-cont">
                            <h3><a href="{{route('product-detail')}}">Tongkat Bantu</a></h3>
                            <p class="prod-rel-price">
                                <b>Rp. 30.000</b>
                            </p>
                        </div>
                    </div>



                    <div class="prod-rel">
                        <a href="{{route('product-detail')}}" class="prod-rel-img">
                            <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//88/MTA-2239333/ottobock_ottobock-tangan-palsu-bawah-siku_full02.jpg" alt="Harum illum incidunt">
                        </a>
                        <div class="prod-rel-cont">
                            <h3><a href="{{route('product-detail')}}">Tangan Palsu</a></h3>
                            <p class="prod-rel-price">
                                <b>Rp. 50.000</b>
                            </p>
                        </div>
                    </div>



                    <div class="prod-rel">
                        <a href="{{route('product-detail')}}" class="prod-rel-img">
                            <img src="https://cf.shopee.co.id/file/b3044087ff365b5a40c5f6db1c8616c7" alt="Reprehenderit rerum">
                        </a>
                        <div class="prod-rel-cont">
                            <h3><a href="{{route('product-detail')}}">Kaki Palsu</a></h3>
                            <p class="prod-rel-price">
                                <b>Rp. 15.000</b>
                            </p>
                        </div>
                    </div>



                    <div class="prod-rel">
                        <a href="{{route('product-detail')}}" class="prod-rel-img">
                            <img src="https://s1.bukalapak.com/img/1500314121/w-1000/img20170505_091519_alat_bantu_dengar_nbs_2.jpg" alt="Quae quasi adipisci alias">
                        </a>
                        <div class="prod-rel-cont">
                            <h3><a href="{{route('product-detail')}}">Alat Bantu Dengar</a></h3>
                            <p class="prod-rel-price">
                                <b>Rp. 100.000</b>
                            </p>
                        </div>
                    </div>

                </li>
                <li class="prod-rel-wrap">
                    <div class="prod-rel">
                        <a href="{{route('product-detail')}}" class="prod-rel-img">
                            <img src="https://s3.bukalapak.com/img/3897836966/large/kURSI_RODA_BEKAS_MEREK_TRANSMED.jpg" alt="Maxime molestias necessitatibus nobis">
                        </a>
                        <div class="prod-rel-cont">
                            <h3><a href="{{route('product-detail')}}">Kursi Roda</a></h3>
                            <p class="prod-rel-price">
                                <b>Rp. 10.000</b>
                            </p>
                        </div>
                    </div>



                    <div class="prod-rel">
                        <a href="{{route('product-detail')}}" class="prod-rel-img">
                            <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//88/MTA-2239333/ottobock_ottobock-tangan-palsu-bawah-siku_full02.jpg" alt="Facilis illum">
                        </a>
                        <div class="prod-rel-cont">
                            <h3><a href="{{route('product-detail')}}">Tangan Palsu</a></h3>
                            <p class="prod-rel-price">
                                <b>Rp. 20.000</b>
                            </p>
                        </div>
                    </div>

                </li>
            </ul>
        </div>
    </div>
    <!-- Related Products - end -->


</section>
@endsection
