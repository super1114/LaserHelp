<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Lasor Help') }}</title>

    <!--===============================================================================================-->	
	<script src="{{ asset('assets/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
	<script src="{{ asset('assets/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
	<script src="{{ asset('assets/vendor/select2/select2.min.js') }}"></script>
    <!--===============================================================================================-->
	<script src="{{ asset('assets/js/main.js') }}"></script>
    @yield('script')
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('assets/images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
<!--===============================================================================================-->
@yield('style')
<style>
    .py-4 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
}
</style>
</head>
<body>
    <div id="app">
        <div ></div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
