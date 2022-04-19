<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Teacher Management System') }} | @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    @include('layouts.style')
</head>
<body>
    @include('layouts.header')
    @include('layouts.sidebar')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('layouts.breadcrum')
        <!-- /.content-header -->
        @yield('content')
    </div>
    <!-- /.content-wrapper -->

    @include('layouts.footer')
    @include('layouts.script')


</body>
</html>
