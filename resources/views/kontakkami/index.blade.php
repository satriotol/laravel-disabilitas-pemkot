@extends('admin.layouts.main')


@section('container')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Kontak Kami</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tabel Kontak Kami</h3>
            </div>
            <div class="card-body">
                <div class="text-right mb-2">
                    {{-- <a href="{{ route('kontakkami.create') }}"><button type="button" class="btn bg-gradient-primary">Create</button></a> --}}
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 50px">Id</th>
                            <th  style="text-align: center">Telepon</th>
                            <th  style="text-align: center">Kode Pos</th>
                            <th  style="text-align: center">Alamat</th>
                            <th  style="text-align: center">Email</th>
                            <th style="width: 150px; text-align: center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        @foreach ($kontakkami as $kk)
                            <td>{{ $kk->id }}</td>
                            <td>{{ $kk->telp }}</td>
                            <td>{{ $kk->kode_pos }}</td>
                            <td>{{ $kk->alamat }}</td>
                            <td>{{ $kk->email }}</td>
                            <td>
                                <a href="{{ route('kontakkami.edit', $kk->id) }}"><button type="button" name="edit" class="btn btn-sm bg-gradient-warning">Edit</button></a>
                                <a href="{{ route('kontakkami.delete', $kk->id) }}"><button type="button" name="delete" class="btn btn-sm bg-gradient-danger"onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</button></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
