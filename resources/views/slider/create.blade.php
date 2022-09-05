@extends('admin.layouts.main')

@section('container')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Slider</h1>
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
                  <h3 class="card-title">Sliders</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST"
                action="@isset($slider) {{ route('slider.update', $slider->id) }} @endisset @empty($slider) {{ route('slider.store') }} @endempty" enctype="multipart/form-data">
                  <div class="card-body">
                    @include('partials.errors')
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputText">Nama Slider</label>
                      <input type="text" name="name" class="form-control" id="exampleInputtext" required
                       placeholder="Masukkan Nama Slider" value={{isset($slider) ? $slider->name : '' }} >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">Diskripsi Slider</label>
                        <textarea type="text" name="description" class="form-control" id="exampleInputtext"  required placeholder="Masukkan Deskripsi Slider"
                        value="{{ isset($slider) ? $slider->description : '' }}"></textarea>
                      </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Gambar</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="image" class="custom-file-input" required id="exampleInputFile"
                          value="{{ isset($slider) ? $slider->image : '' }}">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
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
