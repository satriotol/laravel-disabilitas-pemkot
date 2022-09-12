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
                      <label>Nama Slider</label>
                      <input type="text" name="name" class="form-control" required
                       placeholder="Masukkan Nama Slider" value={{isset($slider) ? $slider->name : '' }} >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">Diskripsi Slider</label>
                        <textarea required type="text" name="description" class="form-control" placeholder="Masukan Deskripsi">{{ isset($slider) ? $slider->description : '' }}</textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputFile">Gambar</label>
                        <div class="input-group">
                            <input type="file" class="form-control" name="image" value={{ isset($slider) ? $slider->image : '' }}>
                        </div>
                        <br>
                        <div style="height: 150px; width: 150px;">
                        @isset($slider)
                            <img style="height: 150px; width: 150px;" src="{{ asset('gambar/'.$slider->image) }}" alt="{{ $slider->name }}">
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
