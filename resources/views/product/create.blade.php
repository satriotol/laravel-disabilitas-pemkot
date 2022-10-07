@extends('admin.layouts.main')

@section('container')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Product</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Product</h3>
                        </div>
                        <form method="POST"
                            action="@isset($product) {{ route('product.update', $product->id) }} @endisset @empty($product) {{ route('product.store') }} @endempty">
                            <div class="card-body">
                                @include('partials.errors')
                                @csrf
                                <div class="form-group">
                                    <label>Pilih Kategori</label>
                                    <select name="category_id" class="form-control" required>
                                        <option value="">Pilih Kategori</option>
                                        @foreach ($list_category as $key => $value)
                                            <option value="{{ $key }}"
                                                @isset($product)
                                            {{ $product->category_id == $key ? 'selected' : '' }}
                                            @endisset>
                                                {{ $value }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Nama Produk</label>
                                    <input type="text" name="name" class="form-control" required
                                        placeholder="Masukan Nama Produk" value={{isset($product) ? $product->name : '' }} >
                                </div>
                                <div class="form-group">
                                    <label>Harga Donasi</label>
                                    <input required type="number" name="price" class="form-control" placeholder="Masukan Harga"
                                        value="{{ isset($product) ? $product->price : '' }}">
                                </div>
		                        <div class="col-8">
			                    <p>Jika akan diberi harga, maka tuliskan nominalnya, jika gratis maka tulis gratis</p>
                                </div>
                                {{-- <div class="form-group">
                                    <label>Harga Diskon</label>
                                    <input type="number" name="discount_price" class="form-control"
                                        placeholder="Masukan Harga Diskon"
                                        value="{{ isset($product) ? $product->discount_price : '' }}">
                                </div> --}}
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea required type="text" name="description" class="form-control" placeholder="Masukan Deskripsi">{{ isset($product) ? $product->description : '' }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Stok Produk</label>
                                    <input required type="number" name="stock" class="form-control"
                                        placeholder="Masukan Jumlah Stok"
                                        value="{{ isset($product) ? $product->stock : '' }}">
                                </div>
                                <div class="popup" id="popup-1">
                                    <div class="overlay"></div>
                                    <div class="bebas">
                                        <div class="close-btn" onclick="togglePopup()">&times;</div>
                                        <h2>Notifikasi</h2>
                                        <p>Pengiriman Disepakati oleh Kedua Belah Pihak</p>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="icheck-primary">
                                        <i class="nav-icon fas fa-exclamation-circle" style="color: orange" onclick="togglePopup()"></i>
                                        <label for="remember"> Pengiriman </label>
                                    </div>
                                <style>
                                    .popup .overlay{
                                        position:fixed;
                                        top: 0px;
                                        left: 0px;
                                        width: 90vw;
                                        height: 90vh;
                                        background: rgba(0, 0, 0, 0.7);
                                        z-index: 1;
                                        display: none;
                                    }
                                    .popup .bebas{
                                        position: absolute;
                                        top: 50%;
                                        left: 50%;
                                        transform: translate(-50%, -50%) scale(0);
                                        background: red;
                                        width: 400px;
                                        height: 120px;
                                        z-index: 2;
                                        text-align: center;
                                        padding: 20px;
                                        box-sizing: border-box;
                                    }
                                    .popup .close-btn{
                                        position: absolute;
                                        right: 20px;
                                        top: 20px;
                                        width: 30px;
                                        height: 30px;
                                        background: #222;
                                        color: #fff;
                                        font-size: 25px;
                                        font-weight: 600;
                                        line-height: 30px;
                                        text-align: center;
                                        border-radius: 50%;
                                    }
                                    .popup.active .overay{
                                        display: block;
                                    }
                                    .popup.active .bebas {
                                        transition: all 300ms ease-in-out;
                                        transform: translate(-50%, -50%) scale(1);
                                    }
                                </style>
                                <script>
                                    function togglePopup() {
                                        document.getElementById("popup-1").classList.toggle("active");
                                    }

                                </script>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
