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
            <span>{{ $product->name }}</span>
        </li>
    </ul>
    <h1 class="main-ttl"><span>{{ $product->name }}</span></h1>

    <h4>Nama Pemilik : {{ $product->user->name }}</h4> <br>

    <!-- Single Product - start -->
    <div class="prod-wrap">

               <!-- Product Images -->
        <div class="prod-slider-wrap">


            <div class="prod-slider">
                <ul class="prod-slider-car">
                    <li>
                            {{-- <img src="{{ asset('gambar/' .  $product->image) }}" alt="" style="width: 100%" height="auto"> --}}
                            <img src="{{ asset('gambar/' . $product->product_images[0]->image) }}" alt="">
                    </li>
                </ul>
            </div>


            @foreach ($product->product_images as $product_image)
            <div class="prod-thumbs">
                <div class="bx-wrapper" style="max-width: 25032px; margin: 0px auto;"><div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 102px;"><ul class="prod-thumbs-car" style="width: 1015%; position: relative; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                    <li style="float: left; list-style: none; position: relative; width: 83.4px; margin-right: 8px;">
                        <a data-slide-index="0" href="#" class="active">
                            <img src="{{ asset('gambar/' . $product_image->image) }}" alt="">
                        </a>
                    </li>
                </ul></div><div class="bx-controls bx-has-controls-direction"><div class="bx-controls-direction"><a class="bx-prev" href="">Prev</a><a class="bx-next" href="">Next</a></div></div></div>
            </div>

            @endforeach
        </div>

        <!-- Product Description/Info -->
        <div class="prod-cont">
            <div class="prod-sticker">
                <p class="prod-sticker-3">-20%</p>
            </div> <br><br>
            <div class="prod-cont-txt">
                <p>{{  $product->description }}</p>
            </div>
            <div class="prod-info">
                <p class="prod-addwrap">
                    <a href="#" class="prod-add" rel="nofollow">Masukkan Keranjang</a>
                </p>
            </div>

            <ul class="prod-i-props" style="font-size: 25px;">
                <li><h1>Rp. {{ $product->discount_price }}</h1></li>
                <li> <del> Rp. {{ $product->price }}</del></li>
            </ul>

            <h3>Stok : {{ $product->stock }}</h3>





        </div>

    </div>
    <!-- Single Product - end -->

    <!-- Related Products - start -->
    {{-- <div class="prod-related">
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
                </li>
            </ul>
        </div>
    </div> --}}
    <!-- Related Products - end -->


</section>
@endsection
