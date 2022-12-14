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
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Social Media</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST"
                        action="@isset($socialmedia) {{ route('socialmedia.update', $socialmedia->id) }} @endisset @empty($socialmedia) {{ route('socialmedia.store') }} @endempty" enctype="multipart/form-data">
                            <div class="card-body">
                                @include('partials.errors')
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Social Media</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" required
                                        placeholder="Masukkan Nama Sosial Media" value={{ isset($socialmedia) ? $socialmedia->name : '' }}>
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Gambar</label>
                                        <div class="input-group">
                                            <input type="file" class="form-control" name="image" value={{ isset($socialmedia) ? $socialmedia->image : '' }}>
                                        </div>
                                        <br>
                                        <div style="height: 150px; width: 150px;">
                                            @isset($socialmedia)
                                                <img style="height: 150px; width: 150px;" src="{{ asset('gambar/'.$socialmedia->image) }}" alt="{{ $socialmedia->name }}">
                                            @endisset
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">URL</label>
                                    <input type="url" name="url" class="form-control" id="exampleInputEmail1" required
                                        placeholder="Enter URL" value={{ isset($socialmedia) ? $socialmedia->url : '' }}>
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
