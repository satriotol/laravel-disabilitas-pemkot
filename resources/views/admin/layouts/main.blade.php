<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PEMKOT SEMARANG</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/toastr/toastr.min.css') }}">
    <style>
        .required {
            color: red;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        {{-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo"
                height="60" width="60">
        </div> --}}

        @include('admin.partials.navbar')

        @include('admin.partials.sidebar')
        <div class="content-wrapper">
            @yield('container')
        </div>

        <footer class="main-footer">
            <strong>Copyright &copy; 2022 <a href="https://semarangkota.go.id/" target="_blank">PEMKOT
                    SEMARANG</a>.</strong>
            All rights reserved.
        </footer>
    </div>
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>
    <script>
        $(function() {
            $('.form-group:has(input[required]) > label')
                .after('<span class="required"> *</span>')
            $('.form-group:has(select[required]) > label')
                .after('<span class="required"> *</span>')
            $('.form-group:has(textarea[required]) > label')
                .after('<span class="required"> *</span>')
        })
    </script>
    @if (session()->has('flash_message'))
        <script>
            toastr.success('{{ session()->get('flash_message') }}')
        </script>
    @endif
</body>

</html>
