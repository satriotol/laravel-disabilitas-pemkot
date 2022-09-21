@extends('interface.layout.main')

@section('container')
    <!-- Main Content - start -->
    <section class="container">


        <!-- Slider -->
        <div class="fr-slider-wrap">
            <div class="fr-slider">
                <ul class="slides">
                    @foreach ($sliders as $slider)
                        <li>
                            <img src="{{ asset('gambar/' . $slider->image) }}" alt="">
                            <div class="fr-slider-cont">
                                <h3>{{ $slider->name }}</h3>
                                <p>{{ $slider->description }}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <br>
        <!-- Popular Products -->
        <div class="fr-pop-wrap" id="kategori-bab">

            <h3 class="component-ttl"><span>Kategori</span></h3>

            <ul class="fr-pop-tabs sections-show">
                <li><a data-frpoptab-num="1" data-frpoptab="#frpoptab-tab-1" href="#" class="active">Semua
                        Kategori</a></li>
                <li><a data-frpoptab-num="2" data-frpoptab="#frpoptab-tab-2" href="#">Kursi Roda</a></li>
                <li><a data-frpoptab-num="3" data-frpoptab="#frpoptab-tab-3" href="#">Tongkat Bantu</a></li>
                <li><a data-frpoptab-num="4" data-frpoptab="#frpoptab-tab-4" href="#">Alat Bantu Dengar</a></li>
                <li><a data-frpoptab-num="5" data-frpoptab="#frpoptab-tab-5" href="#">Kaki Palsu</a></li>
                <li><a data-frpoptab-num="5" data-frpoptab="#frpoptab-tab-5" href="#">Tangan Palsu</a></li>
            </ul>

            <div class="fr-pop-tab-cont">

                <p data-frpoptab-num="1" class="fr-pop-tab-mob active" data-frpoptab="#frpoptab-tab-1">Semua Kategori</p>
                <div class="flexslider prod-items fr-pop-tab" id="frpoptab-tab-1">

                    <ul class="slides">

                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img">
                                    <!-- NO SPACE --><img
                                        src="https://s3.bukalapak.com/img/3897836966/large/kURSI_RODA_BEKAS_MEREK_TRANSMED.jpg"
                                        alt="Kursi Roda Bekas"><!-- NO SPACE -->
                                </a>
                                <p class="prod-i-addwrap">
                                    <a href="{{ route('product-gallery') }}" class="prod-i-add">Pergi Ke Detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="{{ route('product-gallery') }}">Kursi Roda Bekas Merk Transmed</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>Rp. 78.000</b>
                            </p>
                        </li>

                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img">
                                    <!-- NO SPACE --><img
                                        src="https://s1.bukalapak.com/img/621675472/w-1000/Kursi_Roda_Standard_Velg_Racing_Sella_KY_809B.jpg"
                                        alt="Kursi Roda"><!-- NO SPACE -->
                                </a>
                                <p class="prod-i-addwrap">
                                    <a href="product.html" class="prod-i-add">Pergi Ke Detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Kursi Roda Bahan Stenless</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>Rp. 125.000</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img">
                                    <!-- NO SPACE --><img
                                        src="https://ecs7.tokopedia.net/img/cache/700/product-1/2020/7/31/1721278/1721278_adc869e5-4955-4705-b661-77f9610b24aa_1080_1080.jpg"
                                        alt="Tongkat Lipat"><!-- NO SPACE -->
                                </a>
                                <p class="prod-i-addwrap">
                                    <a href="product.html" class="prod-i-add">Pergi Ke Detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Tongkat Lipat</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>Rp. 22.500</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img">
                                    <!-- NO SPACE --><img
                                        src="https://ecs7.tokopedia.net/img/cache/700/product-1/2018/11/8/31257966/31257966_6e392b20-2083-4df5-96e4-c5dd6393f9b6_700_700.png"
                                        alt="Tongkat Bantu"><!-- NO SPACE -->
                                </a>
                                <p class="prod-i-addwrap">
                                    <a href="product.html" class="prod-i-add">Pergi Ke Detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Tongkat Bantu Best Seller</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>Rp. 35.000</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img">
                                    <!-- NO SPACE --><img
                                        src="https://s4.bukalapak.com/img/932759423/w-1000/TONGKAT_KURSI_ALAT_BANTU_JALAN_BANGKU_DUDUK_ORANG_TUA_bahan_.jpg"
                                        alt="Bangku Duduk"><!-- NO SPACE -->
                                </a>
                                <p class="prod-i-addwrap">
                                    <a href="product.html" class="prod-i-add">Pergi Ke Detail</a>
                                </p>
                                <div class="prod-sticker">
                                    <p class="prod-sticker-2">HOT DEALS</p>
                                </div>
                            </div>
                            <h3>
                                <a href="product.html">Bangku Duduk</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>Rp. 75.000</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img">
                                    <!-- NO SPACE --><img
                                        src="https://s4.bukalapak.com/img/932759423/w-1000/TONGKAT_KURSI_ALAT_BANTU_JALAN_BANGKU_DUDUK_ORANG_TUA_bahan_.jpg"
                                        alt="Bangku Duduk"><!-- NO SPACE -->
                                </a>
                                <p class="prod-i-addwrap">
                                    <a href="product.html" class="prod-i-add">Pergi Ke Detail</a>
                                </p>
                                <div class="prod-sticker">
                                    <p class="prod-sticker-1">BARU</p>
                                </div>
                            </div>
                            <h3>
                                <a href="product.html">Bangku Duduk</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>Rp. 75.000</b>
                            </p>
                        </li>

                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img">
                                    <!-- NO SPACE --><img
                                        src="https://ecs7.tokopedia.net/img/cache/700/product-1/2020/7/31/1721278/1721278_adc869e5-4955-4705-b661-77f9610b24aa_1080_1080.jpg"
                                        alt="Tongkat Lipat"><!-- NO SPACE -->
                                </a>
                                <p class="prod-i-addwrap">
                                    <a href="product.html" class="prod-i-add">Pergi Ke Detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Tongkat Lipat</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>Rp. 22.500</b>
                            </p>
                        </li>

                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img">
                                    <!-- NO SPACE --><img
                                        src="https://s4.bukalapak.com/img/4319980912/large/Kursi_Roda_Elektrik_Lipat_Ekonomis_dan_TRENDY.jpg"
                                        alt="Kursi Roda Elektrik"><!-- NO SPACE -->
                                </a>
                                <p class="prod-i-addwrap">
                                    <a href="product.html" class="prod-i-add">Pergi Ke Detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Kursi Roda Elektrik</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>Rp. 1.225.000</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img">
                                    <!-- NO SPACE --><img
                                        src="https://s3.bukalapak.com/img/3897836966/large/kURSI_RODA_BEKAS_MEREK_TRANSMED.jpg"
                                        alt="Kursi Roda Bekas"><!-- NO SPACE -->
                                </a>
                                <p class="prod-i-addwrap">
                                    <a href="product.html" class="prod-i-add">Pergi Ke Detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Kursi Roda Bekas Merk Transmed</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>Rp. 78.000</b>
                            </p>
                        </li>

                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img">
                                    <!-- NO SPACE --><img
                                        src="https://s1.bukalapak.com/img/1933370611/w-1000/Tongkat_kaki_3_Alat_Bantu_Jalan_Fisioterapi___Sella.jpg"
                                        alt="Tongkat Bantu"><!-- NO SPACE -->
                                </a>
                                <p class="prod-i-addwrap">
                                    <a href="product.html" class="prod-i-add">Pergi Ke Detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Tongkat Bantu Stenlees</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>Rp.65.000</b>
                            </p>
                        </li>


                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img">
                                    <!-- NO SPACE --><img
                                        src="https://s1.bukalapak.com/img/1500314121/w-1000/img20170505_091519_alat_bantu_dengar_nbs_2.jpg"
                                        alt="Alat Bantu Dengar"><!-- NO SPACE -->
                                </a>
                                <p class="prod-i-addwrap">
                                    <a href="product.html" class="prod-i-add">Pergi Ke Detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Alat Bantu Dengar</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>Rp. 47.500</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img">
                                    <!-- NO SPACE --><img
                                        src="https://ecs7.tokopedia.net/img/cache/700/product-1/2020/7/31/1721278/1721278_adc869e5-4955-4705-b661-77f9610b24aa_1080_1080.jpg"
                                        alt="Tongkat Lipat"><!-- NO SPACE -->
                                </a>
                                <p class="prod-i-addwrap">
                                    <a href="product.html" class="prod-i-add">Pergi Ke Detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Tongkat Lipat</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>Rp. 22.500</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img">
                                    <!-- NO SPACE --><img
                                        src="https://ecs7.tokopedia.net/img/cache/700/product-1/2020/7/31/1721278/1721278_adc869e5-4955-4705-b661-77f9610b24aa_1080_1080.jpg"
                                        alt="Tongkat Lipat"><!-- NO SPACE -->
                                </a>
                                <p class="prod-i-addwrap">
                                    <a href="product.html" class="prod-i-add">Pergi Ke Detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Tongkat Lipat</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>Rp. 22.500</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img">
                                    <!-- NO SPACE --><img
                                        src="https://ecs7.tokopedia.net/img/cache/700/product-1/2020/7/31/1721278/1721278_adc869e5-4955-4705-b661-77f9610b24aa_1080_1080.jpg"
                                        alt="Tongkat Lipat"><!-- NO SPACE -->
                                </a>
                                <p class="prod-i-addwrap">
                                    <a href="product.html" class="prod-i-add">Pergi Ke Detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Tongkat Lipat</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>Rp. 22.500</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img">
                                    <!-- NO SPACE --><img
                                        src="https://ecs7.tokopedia.net/img/cache/700/product-1/2020/7/31/1721278/1721278_adc869e5-4955-4705-b661-77f9610b24aa_1080_1080.jpg"
                                        alt="Tongkat Lipat"><!-- NO SPACE -->
                                </a>
                                <p class="prod-i-addwrap">
                                    <a href="product.html" class="prod-i-add">Pergi Ke Detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Tongkat Lipat</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>Rp. 22.500</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img">
                                    <!-- NO SPACE --><img
                                        src="https://ecs7.tokopedia.net/img/cache/700/product-1/2020/7/31/1721278/1721278_adc869e5-4955-4705-b661-77f9610b24aa_1080_1080.jpg"
                                        alt="Tongkat Lipat"><!-- NO SPACE -->
                                </a>
                                <p class="prod-i-addwrap">
                                    <a href="product.html" class="prod-i-add">Pergi Ke Detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Tongkat Lipat</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>Rp. 22.500</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img">
                                    <!-- NO SPACE --><img
                                        src="https://ecs7.tokopedia.net/img/cache/700/product-1/2020/7/31/1721278/1721278_adc869e5-4955-4705-b661-77f9610b24aa_1080_1080.jpg"
                                        alt="Tongkat Lipat"><!-- NO SPACE -->
                                </a>
                                <p class="prod-i-addwrap">
                                    <a href="product.html" class="prod-i-add">Pergi Ke Detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Tongkat Lipat</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>Rp. 22.500</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img">
                                    <!-- NO SPACE --><img
                                        src="https://ecs7.tokopedia.net/img/cache/700/product-1/2020/7/31/1721278/1721278_adc869e5-4955-4705-b661-77f9610b24aa_1080_1080.jpg"
                                        alt="Tongkat Lipat"><!-- NO SPACE -->
                                </a>
                                <p class="prod-i-addwrap">
                                    <a href="product.html" class="prod-i-add">Pergi Ke Detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Tongkat Lipat</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>Rp. 22.500</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img">
                                    <!-- NO SPACE --><img
                                        src="https://ecs7.tokopedia.net/img/cache/700/product-1/2020/7/31/1721278/1721278_adc869e5-4955-4705-b661-77f9610b24aa_1080_1080.jpg"
                                        alt="Tongkat Lipat"><!-- NO SPACE -->
                                </a>
                                <p class="prod-i-addwrap">
                                    <a href="product.html" class="prod-i-add">Pergi Ke Detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Tongkat Lipat</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>Rp. 22.500</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img">
                                    <!-- NO SPACE --><img
                                        src="https://ecs7.tokopedia.net/img/cache/700/product-1/2020/7/31/1721278/1721278_adc869e5-4955-4705-b661-77f9610b24aa_1080_1080.jpg"
                                        alt="Tongkat Lipat"><!-- NO SPACE -->
                                </a>
                                <p class="prod-i-addwrap">
                                    <a href="product.html" class="prod-i-add">Pergi Ke Detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Tongkat Lipat</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>Rp. 22.500</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img">
                                    <!-- NO SPACE --><img
                                        src="https://ecs7.tokopedia.net/img/cache/700/product-1/2020/7/31/1721278/1721278_adc869e5-4955-4705-b661-77f9610b24aa_1080_1080.jpg"
                                        alt="Tongkat Lipat"><!-- NO SPACE -->
                                </a>
                                <p class="prod-i-addwrap">
                                    <a href="product.html" class="prod-i-add">Pergi Ke Detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Tongkat Lipat</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>Rp. 22.500</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img">
                                    <!-- NO SPACE --><img
                                        src="https://ecs7.tokopedia.net/img/cache/700/product-1/2020/7/31/1721278/1721278_adc869e5-4955-4705-b661-77f9610b24aa_1080_1080.jpg"
                                        alt="Tongkat Lipat"><!-- NO SPACE -->
                                </a>
                                <p class="prod-i-addwrap">
                                    <a href="product.html" class="prod-i-add">Pergi Ke Detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Tongkat Lipat</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>Rp. 22.500</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img">
                                    <!-- NO SPACE --><img
                                        src="https://ecs7.tokopedia.net/img/cache/700/product-1/2020/7/31/1721278/1721278_adc869e5-4955-4705-b661-77f9610b24aa_1080_1080.jpg"
                                        alt="Tongkat Lipat"><!-- NO SPACE -->
                                </a>
                                <p class="prod-i-addwrap">
                                    <a href="product.html" class="prod-i-add">Pergi Ke Detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Tongkat Lipat</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>Rp. 22.500</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img">
                                    <!-- NO SPACE --><img
                                        src="https://ecs7.tokopedia.net/img/cache/700/product-1/2020/7/31/1721278/1721278_adc869e5-4955-4705-b661-77f9610b24aa_1080_1080.jpg"
                                        alt="Tongkat Lipat"><!-- NO SPACE -->
                                </a>
                                <p class="prod-i-addwrap">
                                    <a href="product.html" class="prod-i-add">Pergi Ke Detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Tongkat Lipat</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>Rp. 22.500</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img">
                                    <!-- NO SPACE --><img
                                        src="https://ecs7.tokopedia.net/img/cache/700/product-1/2020/7/31/1721278/1721278_adc869e5-4955-4705-b661-77f9610b24aa_1080_1080.jpg"
                                        alt="Tongkat Lipat"><!-- NO SPACE -->
                                </a>
                                <p class="prod-i-addwrap">
                                    <a href="product.html" class="prod-i-add">Pergi Ke Detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Tongkat Lipat</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>Rp. 22.500</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img">
                                    <!-- NO SPACE --><img
                                        src="https://ecs7.tokopedia.net/img/cache/700/product-1/2020/7/31/1721278/1721278_adc869e5-4955-4705-b661-77f9610b24aa_1080_1080.jpg"
                                        alt="Tongkat Lipat"><!-- NO SPACE -->
                                </a>
                                <p class="prod-i-addwrap">
                                    <a href="product.html" class="prod-i-add">Pergi Ke Detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Tongkat Lipat</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>Rp. 22.500</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img">
                                    <!-- NO SPACE --><img
                                        src="https://ecs7.tokopedia.net/img/cache/700/product-1/2020/7/31/1721278/1721278_adc869e5-4955-4705-b661-77f9610b24aa_1080_1080.jpg"
                                        alt="Tongkat Lipat"><!-- NO SPACE -->
                                </a>
                                <p class="prod-i-addwrap">
                                    <a href="product.html" class="prod-i-add">Pergi Ke Detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Tongkat Lipat</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>Rp. 22.500</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img">
                                    <!-- NO SPACE --><img
                                        src="https://ecs7.tokopedia.net/img/cache/700/product-1/2020/7/31/1721278/1721278_adc869e5-4955-4705-b661-77f9610b24aa_1080_1080.jpg"
                                        alt="Tongkat Lipat"><!-- NO SPACE -->
                                </a>
                                <p class="prod-i-addwrap">
                                    <a href="product.html" class="prod-i-add">Pergi Ke Detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Tongkat Lipat</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>Rp. 22.500</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img">
                                    <!-- NO SPACE --><img
                                        src="https://ecs7.tokopedia.net/img/cache/700/product-1/2020/7/31/1721278/1721278_adc869e5-4955-4705-b661-77f9610b24aa_1080_1080.jpg"
                                        alt="Tongkat Lipat"><!-- NO SPACE -->
                                </a>
                                <p class="prod-i-addwrap">
                                    <a href="product.html" class="prod-i-add">Pergi Ke Detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Tongkat Lipat</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>Rp. 22.500</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img">
                                    <!-- NO SPACE --><img
                                        src="https://ecs7.tokopedia.net/img/cache/700/product-1/2020/7/31/1721278/1721278_adc869e5-4955-4705-b661-77f9610b24aa_1080_1080.jpg"
                                        alt="Tongkat Lipat"><!-- NO SPACE -->
                                </a>
                                <p class="prod-i-addwrap">
                                    <a href="product.html" class="prod-i-add">Pergi Ke Detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Tongkat Lipat</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>Rp. 22.500</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img">
                                    <!-- NO SPACE --><img
                                        src="https://ecs7.tokopedia.net/img/cache/700/product-1/2020/7/31/1721278/1721278_adc869e5-4955-4705-b661-77f9610b24aa_1080_1080.jpg"
                                        alt="Tongkat Lipat"><!-- NO SPACE -->
                                </a>
                                <p class="prod-i-addwrap">
                                    <a href="product.html" class="prod-i-add">Pergi Ke Detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Tongkat Lipat</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>Rp. 22.500</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img">
                                    <!-- NO SPACE --><img
                                        src="https://ecs7.tokopedia.net/img/cache/700/product-1/2020/7/31/1721278/1721278_adc869e5-4955-4705-b661-77f9610b24aa_1080_1080.jpg"
                                        alt="Tongkat Lipat"><!-- NO SPACE -->
                                </a>
                                <p class="prod-i-addwrap">
                                    <a href="product.html" class="prod-i-add">Pergi Ke Detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Tongkat Lipat</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>Rp. 22.500</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img">
                                    <!-- NO SPACE --><img
                                        src="https://ecs7.tokopedia.net/img/cache/700/product-1/2020/7/31/1721278/1721278_adc869e5-4955-4705-b661-77f9610b24aa_1080_1080.jpg"
                                        alt="Tongkat Lipat"><!-- NO SPACE -->
                                </a>
                                <p class="prod-i-addwrap">
                                    <a href="product.html" class="prod-i-add">Pergi Ke Detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Tongkat Lipat</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>Rp. 22.500</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img">
                                    <!-- NO SPACE --><img
                                        src="https://ecs7.tokopedia.net/img/cache/700/product-1/2020/7/31/1721278/1721278_adc869e5-4955-4705-b661-77f9610b24aa_1080_1080.jpg"
                                        alt="Tongkat Lipat"><!-- NO SPACE -->
                                </a>
                                <p class="prod-i-addwrap">
                                    <a href="product.html" class="prod-i-add">Pergi Ke Detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Tongkat Lipat</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>Rp. 22.500</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img">
                                    <!-- NO SPACE --><img
                                        src="https://ecs7.tokopedia.net/img/cache/700/product-1/2020/7/31/1721278/1721278_adc869e5-4955-4705-b661-77f9610b24aa_1080_1080.jpg"
                                        alt="Tongkat Lipat"><!-- NO SPACE -->
                                </a>
                                <p class="prod-i-addwrap">
                                    <a href="product.html" class="prod-i-add">Pergi Ke Detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Tongkat Lipat</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>Rp. 22.500</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img">
                                    <!-- NO SPACE --><img
                                        src="https://ecs7.tokopedia.net/img/cache/700/product-1/2020/7/31/1721278/1721278_adc869e5-4955-4705-b661-77f9610b24aa_1080_1080.jpg"
                                        alt="Tongkat Lipat"><!-- NO SPACE -->
                                </a>
                                <p class="prod-i-addwrap">
                                    <a href="product.html" class="prod-i-add">Pergi Ke Detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Tongkat Lipat</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>Rp. 22.500</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img">
                                    <!-- NO SPACE --><img
                                        src="https://ecs7.tokopedia.net/img/cache/700/product-1/2020/7/31/1721278/1721278_adc869e5-4955-4705-b661-77f9610b24aa_1080_1080.jpg"
                                        alt="Tongkat Lipat"><!-- NO SPACE -->
                                </a>
                                <p class="prod-i-addwrap">
                                    <a href="product.html" class="prod-i-add">Pergi Ke Detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Tongkat Lipat</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>Rp. 22.500</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img">
                                    <!-- NO SPACE --><img
                                        src="https://ecs7.tokopedia.net/img/cache/700/product-1/2020/7/31/1721278/1721278_adc869e5-4955-4705-b661-77f9610b24aa_1080_1080.jpg"
                                        alt="Tongkat Lipat"><!-- NO SPACE -->
                                </a>
                                <p class="prod-i-addwrap">
                                    <a href="product.html" class="prod-i-add">Pergi Ke Detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Tongkat Lipat</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>Rp. 22.500</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img">
                                    <!-- NO SPACE --><img
                                        src="https://ecs7.tokopedia.net/img/cache/700/product-1/2020/7/31/1721278/1721278_adc869e5-4955-4705-b661-77f9610b24aa_1080_1080.jpg"
                                        alt="Tongkat Lipat"><!-- NO SPACE -->
                                </a>
                                <p class="prod-i-addwrap">
                                    <a href="product.html" class="prod-i-add">Pergi Ke Detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Tongkat Lipat</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>Rp. 22.500</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img">
                                    <!-- NO SPACE --><img
                                        src="https://ecs7.tokopedia.net/img/cache/700/product-1/2020/7/31/1721278/1721278_adc869e5-4955-4705-b661-77f9610b24aa_1080_1080.jpg"
                                        alt="Tongkat Lipat"><!-- NO SPACE -->
                                </a>
                                <p class="prod-i-addwrap">
                                    <a href="product.html" class="prod-i-add">Pergi Ke Detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Tongkat Lipat</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>Rp. 22.500</b>
                            </p>
                        </li>

                    </ul>

                </div>
                <p data-frpoptab-num="5" class="fr-pop-tab-mob" data-frpoptab="#frpoptab-tab-5">Kaki Palsu</p>
                <div class="flexslider prod-items fr-pop-tab" id="frpoptab-tab-5">
                    <ul class="slides">

                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img">
                                    <!-- NO SPACE --><img
                                        src="https://kakipalsuunik.com/wp-content/uploads/2016/05/13046095_10201659274761000_76882108_n3.jpg"
                                        alt="Kaki Palsu"><!-- NO SPACE -->
                                </a>
                                <p class="prod-i-addwrap">
                                    <a href="product.html" class="prod-i-add">Pergi Ke Detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Kaki Palsu</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>Rp. 135.000</b>
                            </p>
                        </li>

                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img">
                                    <!-- NO SPACE --><img
                                        src="https://kakipalsuunik.com/wp-content/uploads/2016/03/IMG_20150317_111519.jpg"
                                        alt="Kaki Palsu"><!-- NO SPACE -->
                                </a>
                                <p class="prod-i-addwrap">
                                    <a href="product.html" class="prod-i-add">Pergi Ke Detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Kaki Palsu Sepasang</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>Rp. 235.000</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img">
                                    <!-- NO SPACE --><img
                                        src="https://kakipalsuunik.com/wp-content/uploads/2016/05/13043653_1611545825833164_4074893176074604147_n.jpg"
                                        alt="Dignissimos fuga voluptates totam"><!-- NO SPACE -->
                                </a>
                                <p class="prod-i-addwrap">
                                    <a href="product.html" class="prod-i-add">Pergi Ke Detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Kaki Palsu Baru</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>Rp. 140.000</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img">
                                    <!-- NO SPACE --><img
                                        src="https://static.republika.co.id/uploads/images/inpicture_slide/zac-vawter-relawan-uji-coba-kaki-palsu-tengah-_121031151343-923.jpg"
                                        alt="Perferendis recusandae"><!-- NO SPACE -->
                                </a>
                                <p class="prod-i-addwrap">
                                    <a href="product.html" class="prod-i-add">Pergi Ke Detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Kaki Palsu Modern</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>Rp. 300.000</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img">
                                    <!-- NO SPACE --><img
                                        src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full/99/MTA-1573794/ottobock_kaki-palsu_full04.jpg"
                                        alt="Officiis nihil culpa"><!-- NO SPACE -->
                                </a>
                                <p class="prod-i-addwrap">
                                    <a href="product.html" class="prod-i-add">Pergi Ke Detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Kaki Palsu</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>Rp. 90.000</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img">
                                    <!-- NO SPACE --><img
                                        src="https://kakipalsuunik.com/wp-content/uploads/2016/05/13043653_1611545825833164_4074893176074604147_n.jpg"
                                        alt="Dignissimos fuga voluptates totam"><!-- NO SPACE -->
                                </a>
                                <p class="prod-i-addwrap">
                                    <a href="product.html" class="prod-i-add">Pergi Ke Detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Kaki Palsu Bekas</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>Rp. 75.000</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img">
                                    <!-- NO SPACE --><img
                                        src="https://static.republika.co.id/uploads/images/inpicture_slide/zac-vawter-relawan-uji-coba-kaki-palsu-tengah-_121031151343-923.jpg"
                                        alt="Perferendis recusandae"><!-- NO SPACE -->
                                </a>
                                <p class="prod-i-addwrap">
                                    <a href="product.html" class="prod-i-add">Pergi Ke Detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Kaki Palsu</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>Rp. 200.000</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img">
                                    <!-- NO SPACE --><img
                                        src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full/99/MTA-1573794/ottobock_kaki-palsu_full04.jpg"
                                        alt="Officiis nihil culpa"><!-- NO SPACE -->
                                </a>
                                <p class="prod-i-addwrap">
                                    <a href="product.html" class="prod-i-add">Pergi Ke Detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Kaki Palsu</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>Rp. 125.000</b>
                            </p>
                        </li>
                    </ul>
                </div>


            </div><!-- .fr-pop-tab-cont -->


        </div><!-- .fr-pop-wrap -->

        <!-- Special offer -->
        <div class="discounts-wrap" id="tentang-bab">
            <h3 class="component-ttl"><span>Tentang</span></h3>
            <div id="about" class="layout_padding about_section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div><img src="img/semarang.jpg" style="max-width: 100%;"></div>
                        </div>
                        <div class="col-md-6">
                            <p class="about_taital"><strong>S-Care</strong> merupakan website e-commerce khusus jual beli
                                alat bantu disabilitas bekas yang tidak terpakai untuk membantu mereka yang membutuhkan dan
                                ditujukan khusus untuk warga <strong>Kota Semarang</strong>, Jawa Tengah</p>
                            <br>
                            <br>

                            <div style="float: right;">
                                <a href="https://semarangkota.go.id/"><img src="img/buton selengkapnya-07.png"
                                        style="max-width: 25%;"></a>
                            </div>
                            <div style="float:right;">
                                Selengkapnya
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <br><br>
        </div>

        <!-- FAQ -->
        <div class="discounts-wrap" id="faq-bab">
            <h3 class="component-ttl"><span>Frequently Asked Questions</span></h3>
            <div id="faq" class="layout_padding about_section">
                <div class="faqs-container">
                @foreach ($faqs as $faq)
                    <div class="faq active">
                        <h3 class="faq-title">
                            <h3>{{ $faq->question }}</h3>
                        </h3>
                        <p class="faq-text">
                           {{ $faq->answer }}
                        </p>
                        <button class="faq-toggle">
                            <i class="fa fa-chevron-down"></i>
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
			    @endforeach
                </div>
            </div>
        </div>

