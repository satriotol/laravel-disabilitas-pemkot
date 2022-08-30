@extends('admin.layouts.main')

@section('container')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-block bg-gradient-primary">Create</button>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Adisti Khairunnisa</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                <td>
                    <button type="button" class="btn btn-sm bg-gradient-danger">Hapus</button>
                    <button type="button" class="btn btn-sm bg-gradient-warning">Edit</button>
                </td>
              </tr>
              <tr>
                <td>Dwi Ria Wulandari</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo.</td>
                <td>
                    <button type="button" class="btn btn-sm bg-gradient-danger">Hapus</button>
                    <button type="button" class="btn btn-sm bg-gradient-warning">Edit</button>
                </td>
              </tr>
              <tr>
                <td>Hanna Firdausiah</td>
                <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores, laborum?</td>
                <td>
                    <button type="button" class="btn btn-sm bg-gradient-danger">Hapus</button>
                    <button type="button" class="btn btn-sm bg-gradient-warning">Edit</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>

</div>
@endsection
