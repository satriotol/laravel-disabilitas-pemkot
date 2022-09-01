@extends('admin.layouts.main')


@section('container')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Social Media</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tabel Social Media</h3>
            </div>
            <div class="card-body">
                <div class="text-right mb-2">
                    <a href="{{ route('socialmedia.create') }}"><button type="button" class="btn bg-gradient-primary">Create</button></a>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 50px">Id</th>
                            <th>Nama</th>
                            <th>
                                <div class="form-group">
                                    <label>Select</label>
                                    <select class="form-control">
                                    <option>option 1</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                    <option>option 5</option>
                                    </select>
                                </div>
                            </th>
                            <th>URL</th>
                            <th style="width: 150px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($socialmedia as $sm)
                            <td>{{ $sm->id }}</td>
                            <td>{{ $sm->name }}</td>
                            <td>
                                <img src="{{ asset('gambar/'.$sm->image) }}" alt="" style="width:80px;height:50px;display:block;margin-right:auto;margin-left:auto;">
                            </td>
                            <td>{{ $sm->url }}</td>
                            <td>
                                <a href="{{ route('socialmedia.edit', $sm->id) }}"><button type="button" name="edit" class="btn btn-sm bg-gradient-warning">Edit</button></a>
                                <a href="{{ route('socialmedia.delete', $sm->id) }}"><button type="button" name="delete" class="btn btn-sm bg-gradient-danger"onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</button></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
