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
                            <img src="{{ asset('gambar/' . $slider->image) }}" alt=""
                                style="width: 100%;height: 300px;object-fit:cover">
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
                    @foreach ($categories as $cate)
                    <li><a data-frpoptab-num="2" data-frpoptab="#frpoptab-tab-2" href="#">{{ $cate->name }}</a></li>
                    @endforeach
            </ul>

            <div class="fr-pop-tab-cont">

                <p data-frpoptab-num="1" class="fr-pop-tab-mob active" data-frpoptab="#frpoptab-tab-1">Semua Kategori</p>
                <div class="flexslider prod-items fr-pop-tab" id="frpoptab-tab-1">

                    <ul class="slides">
                        @foreach ($products as $produk)
                        @if ($produk->product_images->count() > 0)
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="#" class="prod-i-img"><img src="{{asset('gambar/' . $produk->product_images[0]->image)}}" alt=""></a>
                                <p class="prod-i-addwrap">
                                    <a href="{{route('product-detail', $produk->id)}}" class="prod-i-add">Pergi Ke Detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="#">{{$produk->name}}</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>{{$produk->price}}</b>
                            </p>
                        </li>
                        @endif
                        @endforeach
                </div>


                <!-- Special offer -->
                <div class="discounts-wrap" id="tentang-bab">
                    <h3 class="component-ttl"><span>Tentang</span></h3>
                    <div id="about" class="layout_padding about_section">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div><img src="{{ asset('gambar/' . $abouts[0]->image) }}" alt="gambar"
                                            style="max-width: 100%;"></div>
                                </div>
                                <div class="col-md-6">
                                    <p class="about_taital">{{ $abouts[0]->description }}</p>
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
                                        <p class="component-desc component-desc-ct">Jangan ragu untuk mengirimkan pertanyaan
                                            Anda</p>
                                        {{-- kolom --}}
                                        <p class="contactform-field contactform-text">
                                            <label class="contactform-label">Nama</label><!-- NO SPACE --><span
                                                class="contactform-input"><input placeholder="Nama" type="text"
                                                    name="name" data-required="text"></span>
                                        </p>
                                        <p class="contactform-field contactform-email">
                                            <label class="contactform-label">Email</label><!-- NO SPACE --><span
                                                class="contactform-input"><input placeholder="Email Anda" type="text"
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
