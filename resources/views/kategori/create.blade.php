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
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Category</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST"
                            action="@isset($kategori) {{ route('kategori.update', $kategori->id) }} @endisset @empty($kategori) {{ route('kategori.store') }} @endempty" enctype="multipart/form-data">
                            <div class="card-body">
                                @include('partials.errors')
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Kategori</label>
                                    <input type="text" name="name" class="form-control" required
                                        placeholder="Masukkan Nama Kategori" value= {{ isset($kategori) ? $kategori->name : '' }} >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Gambar</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" name="image" value={{ isset($kategori) ? $kategori->image : '' }}>
                                    </div>
                                </div>
                                <br>
                                <div style="height: 150px; width: 150px;">
                                    @isset($kategori)
                                        <img style="height: 150px; width: 150px;" src="{{ asset('gambar/'.$kategori->image) }}" alt="{{ $kategori->name }}">
                                    @endisset
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Keterangan</label>
                                    <select name="keterangan" class="form-control">
                                        <option>Baru</option>
                                        <option>Bekas</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->

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
