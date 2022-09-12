@extends('admin.layouts.main')

@section('container')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>About</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Create About</h3>
                        </div>
                        <form method="POST"
                        action="@isset($about){{ route('about.update',$about->id) }} @endisset @empty($about) {{ route('about.store') }} @endempty" enctype="multipart/form-data" id="upload-image">
                            <div class="card-body">
                                @include('partials.errors')
                                @csrf
                                <div class="form-group">
                                    <label for="descriptiom">Description</label>
                                    <textarea type="text" name="description" class="form-control" required
                                        placeholder="Enter description's Here ">{{ isset($about) ? $about->description : '' }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Gambar</label>
                                        <div class="input-group">
                                            <input type="file" class="form-control" name="image" class="form-control"
                                                value={{ isset($about) ? $about->image : '' }} >
                                        </div>
                                        <br>
                                        <div style="height: 150px; width: 150px;">
                                        @isset($about)
                                            <img style="height: 150px; width: 150px;" src="{{ asset('gambar/'.$about->image) }}" alt="{{ $about->name }}">
                                        @endisset
                                        </div>
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
