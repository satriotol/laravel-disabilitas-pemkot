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
                Kategori
            </a>
        </li>
        <li>
            <span>Kursi Roda</span>
        </li>
    </ul>

    <!-- Catalog Sidebar - start -->
    <div class="section-sb">

        <!-- Catalog Categories - start -->
        <div class="section-sb-current">
            <h3><a href="{{route('product-list')}}">Kursi Roda<span id="section-sb-toggle" class="section-sb-toggle"><span class="section-sb-ico"></span></span></a></h3>
            <ul class="section-sb-list" id="section-sb-list">
                <li class="categ-1">
                    <a href="{{route('product-list')}}">
                        <span class="categ-1-label">Tongkat Bantu</span>
                    </a>
                </li>
                <li class="categ-1">
                    <a href="{{route('product-list')}}">
                        <span class="categ-1-label">Kaki Palsu</span>
                    </a>
                </li>
                <li class="categ-1">
                    <a href="{{route('product-list')}}">
                        <span class="categ-1-label">Tangan Palsu</span>
                    </a>
                </li>
                <li class="categ-1 has_child">
                    <a href="{{route('product-list')}}">
                        <span class="categ-1-label">Alat Bantu</span>
                        <span class="section-sb-toggle"><span class="section-sb-ico"></span></span>
                    </a>
                    <ul>
                        <li class="categ-2">
                            <a href="{{route('product-list')}}">
                                <span class="categ-2-label">Toilet Lift & Bath Lift</span>
                            </a>
                        </li>
                        <li class="categ-2">
                            <a href="{{route('product-list')}}">
                                <span class="categ-2-label">Alat Bantu Dengar</span>
                            </a>
                        </li>
                        <li class="categ-2">
                            <a href="{{route('product-list')}}">
                                <span class="categ-2-label">Komputer Bicara</span>
                            </a>
                        </li>
                        <li class="categ-2">
                            <a href="{{route('product-list')}}">
                                <span class="categ-2-label">Kacamata untuk Low Vision</span>
                            </a>
                        </li>
                        <li class="categ-2">
                            <a href="{{route('product-list')}}">
                                <span class="categ-2-label">Protesa dan Orthesa</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Catalog Categories - end -->

    </div>
    <!-- Catalog Sidebar - end -->
    <!-- Catalog Items | List V1 - start -->
    <div class="section-cont">

        <!-- Catalog Topbar - start -->
        <div class="section-top">

            <!-- View Mode -->
            <ul class="section-mode">
                <li class="section-mode-gallery"><a title="View mode: Gallery" href="{{route('product-gallery')}}"></a></li>
                <li class="section-mode-list active"><a title="View mode: List" href="{{route('product-list')}}"></a></li>
            </ul>

            <!-- Sorting -->
            <div class="section-sortby">
                <p>default sorting</p>
                <ul>
                    <li>
                        <a href="#">sort by popularity</a>
                    </li>
                    <li>
                        <a href="#">low price to high</a>
                    </li>
                    <li>
                        <a href="#">high price to low</a>
                    </li>
                    <li>
                        <a href="#">by title A <i class="fa fa-angle-right"></i> Z</a>
                    </li>
                    <li>
                        <a href="#">by title Z <i class="fa fa-angle-right"></i> A</a>
                    </li>
                    <li>
                        <a href="#">default sorting</a>
                    </li>
                </ul>
            </div>

            <!-- Count per page -->
            <div class="section-count">
                <p>12</p>
                <ul>
                    <li><a href="#">12</a></li>
                    <li><a href="#">24</a></li>
                    <li><a href="#">48</a></li>
                </ul>
            </div>

        </div>
        <!-- Catalog Topbar - end -->
        <div class="prod-items section-items">
            <div class="prodlist-i">
                <a class="prodlist-i-img" href="product.html"><!-- NO SPACE --><img src="https://s3.bukalapak.com/img/3897836966/large/kURSI_RODA_BEKAS_MEREK_TRANSMED.jpg" alt="Kursi Roda Bekas"><!-- NO SPACE --></a>
                <div class="prodlist-i-cont">
                    <h3><a href="product.html">Kursi Roda Bekas Transmed</a></h3>
                    <div class="prodlist-i-top">
                        Kursi roda ini merupakan kursi roda standard dengan jari-jari roda utama racing. Kelebihan velg racing ini adalah roda menjadi lebih stabil (tidak perlu kalibrasi jari2) dan tampilan lebih modis.				</div>
                    <div class="prodlist-i-skuwrap">
                        <div class="prodlist-i-skuitem">
                        </div>
                    </div>
                    <div class="prodlist-i-action">
                        <p class="prodlist-i-qnt">
                            <input value="1" type="text">
                            <a href="#" class="prodlist-i-plus"><i class="fa fa-angle-up"></i></a>
                            <a href="#" class="prodlist-i-minus"><i class="fa fa-angle-down"></i></a>
                        </p>
                        <p class="prodlist-i-addwrap">
                            <a href="#" class="prodlist-i-add">Pergi Ke Detail</a>
                        </p>
                    <span class="prodlist-i-price">
                        <b style="font-size: 15px;" !important>Rp. 78.000</b>
                                                </span>
                    </div>
                </div>

                <div class="prodlist-i-props-wrap">
                    <ul class="prodlist-i-props">
                        <li><b>Dimensi Kardus</b> 88 x 24 x 93 cm</li>
                        <li><b>Berat Bersih</b> 18,15 kg</li>
                        <li><b>Bahan Frame</b> High carbon steel</li>
                        <li><b>Berat maksimum</b> 100 kg</li>
                        <li><b>Sistem pispot</b> Sliding</li>
                        <li><b>Jenis Ban</b> Ban mati</li>
                        <li><b>Berat Kursi Roda</b> 20 kg</li>
                        <li><b>Bahan dudukan</b> Waterproof oxford/PU leather</li>
                        <li><b>Lebar Jok</b> 46 cm</li>
                    </ul>
                </div>
            </div>
            <div class="prodlist-i">
                <a class="prodlist-i-img" href="product.html"><!-- NO SPACE --><img src="https://s1.bukalapak.com/img/621675472/w-1000/Kursi_Roda_Standard_Velg_Racing_Sella_KY_809B.jpg" alt="Kursi Roda"><!-- NO SPACE --></a>
                <div class="prodlist-i-cont">
                    <h3><a href="product.html">Kursi Roda Bahan Stainless</a></h3>
                    <div class="prodlist-i-txt">
                        Kursi roda ini merupakan kursi roda standard dengan jari-jari roda utama racing. Kelebihan velg racing ini adalah roda menjadi lebih stabil (tidak perlu kalibrasi jari2) dan tampilan lebih modis.	</div>
                    <div class="prodlist-i-action">
                        <p class="prodlist-i-qnt">
                            <input value="1" type="text">
                            <a href="#" class="prodlist-i-plus"><i class="fa fa-angle-up"></i></a>
                            <a href="#" class="prodlist-i-minus"><i class="fa fa-angle-down"></i></a>
                        </p>
                        <p class="prodlist-i-addwrap">
                            <a href="#" class="prodlist-i-add">Pergi Ke Detail</a>
                        </p>
                    <span class="prodlist-i-price">
                        <b style="font-size: 15px;" !important>Rp. 125.000</b>
                                                </span>
                    </div>
                </div>

                <div class="prodlist-i-props-wrap">
                    <ul class="prodlist-i-props">
                        <li><b>Dimensi Kardus</b> 88 x 24 x 93 cm</li>
                        <li><b>Berat Bersih</b> 18,15 kg</li>
                        <li><b>Bahan Frame</b> High carbon steel</li>
                        <li><b>Berat maksimum</b> 100 kg</li>
                        <li><b>Sistem pispot</b> Sliding</li>
                        <li><b>Jenis Ban</b> Ban mati</li>
                        <li><b>Berat Kursi Roda</b> 20 kg</li>
                        <li><b>Bahan dudukan</b> Waterproof oxford/PU leather</li>
                        <li><b>Lebar Jok</b> 46 cm</li>
                    </ul>
                </div>
            </div>
            <div class="prodlist-i">
                <a class="prodlist-i-img" href="product.html"><!-- NO SPACE --><img src="https://ecs7.tokopedia.net/img/cache/700/product-1/2020/7/31/1721278/1721278_adc869e5-4955-4705-b661-77f9610b24aa_1080_1080.jpg" alt="Tongkat Lipat"><!-- NO SPACE --></a>
                <div class="prodlist-i-cont">
                    <h3><a href="product.html">Tongkat Lipat</a></h3>
                    <div class="prodlist-i-txt">
                        Dapat digunakan sebagai tongkat jalan duduk untuk para orang tua cedera kaki yang capek berjalan pada saat berpergian. Sangat mudah digunakan, dapat dilipat, dibawa kemana mana dan ringan.			</div>
                    <div class="prodlist-i-action">
                        <p class="prodlist-i-qnt">
                            <input value="1" type="text">
                            <a href="#" class="prodlist-i-plus"><i class="fa fa-angle-up"></i></a>
                            <a href="#" class="prodlist-i-minus"><i class="fa fa-angle-down"></i></a>
                        </p>
                        <p class="prodlist-i-addwrap">
                            <a href="#" class="prodlist-i-add">Pergi Ke Detail</a>
                        </p>
                    <span class="prodlist-i-price">
                        <b style="font-size: 15px;" !important>Rp. 22.500</b>
                                                </span>
                    </div>
                </div>

                <div class="prodlist-i-props-wrap">
                    <ul class="prodlist-i-props">
                        <li><b>Merk</b> One Med</li>
                        <li><b>Dimensi Tinggi</b> 90 cm</li>
                        <li><b>Alas</b> 3.5</li>
                        <li><b>Bahan</b> Besi</li>
                    </ul>
                </div>
            </div>
            <div class="prodlist-i">
                <a class="prodlist-i-img" href="product.html"><!-- NO SPACE --><img src="https://ecs7.tokopedia.net/img/cache/700/product-1/2018/11/8/31257966/31257966_6e392b20-2083-4df5-96e4-c5dd6393f9b6_700_700.png" alt="Tongkat Bantu"><!-- NO SPACE --></a>
                <div class="prodlist-i-cont">
                    <h3><a href="product.html">Tongkat Bantu Best Seller </a></h3>
                    <div class="prodlist-i-txt">
                        Dapat digunakan sebagai tongkat jalan duduk untuk para orang tua cedera kaki yang capek berjalan pada saat berpergian. Sangat mudah digunakan, dapat dilipat, dibawa kemana mana dan ringan.		</div>
                    <div class="prodlist-i-action">
                        <p class="prodlist-i-qnt">
                            <input value="1" type="text">
                            <a href="#" class="prodlist-i-plus"><i class="fa fa-angle-up"></i></a>
                            <a href="#" class="prodlist-i-minus"><i class="fa fa-angle-down"></i></a>
                        </p>
                        <p class="prodlist-i-addwrap">
                            <a href="#" class="prodlist-i-add">Pergi Ke Detail</a>
                        </p>
                    <span class="prodlist-i-price">
                        <b style="font-size: 15px;" !important>Rp. 35.000</b>
                                                </span>
                    </div>
                </div>

                <div class="prodlist-i-props-wrap">
                    <ul class="prodlist-i-props">
                        <li><b>Merk</b> One Med</li>
                        <li><b>Dimensi Tinggi</b> 90 cm</li>
                        <li><b>Alas</b> 3.5</li>
                        <li><b>Bahan</b> Besi</li>
                    </ul>
                </div>
            </div>
            <div class="prodlist-i">
                <a class="prodlist-i-img" href="product.html"><!-- NO SPACE --><img src="https://s4.bukalapak.com/img/932759423/w-1000/TONGKAT_KURSI_ALAT_BANTU_JALAN_BANGKU_DUDUK_ORANG_TUA_bahan_.jpg" alt="Bangku Duduk"><!-- NO SPACE --></a>
                <div class="prodlist-i-cont">
                    <h3><a href="product.html">Bangku Duduk</a></h3>
                    <div class="prodlist-i-txt">
                        Tongkat Kursi membuat pengguna bisa duduk di tongkat kursinya bila ia capek berjalan, jadi sangat cocok bisa dipakai untuk mereka yang sehat namun mau bepergian ,atau berlibur			</div>
                    <div class="prodlist-i-skuwrap">
                        <div class="prodlist-i-skuitem">
                        </div>
                    </div>
                    <div class="prodlist-i-action">
                        <p class="prodlist-i-qnt">
                            <input value="1" type="text">
                            <a href="#" class="prodlist-i-plus"><i class="fa fa-angle-up"></i></a>
                            <a href="#" class="prodlist-i-minus"><i class="fa fa-angle-down"></i></a>
                        </p>
                        <p class="prodlist-i-addwrap">
                            <a href="#" class="prodlist-i-add">Pergi Ke Detail</a>
                        </p>
                    <span class="prodlist-i-price">
                        <b style="font-size: 15px;">Rp. 75.000</b>
                                                </span>
                    </div>
                </div>

                <div class="prodlist-i-props-wrap">
                    <ul class="prodlist-i-props">
                        <li><b>Bahan</b> alumunium Kuat Ringan dan anti karat</li>
                        <li><b>Tinggi</b> 84 cm</li>
                        <li><b>Dimension</b> 85 x 30 x 46 cm</li>
                        <li><b>Kapasitas beban</b>  +/- 80 kg</li>
                    </ul>
                </div>
            </div>
            <div class="prodlist-i">
                <a class="prodlist-i-img" href="product.html"><!-- NO SPACE --><img src="https://ecs7.tokopedia.net/img/cache/700/product-1/2020/7/31/1721278/1721278_adc869e5-4955-4705-b661-77f9610b24aa_1080_1080.jpg" alt="Tongkat Lipat"><!-- NO SPACE --></a>
                <div class="prodlist-i-cont">
                    <h3><a href="product.html">Tongkat Lipat</a></h3>
                    <div class="prodlist-i-txt">
                        Dapat digunakan sebagai tongkat jalan duduk untuk para orang tua cedera kaki yang capek berjalan pada saat berpergian. Sangat mudah digunakan, dapat dilipat, dibawa kemana mana dan ringan.		</div>
                    <div class="prodlist-i-skuwrap">
                    </div>
                    <div class="prodlist-i-action">
                        <p class="prodlist-i-qnt">
                            <input value="1" type="text">
                            <a href="#" class="prodlist-i-plus"><i class="fa fa-angle-up"></i></a>
                            <a href="#" class="prodlist-i-minus"><i class="fa fa-angle-down"></i></a>
                        </p>
                        <p class="prodlist-i-addwrap">
                            <a href="#" class="prodlist-i-add">Pergi Ke Detail</a>
                        </p>
                    <span class="prodlist-i-price">
                        <b style="font-size: 15px;">Rp. 22.500</b>
                                                </span>
                    </div>
                </div>

                <div class="prodlist-i-props-wrap">
                    <ul class="prodlist-i-props">
                        <li><b>Bahan</b> Alumunium</li>
                        <li><b>Bahan Dudukan</b> Plastik PP</li>
                        <li><b>Pegangan</b> Dilapisi busa eva</li>
                        <li><b>Diameter dudukan</b> 21cm</li>
                        <li><b>Tinggi tongkat</b> 83cm</li>
                        <li><b>Tinggi kursi</b> 50cm</li>
                        <li><b>Berat</b> 1kg</li>
                        <li><b>Max nahan beban </b> 70 75kg</li>
                        <li><b>Dimensi paket</b> 88x28x4 cm</li>
                    </ul>
                </div>
            </div>
            <div class="prodlist-i">
                <a class="prodlist-i-img" href="product.html"><!-- NO SPACE --><img src="https://s4.bukalapak.com/img/4319980912/large/Kursi_Roda_Elektrik_Lipat_Ekonomis_dan_TRENDY.jpg" alt="Kursi Roda Elektrik"><!-- NO SPACE --></a>
                <div class="prodlist-i-cont">
                    <h3><a href="product.html">Kursi Roda Spesial</a></h3>
                    <div class="prodlist-i-top">
                        Kursi roda ini merupakan kursi roda standard dengan jari-jari roda utama racing. Kelebihan velg racing ini adalah roda menjadi lebih stabil (tidak perlu kalibrasi jari2) dan tampilan lebih modis.				</div>
                    <div class="prodlist-i-skuwrap">
                        <div class="prodlist-i-skuitem">
                        </div>
                        <div class="prodlist-i-skuitem">
                        </div>
                    </div>
                    <div class="prodlist-i-action">
                        <p class="prodlist-i-qnt">
                            <input value="1" type="text">
                            <a href="#" class="prodlist-i-plus"><i class="fa fa-angle-up"></i></a>
                            <a href="#" class="prodlist-i-minus"><i class="fa fa-angle-down"></i></a>
                        </p>
                        <p class="prodlist-i-addwrap">
                            <a href="#" class="prodlist-i-add">Pergi Ke Detail</a>
                        </p>
                    <span class="prodlist-i-price">
                        <b style="font-size: 13px;">Rp. 1.225.000</b>
                                                </span>
                    </div>
                </div>

                <div class="prodlist-i-props-wrap">
                    <ul class="prodlist-i-props">
                        <li><b>Dimensi Kardus</b> 88 x 24 x 93 cm</li>
                        <li><b>Berat Bersih</b> 18,15 kg</li>
                        <li><b>Bahan Frame</b> High carbon steel</li>
                        <li><b>Berat maksimum</b> 100 kg</li>
                        <li><b>Sistem pispot</b> Sliding</li>
                        <li><b>Jenis Ban</b> Ban mati</li>
                        <li><b>Berat Kursi Roda</b> 20 kg</li>
                        <li><b>Bahan dudukan</b> Waterproof oxford/PU leather</li>
                        <li><b>Lebar Jok</b> 46 cm</li>
                    </ul>
                </div>
            </div>
            <div class="prodlist-i">
                <a class="prodlist-i-img" href="product.html"><!-- NO SPACE --><img src="https://s3.bukalapak.com/img/3897836966/large/kURSI_RODA_BEKAS_MEREK_TRANSMED.jpg" alt="Kursi Roda Bekas"><!-- NO SPACE --></a>
                <div class="prodlist-i-cont">
                    <h3><a href="product.html">Kursi Roda Bekas Merk Transmed</a></h3>
                    <div class="prodlist-i-txt">
                        <div class="prodlist-i-top">
                            Kursi roda ini merupakan kursi roda standard dengan jari-jari roda utama racing. Kelebihan velg racing ini adalah roda menjadi lebih stabil (tidak perlu kalibrasi jari2) dan tampilan lebih modis.				</div>	</div>
                    <div class="prodlist-i-action">
                        <p class="prodlist-i-qnt">
                            <input value="1" type="text">
                            <a href="#" class="prodlist-i-plus"><i class="fa fa-angle-up"></i></a>
                            <a href="#" class="prodlist-i-minus"><i class="fa fa-angle-down"></i></a>
                        </p>
                        <p class="prodlist-i-addwrap">
                            <a href="#" class="prodlist-i-add">Pergi Ke Detail</a>
                        </p>
                    <span class="prodlist-i-price">
                        <b style="font-size: 15px;">Rp. 50.000</b>
                                                </span>
                    </div>
                </div>

                <div class="prodlist-i-props-wrap">
                    <ul class="prodlist-i-props">
                        <li><b>Dimensi Kardus</b> 88 x 24 x 93 cm</li>
                        <li><b>Berat Bersih</b> 18,15 kg</li>
                        <li><b>Bahan Frame</b> High carbon steel</li>
                        <li><b>Berat maksimum</b> 100 kg</li>
                        <li><b>Sistem pispot</b> Sliding</li>
                        <li><b>Jenis Ban</b> Ban mati</li>
                        <li><b>Berat Kursi Roda</b> 20 kg</li>
                        <li><b>Bahan dudukan</b> Waterproof oxford/PU leather</li>
                        <li><b>Lebar Jok</b> 46 cm</li>
                    </ul>
                </div>
            </div>
            <div class="prodlist-i">
                <a class="prodlist-i-img" href="product.html"><!-- NO SPACE --><img src="https://s1.bukalapak.com/img/1933370611/w-1000/Tongkat_kaki_3_Alat_Bantu_Jalan_Fisioterapi___Sella.jpg" alt="Tongkat Bantu"><!-- NO SPACE --></a>
                <div class="prodlist-i-cont">
                    <h3><a href="product.html">Tongkat Bantu Stainless</a></h3>
                    <div class="prodlist-i-txt">
                        Dapat digunakan sebagai tongkat jalan duduk untuk para orang tua cedera kaki yang capek berjalan pada saat berpergian. Sangat mudah digunakan, dapat dilipat, dibawa kemana mana dan ringan.	</div>
                    <div class="prodlist-i-action">
                        <p class="prodlist-i-qnt">
                            <input value="1" type="text">
                            <a href="#" class="prodlist-i-plus"><i class="fa fa-angle-up"></i></a>
                            <a href="#" class="prodlist-i-minus"><i class="fa fa-angle-down"></i></a>
                        </p>
                        <p class="prodlist-i-addwrap">
                            <a href="#" class="prodlist-i-add">Pergi Ke Detail</a>
                        </p>
                    <span class="prodlist-i-price">
                        <b style="font-size: 14px;">Rp. 65.000</b>
                                                </span>
                    </div>
                </div>

                <div class="prodlist-i-props-wrap">
                    <ul class="prodlist-i-props">
                        <li><b>Merk</b> One Med</li>
                        <li><b>Dimensi Tinggi</b> 90 cm</li>
                        <li><b>Alas</b> 3.5</li>
                        <li><b>Bahan</b> Besi</li>
                    </ul>
                </div>
            </div>
            <div class="prodlist-i">
                <a class="prodlist-i-img" href="product.html"><!-- NO SPACE --><img src="https://s1.bukalapak.com/img/1500314121/w-1000/img20170505_091519_alat_bantu_dengar_nbs_2.jpg" alt="Alat Bantu Dengar"><!-- NO SPACE --></a>
                <div class="prodlist-i-cont">
                    <h3><a href="product.html">Alat Bantu Dengar</a></h3>
                    <div class="prodlist-i-txt">
                        Orang yang menderita kemampuan pendengaran terbatas sangat cocok memakai alat ini. Dapat secara individual disesuaikan dengan saluran telinga. Dapat memperkuat volume semua suara didalam dan di luar ruangan.	</div>
                    <div class="prodlist-i-skuwrap">
                        <div class="prodlist-i-skuitem">
                        </div>
                    </div>
                    <div class="prodlist-i-action">
                        <p class="prodlist-i-qnt">
                            <input value="1" type="text">
                            <a href="#" class="prodlist-i-plus"><i class="fa fa-angle-up"></i></a>
                            <a href="#" class="prodlist-i-minus"><i class="fa fa-angle-down"></i></a>
                        </p>
                        <p class="prodlist-i-addwrap">
                            <a href="#" class="prodlist-i-add">Pergi Ke Detail</a>
                        </p>
                    <span class="prodlist-i-price">
                        <b style="font-size: 15px;">Rp. 47.500</b>
                                                </span>
                    </div>
                </div>

                <div class="prodlist-i-props-wrap">
                    <ul class="prodlist-i-props">
                        <li><b>Brand</b> Beurer</li>
                        <li><b>Tipe</b> HA 20</li>
                        <li><b>Jenis</b> Penutup Kuping</li>
                        <li><b>Baterai</b> 2 x 1.4 V PR48 baterai</li>
                        <li><b>Rentang Frekuensi</b> 200 - 5000 Hz</li>
                        <li><b>Maksimal Volume</b> 128 dB</li>
                        <li><b>Amplifikasi</b> 40 dB</li>
                        <li><b>Dimensi Produk</b> 40 x 40 x 10 mm</li>
                    </ul>
                </div>
            </div>
            <div class="prodlist-i">
                <a class="prodlist-i-img" href="product.html"><!-- NO SPACE --><img src="https://ecs7.tokopedia.net/img/cache/700/product-1/2020/7/31/1721278/1721278_adc869e5-4955-4705-b661-77f9610b24aa_1080_1080.jpg" alt="Tongkat Lipat"><!-- NO SPACE --></a>
                <div class="prodlist-i-cont">
                    <h3><a href="product.html">Tongkat Lipat</a></h3>
                    <div class="prodlist-i-txt">
                        Dapat digunakan sebagai tongkat jalan duduk untuk para orang tua cedera kaki yang capek berjalan pada saat berpergian. Sangat mudah digunakan, dapat dilipat, dibawa kemana mana dan ringan.	</div>
                    <div class="prodlist-i-skuwrap">
                        <div class="prodlist-i-skuitem">
                        </div>
                    </div>
                    <div class="prodlist-i-action">
                        <p class="prodlist-i-qnt">
                            <input value="1" type="text">
                            <a href="#" class="prodlist-i-plus"><i class="fa fa-angle-up"></i></a>
                            <a href="#" class="prodlist-i-minus"><i class="fa fa-angle-down"></i></a>
                        </p>
                        <p class="prodlist-i-addwrap">
                            <a href="#" class="prodlist-i-add">Pergi Ke Detail</a>
                        </p>
                    <span class="prodlist-i-price">
                        <b style="font-size: 15px;">Rp. 22.500</b>
                                                </span>
                    </div>
                </div>

                <div class="prodlist-i-props-wrap">
                    <ul class="prodlist-i-props">
                        <li><b>Merk</b> One Med</li>
                        <li><b>Dimensi Tinggi</b> 90 cm</li>
                        <li><b>Alas</b> 3.5</li>
                        <li><b>Bahan</b> Besi</li>
                    </ul>
                </div>

                <div class="prod-sticker">
                    <p class="prod-sticker-1">NEW</p>
                </div>
            </div>
            <div class="prodlist-i">
                <a class="prodlist-i-img" href="product.html"><!-- NO SPACE --><img src="https://ecs7.tokopedia.net/img/cache/700/product-1/2020/7/31/1721278/1721278_adc869e5-4955-4705-b661-77f9610b24aa_1080_1080.jpg" alt="Tongkat Lipat"><!-- NO SPACE --></a>
                <div class="prodlist-i-cont">
                    <h3><a href="product.html">Tongkat Lipat</a></h3>
                    <div class="prodlist-i-txt">
                        Dapat digunakan sebagai tongkat jalan duduk untuk para orang tua cedera kaki yang capek berjalan pada saat berpergian. Sangat mudah digunakan, dapat dilipat, dibawa kemana mana dan ringan.		</div>
                    <div class="prodlist-i-action">
                        <p class="prodlist-i-qnt">
                            <input value="1" type="text">
                            <a href="#" class="prodlist-i-plus"><i class="fa fa-angle-up"></i></a>
                            <a href="#" class="prodlist-i-minus"><i class="fa fa-angle-down"></i></a>
                        </p>
                        <p class="prodlist-i-addwrap">
                            <a href="#" class="prodlist-i-add">Pergi Ke Detail</a>
                        </p>
                    <span class="prodlist-i-price">
                        <b style="font-size: 15px;">Rp. 22.500</b>
                                                </span>
                    </div>
                </div>

                <div class="prodlist-i-props-wrap">
                    <ul class="prodlist-i-props">
                        <li><b>Merk</b> One Med</li>
                        <li><b>Dimensi Tinggi</b> 90 cm</li>
                        <li><b>Alas</b> 3.5</li>
                        <li><b>Bahan</b> Besi</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Pagination - start -->
        <ul class="pagi">
            <li class="active"><span>1</span></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li class="pagi-next"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
        </ul>
        <!-- Pagination - end -->
    </div>

    <!-- Quick View Product - start -->
    <div class="qview-modal">
        <div class="prod-wrap">
            <a href="product.html">
                <h1 class="main-ttl">
                    <span>Reprehenderit adipisci</span>
                </h1>
            </a>
            <div class="prod-slider-wrap">
                <div class="prod-slider">
                    <ul class="prod-slider-car">
                        <li>
                            <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x525">
                                <img src="http://placehold.it/500x525" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x591">
                                <img src="http://placehold.it/500x591" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x525">
                                <img src="http://placehold.it/500x525" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">
                                <img src="http://placehold.it/500x722" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">
                                <img src="http://placehold.it/500x722" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">
                                <img src="http://placehold.it/500x722" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">
                                <img src="http://placehold.it/500x722" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="prod-thumbs">
                    <ul class="prod-thumbs-car">
                        <li>
                            <a data-slide-index="0" href="#">
                                <img src="http://placehold.it/500x525" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-slide-index="1" href="#">
                                <img src="http://placehold.it/500x591" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-slide-index="2" href="#">
                                <img src="http://placehold.it/500x525" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-slide-index="3" href="#">
                                <img src="http://placehold.it/500x722" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-slide-index="4" href="#">
                                <img src="http://placehold.it/500x722" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-slide-index="5" href="#">
                                <img src="http://placehold.it/500x722" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-slide-index="6" href="#">
                                <img src="http://placehold.it/500x722" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="prod-cont">
                <div class="prod-skuwrap">
                    <p class="prod-skuttl">Color</p>
                    <ul class="prod-skucolor">
                        <li class="active">
                            <img src="img/color/blue.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/color/red.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/color/green.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/color/yellow.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/color/purple.jpg" alt="">
                        </li>
                    </ul>
                </div>
                <div class="prod-info">
                    <p class="prod-price">
                        <b class="item_current_price">$238</b>
                    </p>
                    <p class="prod-qnt">
                        <input type="text" value="1">
                        <a href="#" class="prod-plus"><i class="fa fa-angle-up"></i></a>
                        <a href="#" class="prod-minus"><i class="fa fa-angle-down"></i></a>
                    </p>
                    <p class="prod-addwrap">
                        <a href="#" class="prod-add">Pergi Ke Detail</a>
                    </p>
                </div>
                <ul class="prod-i-props">
                    <li>
                        <b>SKU</b> 05464207
                    </li>
                    <li>
                        <b>Manufacturer</b> Mayoral
                    </li>
                    <li>
                        <b>Material</b> Cotton
                    </li>
                    <li>
                        <b>Pattern Type</b> Print
                    </li>
                    <li>
                        <b>Wash</b> Colored
                    </li>
                    <li>
                        <b>Style</b> Cute
                    </li>
                    <li>
                        <b>Color</b> Blue, Red
                    </li>
                    <li><a href="#" class="prod-showprops">All Features</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Quick View Product - end -->
</section>
@endsection
