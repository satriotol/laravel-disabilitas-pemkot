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
                    @foreach ($product->product_images as $product_image)
                    <li>
                        <a data-fancybox-group="product" class="fancy-img" href="{{ asset('gambar/' . $product_image->image) }}">
                            {{-- <img src="{{ asset('gambar/' .  $product->image) }}" alt="" style="width: 100%" height="auto"> --}}
                            <img src="{{ asset('gambar/' . $product_image->image) }}" alt="">
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>



            <div class="prod-thumbs">
                <div class="bx-wrapper" style="max-width: 25032px; margin: 0px auto;"><div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 102px;"><ul class="prod-thumbs-car" style="width: 1015%; position: relative; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                    @foreach ($product->product_images as $product_image)
                    <li style="float: left; list-style: none; position: relative; width: 83.4px; margin-right: 8px;">
                        <a data-slide-index="0" href="#" class="active">
                            <img src="{{ asset('gambar/' . $product_image->image) }}" alt="">
                        </a>
                    </li>
                    @endforeach
                </ul></div><div class="bx-controls bx-has-controls-direction"><div class="bx-controls-direction"><a class="bx-prev" href="">Prev</a><a class="bx-next" href="">Next</a></div></div></div>
            </div>


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
                    <a href="https://wa.me/6285735501035?text=Nama%3A%0ANo.%20HP%3A%0AAlamat%3A%0APesanan%3A%0AJumlah%3A"" class="prod-add" rel="nofollow">Chat dengan penjual</a>
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
    <div class="prod-related">
        <h2>Produk Terkait</h2>
        <div class="prod-related-car" id="prod-related-car">
            <ul class="slides">

                <li class="prod-rel-wrap">
                    @foreach ($post as $po)
                    @if ($po->product_images->count() > 0)
                    <div class="prod-rel">
                        <a href="#" class="prod-rel-img">
                            <img src="{{asset('gambar/' . $po->product_images[0]->image)}}" alt="">
                        </a>
                        <div class="prod-rel-cont">
                            <h3><a href="#">{{$po->name}}</a></h3>
                            <p class="prod-rel-price">
                                <b>Rp. {{$po->price}}</b>
                            </p>
                        </div>
                    </div>
                    @endif
                @endforeach
                </li>

            </ul>
        </div>
    </div>
    <!-- Related Products - end -->


</section>
@endsection
