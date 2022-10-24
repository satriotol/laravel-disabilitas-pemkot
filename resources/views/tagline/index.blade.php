@extends('admin.layouts.main')


@section('container')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Nama Website</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tabel Tagline</h3>
            </div>
            <div class="card-body">
                <div class="text-right mb-2">
                    {{-- <a href="{{ route('tagline.create') }}"><button type="button" class="btn bg-gradient-primary">Create</button></a> --}}
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr style="text-align: center">
                            <th style="width: 50px">Id</th>
                            <th>Judul Website</th>
                            <th style="width: 150px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($taglines as $t)
                            <td>{{ $t->id }}</td>
                            <td>{{ $t->nama_website }}</td>
                            <td>
                                <a href="{{ route('tagline.edit', $t->id) }}"><button type="button" name="edit" class="btn btn-sm bg-gradient-warning">Edit</button></a>
                                <a href="{{ route('tagline.delete', $t->id) }}"><button type="button" name="delete" class="btn btn-sm bg-gradient-danger"onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</button></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
