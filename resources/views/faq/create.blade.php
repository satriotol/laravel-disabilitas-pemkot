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
                        <form method="POST"
                        action="@isset($faq) {{ route('faq.update', $faq->id) }} @endisset @empty($faq) {{ route('faq.store') }} @endempty ">
                            <div class="card-body">
                                @include('partials.errors')
                                @csrf
                                <div class="form-group">
                                    <label for="question">Question</label>
                                    <input type="text" name="question" class="form-control" required
                                        placeholder="Enter Question Here" value={{ isset($faq) ? $faq->question : '' }} >
                                </div>
                                <div class="form-group">
                                    <label for="answer">Answer</label>
                                    <input type="text" name="answer" class="form-control" required
                                        placeholder="Enter Answer Here" value={{ isset($faq) ? $faq->answer : ''}} >
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
