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
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Create Products</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="{{ route('product.store') }}">
                  <div class="card-body">
                    @csrf

                    <div class="form-group">
                        <label>Select Kategori</label>
                        <select name="category_id" class="form-control">
                          <option value="">Pilih Kategori</option>
                            @foreach ($list_category as $key => $value)
                          <option value="{{ $key }}">{{ $value }}</option>
                            @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputText">Nama Product</label>
                        <input type="text" name="name" class="form-control" id="exampleInputtext" placeholder="enter Product's Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">Harga</label>
                        <input type="string" name="price" class="form-control" id="exampleInputtext" placeholder="enter Price">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">Harga Diskon</label>
                        <input type="text" name="discount_price" class="form-control" id="exampleInputtext" placeholder="enter Discount's Price">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">Deskripsi</label>
                        <textarea type="text" name="description" class="form-control" id="exampleInputtext" placeholder="enter slider description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">Stock</label>
                        <input type="text" name="stock" class="form-control" id="exampleInputtext" placeholder="enter Stock">
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
