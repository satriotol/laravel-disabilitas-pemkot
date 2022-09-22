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
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Create Kontak Kami</h3>
                        </div>
                        <form method="POST"
                        action="@isset($kontakkami) {{ route('kontakkami.update', $kontakkami->id) }} @endisset @empty($kontakkami) {{ route('kontakkami.store') }} @endempty ">
                            <div class="card-body">
                                @include('partials.errors')
                                @csrf
                                <div class="form-group">
                                    <label for="name">Telepon</label>
                                    <input type="text" name="telp" class="form-control" required
                                        placeholder="Masukkan Telepon" value={{ isset($kontakkami) ? $kontakkami->telp : '' }} >
                                </div>
                                <div class="form-group">
                                    <label for="name">Kode Pos</label>
                                    <input type="text" name="kode_pos" class="form-control" required
                                        placeholder="Masukkan Kode Pos" value={{ isset($kontakkami) ? $kontakkami->kode_pos : '' }} >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputText">Alamat</label>
                                    <textarea required type="text" name="alamat" class="form-control" placeholder="Masukan Alamat">{{ isset($kontakkami) ? $kontakkami->alamat : '' }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" required
                                        placeholder="Masukkan Email" value={{ isset($kontakkami) ? $kontakkami->email : ''}} >
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
