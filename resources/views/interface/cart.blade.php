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

        <div class="cart-items-wrap">
            <table class="cart-items">
                <thead>
                <tr>
                    <td class="cart-image">Gambar</td>
                    <td class="cart-ttl">Produk</td>
                    <td class="cart-price">Harga</td>
                    <td class="cart-quantity">Jumlah</td>
                    <td class="cart-summ">Total Harga</td>
                    <td class="cart-del">&nbsp;</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="cart-image">
                        <a href="product.html">
                            <img src="https://s1.bukalapak.com/img/621675472/w-1000/Kursi_Roda_Standard_Velg_Racing_Sella_KY_809B.jpg" alt="Similique delectus totam">
                        </a>
                    </td>
                    <td class="cart-ttl">
                        <a href="product.html">Kursi Roda</a>
                    </td>
                    <td class="cart-price">
                        <b>Rp. 200.000</b>
                    </td>
                    <td class="cart-quantity">
                        <p class="cart-qnt">
                            <input value="1" type="text">
                            <a href="#" class="cart-plus"><i class="fa fa-angle-up"></i></a>
                            <a href="#" class="cart-minus"><i class="fa fa-angle-down"></i></a>
                        </p>
                    </td>
                    <td class="cart-summ">
                        <b>Rp. 200.000</b>
                        <p class="cart-forone">unit price <b>Rp. 200.000</b></p>
                    </td>
                    <td class="cart-del">
                        <a href="#" class="cart-remove"></a>
                    </td>
                </tr>
                <tr>
                    <td class="cart-image">
                        <a href="product.html">
                            <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full/99/MTA-1573794/ottobock_kaki-palsu_full04.jpg" alt="Eveniet nobis minus">
                        </a>
                    </td>
                    <td class="cart-ttl">
                        <a href="product.html">Kaki Palsu</a>
                    </td>
                    <td class="cart-price">
                        <b>Rp. 100.000</b>
                    </td>
                    <td class="cart-quantity">
                        <p class="cart-qnt">
                            <input value="1" type="text">
                            <a href="#" class="cart-plus"><i class="fa fa-angle-up"></i></a>
                            <a href="#" class="cart-minus"><i class="fa fa-angle-down"></i></a>
                        </p>
                    </td>
                    <td class="cart-summ">
                        <b>Rp. 100.000</b>
                        <p class="cart-forone">unit price <b>Rp. 100.000</b></p>
                    </td>
                    <td class="cart-del">
                        <a href="#" class="cart-remove"></a>
                    </td>
                </tr>
                <tr>
                    <td class="cart-image">
                        <a href="product.html">
                            <img src="https://s1.bukalapak.com/img/1500314121/w-1000/img20170505_091519_alat_bantu_dengar_nbs_2.jpg" alt="Quod soluta corrupti">
                        </a>
                    </td>
                    <td class="cart-ttl">
                        <a href="product.html">Alat Bantu Dengar</a>
                    </td>
                    <td class="cart-price">
                        <b>Rp. 200.000</b>
                    </td>
                    <td class="cart-quantity">
                        <p class="cart-qnt">
                            <input value="1" type="text">
                            <a href="#" class="cart-plus"><i class="fa fa-angle-up"></i></a>
                            <a href="#" class="cart-minus"><i class="fa fa-angle-down"></i></a>
                        </p>
                    </td>
                    <td class="cart-summ">
                        <b>Rp. 200.000</b>
                        <p class="cart-forone">unit price <b>Rp. 200.000</b></p>
                    </td>
                    <td class="cart-del">
                        <a href="#" class="cart-remove"></a>
                    </td>
                </tr>
                <tr>
                    <td class="cart-image">
                        <a href="product.html">
                            <img src="https://s1.bukalapak.com/img/1933370611/w-1000/Tongkat_kaki_3_Alat_Bantu_Jalan_Fisioterapi___Sella.jpg" alt="Perferendis recusandae">
                        </a>
                    </td>
                    <td class="cart-ttl">
                        <a href="product.html">Tongkat Bantu</a>
                    </td>
                    <td class="cart-price">
                        <b>Rp. 300.000</b>
                    </td>
                    <td class="cart-quantity">
                        <p class="cart-qnt">
                            <input value="1" type="text">
                            <a href="#" class="cart-plus"><i class="fa fa-angle-up"></i></a>
                            <a href="#" class="cart-minus"><i class="fa fa-angle-down"></i></a>
                        </p>
                    </td>
                    <td class="cart-summ">
                        <b>Rp. 300.000</b>
                        <p class="cart-forone">unit price <b>Rp. 300.000</b></p>
                    </td>
                    <td class="cart-del">
                        <a href="#" class="cart-remove"></a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <ul class="cart-total">
            <li class="cart-summ">TOTAL: <b>Rp. 800.000</b></li>
        </ul>
        <div class="cart-submit">
            <a href="#" class="cart-submit-btn">Bayar</a>
            <a href="#" class="cart-clear">Bersihkan Keranjang</a>
        </div>
    </form>
    <!-- Cart Items - end -->

</section>
@endsection
