<link rel="preconnect" href="{{ asset('frontend/https://fonts.googleapis.com/') }}">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&amp;family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&amp;display=swap"
    rel="stylesheet')}}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/swiper-bundle.min.css') }}">

@if (App::getLocale() == 'ar')
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style-rtl.css') }}">

    <style>
        .fa-regular.fa-arrow-right {
            transform: rotate(135deg) !important;
            margin-left: 0 !important;
            margin-right: .5rem !important;
        }
    </style>

    <style>
        input[type="tel"] {
            direction: rtl;
        }
    </style>

    <style>
        @media (min-width: 1400px) {
            .offset-xxl-3 {
                margin-right: 25%;
                margin-left: 0%;
            }
        }
    </style>

    <style>
        .icon-box{
            direction: ltr;
        }
    </style>
@else
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
@endif

<style>
    .header-logo {
        padding-top: 0px;
        padding-bottom: 0px;
    }

    .header-layout1 .menu-area.style2:before {
        height: 100%;
    }

    .contact-map iframe {
        filter: none;
    }
</style>

@stack('styles')
