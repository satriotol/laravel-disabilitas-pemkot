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
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Product</h3>
                        </div>
                        <form method="POST"
                            action="@isset($product_image) {{ route('product.update_detail', $product_image->id) }} @endisset @empty($product_image) {{ route('product.store_detail', $product->id) }} @endempty"
                            enctype="multipart/form-data">
                            <div class="card-body">
                                @include('partials.errors')
                                @csrf
                                <div class="form-group">
                                    <label for="gambar">Gambar</label>
                                    <div class="input-group mb-3">
                                        <div class="custom-file">
                                            <input type="file" name="image" class="form-control" id="inputGroupFile01"
                                                value={{ isset($product_image) ? $product_image->image : '' }}>

                                        </div>
                                    </div>
                                </div>

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
