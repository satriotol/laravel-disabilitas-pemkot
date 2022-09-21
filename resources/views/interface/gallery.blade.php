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
    <h1 class="main-ttl"><span>Kursi Roda</span></h1>
    <!-- Catalog Sidebar - start -->
    <div class="section-sb">

        <!-- Catalog Categories - start -->
        <div class="section-sb-current">
            <h3><a href="{{route('product-list')}}">Kursi Roda<span id="section-sb-toggle" class="section-sb-toggle"><span class="section-sb-ico"></span></span></a></h3>
            <ul class="section-sb-list" id="section-sb-list">
                @foreach ($categories as $cate)
                <li class="categ-1">
                    <a href="{{route('product-list')}}">
                        <span class="categ-1-label">{{$cate->name}}</span>
                    </a>
                </li>

                @endforeach
            </ul>
        </div>
        <!-- Catalog Categories - end -->



    </div>
    <!-- Catalog Sidebar - end -->
    <!-- Catalog Items | Gallery V1 - start -->
    <div class="section-cont">

        <!-- Catalog Topbar - start -->
        <div class="section-top">

            <!-- View Mode -->
            <ul class="section-mode">
                <li class="section-mode-gallery active"><a title="View mode: Gallery" href="{{route('product-gallery')}}"></a></li>
                <li class="section-mode-list"><a title="View mode: List" href="{{route('product-list')}}"></a></li>
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
            @foreach ($products as $product)
            <div class="prod-i">
                <div class="prod-i-top">
                    <a href="#" class="prod-i-img"><!-- NO SPACE --><img src="https://ecs7.tokopedia.net/img/cache/700/product-1/2018/3/26/25055431/25055431_2ca7e39d-3859-412f-9742-ec34f6c411f0_1000_1000.jpg" alt="Adipisci aperiam commodi"><!-- NO SPACE --></a>

                    <a href="{{route('product-detail')}}" class="prod-i-buy">Pergi Ke Detail</a>


                </div>
                <h3>
                    <a href="#">{{$product->name}}</a>
                </h3>
                <p class="prod-i-price">
                    <b>Rp. {{$product->price}}</b>
                </p>

            </div>

            @endforeach
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
    <!-- Catalog Items | Gallery V1 - end -->
</section>
@endsection
