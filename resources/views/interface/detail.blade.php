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

        <!-- Product Images -->
        <div class="prod-slider-wrap">
            <div class="prod-slider">
                <ul class="prod-slider-car">
                    <li>
                        <a data-fancybox-group="product" class="fancy-img" href="http://placehold.it/500x642">
                            <img src="https://s3.bukalapak.com/img/3897836966/large/kURSI_RODA_BEKAS_MEREK_TRANSMED.jpg" alt="">
                        </a>
                    </li>
                    <li>
                        <a data-fancybox-group="product" class="fancy-img" href="http://placehold.it/500x722">
                            <img src="https://s3.bukalapak.com/img/3897836966/large/kURSI_RODA_BEKAS_MEREK_TRANSMED.jpg" alt="">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="prod-thumbs">
                <ul class="prod-thumbs-car">
                    <li>
                        <a data-slide-index="0" href="#">
                            <img src="https://s3.bukalapak.com/img/3897836966/large/kURSI_RODA_BEKAS_MEREK_TRANSMED.jpg" alt="">
                        </a>
                    </li>
                    <li>
                        <a data-slide-index="1" href="#">
                            <img src="https://s3.bukalapak.com/img/3897836966/large/kURSI_RODA_BEKAS_MEREK_TRANSMED.jpg" alt="">
                        </a>
                    </li>
                    <li>
                        <a data-slide-index="2" href="#">
                            <img src="https://s3.bukalapak.com/img/3897836966/large/kURSI_RODA_BEKAS_MEREK_TRANSMED.jpg" alt="">
                        </a>
                    </li>
                    <li>
                        <a data-slide-index="3" href="#">
                            <img src="https://s3.bukalapak.com/img/3897836966/large/kURSI_RODA_BEKAS_MEREK_TRANSMED.jpg" alt="">
                        </a>
                    </li>
                    <li>
                        <a data-slide-index="4" href="#">
                            <img src="https://s3.bukalapak.com/img/3897836966/large/kURSI_RODA_BEKAS_MEREK_TRANSMED.jpg" alt="">
                        </a>
                    </li>
                    <li>
                        <a data-slide-index="5" href="#">
                            <img src="https://s3.bukalapak.com/img/3897836966/large/kURSI_RODA_BEKAS_MEREK_TRANSMED.jpg" alt="">
                        </a>
                    </li>
                    <li>
                        <a data-slide-index="6" href="#">
                            <img src="https://s3.bukalapak.com/img/3897836966/large/kURSI_RODA_BEKAS_MEREK_TRANSMED.jpg" alt="">
                        </a>
                    </li>
                    <li>
                        <a data-slide-index="7" href="#">
                            <img src="https://s3.bukalapak.com/img/3897836966/large/kURSI_RODA_BEKAS_MEREK_TRANSMED.jpg" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Product Description/Info -->
        <div class="prod-cont">
            <div class="prod-cont-txt">
                <p>Kursi roda ini merupakan kursi roda standard dengan jari-jari roda utama racing. Kelebihan velg racing ini adalah roda menjadi lebih stabil (tidak perlu kalibrasi jari2) dan tampilan lebih modis.</p>
                <p>Kelebihan berbelanja di BYRGIR:</p>
                <p>1. Stok ready dan selalu mengalir karena stok kami supply di beberapa cabang. Untuk PO cepat hanya 1-3 hari kerja.</p>
                <p>2. Packing standar aman.</p>
                <p>Kursi Roda 2 in 1 atau multifungsi ini dapat digunakan buat buang air besar atau BAB sekaligus dapat di pakai juga buat jalan-jalan dan untuk bagian bawahnya yang buat BAB dapat di bongkar pasang dengan sangat mudah, sehingga sangat praktis ketika di bawa kemana-mana</p>
            </div>

            <div class="prod-info">
                <p class="prod-addwrap">
                    <a href="#" class="prod-add" rel="nofollow">Add to cart</a>
                </p>
            </div>
            <ul class="prod-i-props" style="font-size: 25px;">
                <li>Rp. 30.000</li>
            </ul>
        </div>

        <!-- Product Tabs -->
        <div class="prod-tabs-wrap">
            <ul class="prod-tabs">
                <li><a data-prodtab-num="3" id="prod-props" href="#" data-prodtab="#prod-tab-3">Spesifikasi</a></li>
                <li><a data-prodtab-num="4" href="#" data-prodtab="#prod-tab-4">Ulasan (3)</a></li>
            </ul>
            <div class="prod-tab-cont">

                <p data-prodtab-num="3" class="prod-tab-mob" data-prodtab="#prod-tab-3">Spesifikasi</p>
                <div class="prod-tab prod-props" id="prod-tab-3">
                    <table>
                        <tbody>
                        <tr>
                            <td>Dimensi Kardus</td>
                            <td>88 x 24 x 93 cm</td>
                        </tr>
                        <tr>
                            <td>Berat Bersih</td>
                            <td>18,15 kg</td>
                        </tr>
                        <tr>
                            <td>Bahan Frame</td>
                            <td>High carbon steel</td>
                        </tr>
                        <tr>
                            <td>Berat maksimum</td>
                            <td>100 kg</td>
                        </tr>
                        <tr>
                            <td>Sistem pispot</td>
                            <td>Sliding</td>
                        </tr>
                        <tr>
                            <td>Jenis Ban</td>
                            <td>Ban mati</td>
                        </tr>
                        <tr>
                            <td>Berat Kursi Roda</td>
                            <td>20 kg</td>
                        </tr>
                        <tr>
                            <td>Bahan dudukan</td>
                            <td>Waterproof oxford/PU leather</td>
                        </tr>
                        <tr>
                            <td>Lebar Jok</td>
                            <td>46 cm</td>
                        </tr>
                        <tr>
                            <td>Bab Racing</td>
                            <td>kerangka hitam, velg model racing, roda hitam</td>
                        </tr>
                        <tr>
                            <td>Bab Jaring</td>
                            <td>kerangka silver, velg model jaring, roda abu-abu</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <p data-prodtab-num="4" class="prod-tab-mob" data-prodtab="#prod-tab-4">Ulasan (3)</p>
                <div class="prod-tab" id="prod-tab-4">
                    <ul class="reviews-list">
                        <li class="reviews-i existimg">
                            <div class="reviews-i-img">
                                <img src="https://i.pinimg.com/736x/dc/5c/22/dc5c2253d5604aa63fd59bd351b288e5.jpg" alt="Averill Sidony">
                                <div class="reviews-i-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <time datetime="2017-12-21 12:19:46" class="reviews-i-date">21 May 2017</time>
                            </div>
                            <div class="reviews-i-cont">
                                <p>Alhamdulillah produk bagus , customer suka terimakasih banyak 💐</p>
                                <span class="reviews-i-margin"></span>
                                <h3 class="reviews-i-ttl">Averill Sidony</h3>
                                <p class="reviews-i-showanswer"><span data-open="Show answer" data-close="Hide answer">Show answer</span> <i class="fa fa-angle-down"></i></p>
                            </div>
                            <div class="reviews-i-answer">
                                <p>Thanks for your feedback!<br>
                                    Terimakasih Telah berbelanja di toko kami, Di tunggu next order nya ya kaka :)</p>
                                <span class="reviews-i-margin"></span>
                            </div>
                        </li>
                        <li class="reviews-i existimg">
                            <div class="reviews-i-img">
                                <img src="https://divedigital.id/wp-content/uploads/2022/05/47.jpg" alt="Araminta Kristeen">
                                <div class="reviews-i-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <time datetime="2017-12-21 12:19:46" class="reviews-i-date">14 February 2017</time>
                            </div>
                            <div class="reviews-i-cont">
                                Alhamdulillah produk bagus , customer suka terimakasih banyak 💐
                                <span class="reviews-i-margin"></span>
                                <h3 class="reviews-i-ttl">Araminta Kristeen</h3>
                                <p class="reviews-i-showanswer"><span data-open="Show answer" data-close="Hide answer">Show answer</span> <i class="fa fa-angle-down"></i></p>
                            </div>
                            <div class="reviews-i-answer">
                                Halo Kakak<br>
                                Terimakasih telah berbelanja di toko kami, ditunggu orderan selanjut nya ya kaka😊🙏
                                <span class="reviews-i-margin"></span>
                            </div>
                        </li>
                        <li class="reviews-i existimg">
                            <div class="reviews-i-img">
                                <img src="https://cf.shopee.co.id/file/c607b747ea9b5ce5a25e1f3cde88ecb2" alt="Araminta Kristeen">
                                <div class="reviews-i-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <time datetime="2017-12-21 12:19:46" class="reviews-i-date">14 February 2017</time>
                            </div>
                            <div class="reviews-i-cont">
                                Barang sudah sampai, namun saat di buka dari box nya ada bagian yg patah dari jari2 velg ban nya. Mungkin bkn dari pabrik tpi dari pengirimannya yg gk menjaga barang dengan benar
                                <span class="reviews-i-margin"></span>
                                <h3 class="reviews-i-ttl">Araminta Kristeen</h3>
                                <p class="reviews-i-showanswer"><span data-open="Show answer" data-close="Hide answer">Show answer</span> <i class="fa fa-angle-down"></i></p>
                            </div>
                            <div class="reviews-i-answer">
                                Mohon maaf atas ketidak nyamanan nya kaka, apabila ada kendala barang yang tidak sesuai kaka bisa mengajukan retur ya kaka:)
                                <span class="reviews-i-margin"></span>
                            </div>
                        </li>
                    </ul>
                    <div class="prod-comment-form">
                        <h3>Add your review</h3>
                        <form method="POST" action="#">
                            <input type="text" placeholder="Name">
                            <input type="text" placeholder="E-mail">
                            <textarea placeholder="Your review"></textarea>
                            <div class="prod-comment-submit">
                                <input type="submit" value="Submit">
                                <div class="prod-rating">
                                    <i class="fa fa-star-o" title="5"></i><i class="fa fa-star-o" title="4"></i><i class="fa fa-star-o" title="3"></i><i class="fa fa-star-o" title="2"></i><i class="fa fa-star-o" title="1"></i>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

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
