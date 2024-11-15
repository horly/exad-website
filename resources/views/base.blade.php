<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" rel="shortcut icon" href="{{ asset('assets/logo/exad-1200x1200.jpg') }}" type="image/jpg">

        <title>{{ config('app.name') }} - @yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="{{ asset('assets/lib/fontawesome-free-6.6.0-web/css/all.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/lightgallery.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/lib/flags-icon/css/flag-icon.css') }}">
        <!-- Theme Style -->
        <link rel="stylesheet" href="{{ asset('assets/css/theme_11.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    </head>
    <body>

        <!-- Start Preloader -->
        <div class="cs-preloader cs-accent_color cs-white_bg">
            <div class="cs-preloader_bg cs-center cs-accent_7_bg_2">
            <div class="cs-preloader_in cs-accent_15_border">
                <img src="{{ asset('assets/logo/exad-1200x1200.png') }}" alt="Logo">
            </div>
            </div>
        </div>
        <!-- End Preloader -->


        @yield('content')

        <script src="{{ asset('assets/js/plugins/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/isotope.pkg.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/jquery.slick.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/lightgallery.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/jquery.counter.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/wow.min.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
        <script src="{{ asset('assets/js/global.js') }}"></script>
    </body>
</html>
