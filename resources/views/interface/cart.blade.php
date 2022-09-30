@extends('interface.layout.main')

@section('container')
<section class="container stylization maincont">


    <ul class="b-crumbs">
        <li>
            <a href="{{route('home')}}">
                Home
            </a>
        </li>
        <li>
            <span>Keranjang</span>
        </li>
    </ul>
    <h1 class="main-ttl"><span>Keranjang</span></h1>
    <!-- Cart Items - start -->
    <form action="#">
	@if(!empty($pesanan))
	<p align="right">Tanggal Pesan : {{ $pesanan->tanggal }}</p>
        <div class="cart-items-wrap">
            <table class="cart-items">
                <thead>
                <tr>
                    <td class="cart-image">Gambar</td>
                    <td class="cart-ttl" style="width:90px;">Produk</td>
                    <td class="cart-price">Harga</td>
                    <td class="cart-quantity" style="width: 40px;">Jumlah</td>
                    <td class="cart-summ">Total Harga</td>
                    <td class="cart-del">&nbsp;</td>
                </tr>
                </thead>
                <tbody>
		@foreach($pesanan_details as $pd)
                <tr>
                    <td class="cart-image">
                        <a href="product.html">
                            <img src="{{asset('gambar/'.$pd->product->product_images[0]->image)}}" alt="Similique delectus totam">
                        </a>
                    </td>
                    <td class="cart-ttl">
                        <a href="product.html">{{ $pd->product->name }}</a>
                    </td>
                    <td class="cart-price">
                        <b>@currency($pd->product->price)</b>
                    </td>
                    <td class="cart-quantity">
                        <p class="cart-qnt">
                            {{$pd->jumlah}}
                        </p>
                    </td>
                    <td class="cart-summ">
                        <b>@currency($pd->price)</b>
                        <p class="cart-forone">unit price <b>@currency($pd->price)</b></p>
                    </td>
                    <td class="cart-del">
                        <a href="{{ route('hapus-cart', $pd->id)}}" class="cart-remove" onclick="return confirm('Anda yakin ingin menghapus data ini?')"></a>
                    </td>
                </tr>
		@endforeach
                </tbody>
            </table>
        </div>
        <ul class="cart-total">
            <li class="cart-summ">TOTAL: <b>@currency($pd->pesanan->price)</b></li>
        </ul>
        <div class="cart-submit">
            <a href="https://wa.me/6285735501035?text=Nama%3A%0ANo.%20HP%3A%0AAlamat%3A%0APesanan%3A%0AJumlah%3A" class="cart-submit-btn">Bayar</a>
            <a href="#" class="cart-clear">Bersihkan Keranjang</a>
        </div>
    @else
    <h6>Data Keranjang Kosong</h6>
	@endif
    </form>
    <!-- Cart Items - end -->

</section>
@endsection
