@extends('admin.layouts.main')

@section('container')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>FAQ</h1>
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
                            <h3 class="card-title">Create FAQ</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{ route('faq.store') }}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
<<<<<<< HEAD
                                    <label for="question">Question</label>
                                    <input type="text" name="question" class="form-control" id="question"
                                        placeholder="Enter Question Here">
                                </div>
                                <div class="form-group">
                                    <label for="answer">Answer</label>
                                    <input type="text" name="answer" class="form-control" id="answer"
=======
                                    <label for="exampleInputEmail1">Question</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter Question Here">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Answer</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"
>>>>>>> 937ba021412c4cdb661ce86e30fc8c3c993fd475
                                        placeholder="Enter Answer Here">
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