{{-- kontak kami --}}
        <div class="discounts-wrap" id="kontakkami-bab">
            <h3 class="component-ttl"><span>Kontak Kami</span></h3>
            <!-- Main Content - start -->
            <main>
                <section class="container stylization maincont">
                    <!-- Contact Form -->
                    <div class="contactform-wrap">
                        <form action="#" class="form-validate">
                            <p class="component-desc component-desc-ct">Jangan ragu untuk mengirimkan pertanyaan Anda</p>
                            <p class="contactform-field contactform-text">
                                <label class="contactform-label">Nama</label><!-- NO SPACE --><span
                                    class="contactform-input"><input placeholder="Nama" type="text" name="name"
                                        data-required="text"></span>
                            </p>
                            <p class="contactform-field contactform-email">
                                <label class="contactform-label">E-mail</label><!-- NO SPACE --><span
                                    class="contactform-input"><input placeholder="E-mail Anda" type="text"
                                        name="email" data-required="text" data-required-email="email"></span>
                            </p>
                            <p class="contactform-field contactform-textarea">
                                <label class="contactform-label">Message</label><!-- NO SPACE --><span
                                    class="contactform-input">
                                    <textarea placeholder="Pesan Anda" name="mess" data-required="text"></textarea>
                                </span>
                            </p>
                            <p class="contactform-submit">
                                <input value="Kirim" type="submit">
                            </p>
                        </form>
                    </div>
                    <!-- Contacts - end -->

                </section>
            </main>
            <!-- Main Content - end -->
        </div>
    </section>

    <!-- Main Content - end -->
@endsection
