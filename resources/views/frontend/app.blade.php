{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="themepresss">
    <link rel="shortcut icon" type="image/png" href="{{ asset('frontend/assets/images/favicon.png') }}">

    <title>Abo Yazn Trading | @yield('title')</title>

    <!-- CSS -->
    @include('frontend.partials.styles')

</head>

<body @if ($lang == 'ar') style="direction: rtl" @endif>

    <!-- start page-wrapper -->
    <div class="page-wrapper">

        <!-- start preloader -->
        @include('frontend.partials.overlay')
        <!-- end preloader -->


        <!-- Start header -->
        @include('frontend.partials.header')
        <!-- end of header -->


        <!-- start of content -->
        @yield('content')
        <!-- end of content -->

        <!-- start of tp-site-footer-section -->
        @include('frontend.partials.footer')
        <!-- end of tp-site-footer-section -->

    </div>
    <!-- end of page-wrapper -->



    <!-- JavaScript -->
    @include('frontend.partials.scripts')

</body>


</html> --}}



<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Contrcting - | @yield('title')</title>
    <meta name="author" content="ElNasr">
    <meta name="description" content="ElNasr - ElNasr Construction Service HTML Template">
    <meta name="keywords" content="ElNasr - ElNasr Construction Service HTML Template">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('frontend/assets/img/favicons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('frontend/assets/img/favicons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('frontend/assets/img/favicons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('frontend/assets/img/favicons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114"
        href="{{ asset('frontend/assets/img/favicons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120"
        href="{{ asset('frontend/assets/img/favicons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144"
        href="{{ asset('frontend/assets/img/favicons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152"
        href="{{ asset('frontend/assets/img/favicons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('frontend/assets/img/favicons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ asset('frontend/assets/img/favicons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('frontend/assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96"
        href="{{ asset('frontend/assets/img/favicons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('frontend/assets/img/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('frontend/assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff')}}">
    <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff')}}">
    @include('frontend.partials.styles')
</head>

<body @if ($lang == 'ar') style="direction: rtl" @endif>
    <div class="cursor"></div>
    <div class="cursor2"></div>

    @include('frontend.partials.overlay')

    @include('frontend.partials.header')

    @yield('content')

    @include('frontend.partials.footer')

    @include('frontend.partials.scripts')
</body>

</html>
