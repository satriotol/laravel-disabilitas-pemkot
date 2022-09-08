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
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tabel Product</h3>
            </div>
            <div class="card-body">
                <div class="text-right mb-2">
                    <a href="{{ route('product.create') }}"><button type="button"
                            class="btn bg-gradient-primary">Create</button></a>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr style="text-align: center;">
                            <th style="width: 50px">Id</th>
                            <th>Kategori</th>
                            <th>
                                User
                            </th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Harga Diskon</th>
                            <th>Deskripsi</th>
                            <th>Stock</th>
                            <th style="width: 200px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        @foreach ($product as $p)
                            <td>{{ $p->id }}</td>
                            <td>{{ $p->category->name }}</td>
                            <td>{{ $p->user->name }}</td>
                            <td>{{ $p->name }}</td>
                            <td>{{ $p->price }}</td>
                            <td>{{ $p->discount_price }}</td>
                            <td>{{ $p->description }}</td>
                            <td>{{ $p->stock }}</td>
                            <td>
                                <a href="{{ route('product.edit', $p->id) }}"><button type="button" name="edit" class="btn btn-sm bg-gradient-warning">Edit</button></a>
                                <a href="{{ route('product.detail', $p->id) }}"><button type="button" name="edit" class="btn btn-sm bg-gradient-success">Detail</button></a>
                                <a href="{{ route('product.delete', $p->id) }}"><button type="button" name="delete" class="btn btn-sm bg-gradient-danger"onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</button></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
