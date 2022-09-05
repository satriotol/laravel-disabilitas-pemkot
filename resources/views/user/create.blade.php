@extends('admin.layouts.main')

@section('container')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>User</h1>
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
                  <h3 class="card-title">User</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST"
                action="@isset($user) {{ route('user.update', $user->id) }} @endisset @empty($user) {{ route('user.store') }} @endempty">
                  <div class="card-body">
                    @include('partials.errors')
                    @csrf
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" name="name" class="form-control" required
                       placeholder="Masukkan Nama" value={{isset($user) ? $user->name : '' }} >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">Email</label>
                        <input type="text" name="email" class="form-control" required
                        placeholder="Masukkan Email" value={{isset($user) ? $user->name : '' }} >
                      </div>
                      <div>
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                        <div class="col-md-6">
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password_confirmation"
                                required autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
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
