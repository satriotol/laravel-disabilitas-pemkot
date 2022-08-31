@extends('admin.layouts.main')


@section('container')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Kategori</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tabel Kategori</h3>
            </div>
            <div class="card-body">
                <div class="text-right mb-2">
                    <a href="{{ route('kategori.create') }}"><button type="button" class="btn bg-gradient-primary">Create</button></a>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nama</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($kategori as $k)
                            <td>{{ $k->id }}</td>
                            <td>{{ $k->name }}</td>
                            <td>{{ $k->image }}</td>
                            <td>
                                <button type="button" class="btn btn-sm bg-gradient-warning">Edit</button>
                                <button type="button" class="btn btn-sm bg-gradient-danger">Hapus</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
