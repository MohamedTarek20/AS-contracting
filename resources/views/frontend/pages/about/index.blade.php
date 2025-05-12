@extends('frontend.app')

@push('styles')
@endpush

@section('title', __('labels.about_us'))

@section('content')

    {{-- <!-- start of breadcumb-section -->
    <div class="tp-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tp-breadcumb-wrap">
                        <h2>{{ __('labels.about_us') }}</h2>
                        <ul>
                            <li><a href="{{ route('home') }}">{{ __('labels.home') }}</a></li>
                            <li><span>{{ __('labels.about_us') }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-shape-img-1"><img src="{{ asset('frontend/assets/images/slider/img-2.png') }}" alt=""></div>
        <div class="hero-shape-img-2"><img src="{{ asset('frontend/assets/images/slider/img-3.png') }}" alt=""></div>
    </div>
    <!-- end of tp-breadcumb-section-->


    <!-- start about-section -->
    @if ($who_we_are ?? null)
        <section class="about-section p-5 p-t-0">
            <div class="container">

                <div class="row align-items-center">
                    <div class="col col-lg-5 col-12">
                        <div class="video-area">
                            <img src="{{ $who_we_are->image_full_path }}" alt>
                        </div>
                    </div>
                    <div class="col col-lg-7 col-12">
                        <div class="about-area">
                            <div class="about-wrap">
                                <div class="about-title">
                                    <small>{{ __('labels.about_us') }}</small>
                                    <h2>
                                        @foreach (explode(' ', $who_we_are->title) as $key => $word)
                                            @if ($key % 2)
                                                <span>{{ $word }}</span>
                                            @else
                                                {{ $word }}
                                            @endif
                                        @endforeach
                                    </h2>
                                </div>
                                <p>{!! $who_we_are->description !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if ($our_vision ?? null)
        <section class="about-section category-area-s2 style-2 p-5 p-t-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col col-lg-7 col-12">
                        <div class="about-area">
                            <div class="about-wrap">
                                <div class="about-title">
                                    <small>{{ __('labels.about_us') }}</small>
                                    <h2>
                                        @foreach (explode(' ', $our_vision->title) as $key => $word)
                                            @if ($key % 2)
                                                <span>{{ $word }}</span>
                                            @else
                                                {{ $word }}
                                            @endif
                                        @endforeach
                                    </h2>
                                </div>
                                <p>{!! $our_vision->description !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-5 col-12">
                        <div class="video-area">
                            <img src="{{ $our_vision->image_full_path }}" alt>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if ($our_mission ?? null)
        <section class="about-section p-5 p-t-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col col-lg-5 col-12">
                        <div class="video-area">
                            <img src="{{ $our_mission->image_full_path }}" alt>
                        </div>
                    </div>
                    <div class="col col-lg-7 col-12">
                        <div class="about-area">
                            <div class="about-wrap">
                                <div class="about-title">
                                    <small>{{ __('labels.about_us') }}</small>
                                    <h2>
                                        @foreach (explode(' ', $our_mission->title) as $key => $word)
                                            @if ($key % 2)
                                                <span>{{ $word }}</span>
                                            @else
                                                {{ $word }}
                                            @endif
                                        @endforeach
                                    </h2>
                                </div>
                                <p>{!! $our_mission->description !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif --}}
    <!-- end about-section -->

    <div class="breadcumb-wrapper" data-bg-src="{{ asset('frontend/assets/img/bg/breadcumb-bg.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">{{ __('labels.about_us') }}</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">{{ __('labels.home') }}</a></li>
                    <li>{{ __('labels.about_us') }}</li>
                </ul>
            </div>
        </div>
    </div>

    @if ($who_we_are ?? null)
        <div class="overflow-hidden overflow-hidden space" id="about-sec">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="img-box3">
                            <div class="img1"><img src="{{ $who_we_are->image_full_path }}" width="550" height="630"
                                    alt="About"></div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="title-area mb-20 pe-xl-5 me-xl-5"><span
                                class="sub-title style1">{{ __('labels.about_us') }}</span>
                            <h2 class="sec-title mb-20">{{ $who_we_are->title }}</h2>
                        </div>
                        <p class="sec-text mb-30">{!! $who_we_are->description !!}</p>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if ($our_vision ?? null)
        <div class="overflow-hidden overflow-hidden space" id="about-sec"
            style="background-image: url({{ asset('frontend/assets/img/bg/process_bg_1.jpg') }}); padding-top: 237px;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="title-area mb-20 pe-xl-5 me-xl-5"><span
                                class="sub-title style1">{{ __('labels.about_us') }}</span>
                            <h2 class="sec-title mb-20">{{ $our_vision->title }}</h2>
                        </div>
                        <p class="sec-text mb-30">{!! $our_vision->description !!}</p>
                    </div>
                    <div class="col-xl-6">
                        <div class="img-box3">
                            <div class="img1"><img src="{{ $our_vision->image_full_path }}" width="550" height="630"
                                    alt="About"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if ($our_mission ?? null)
        <div class="overflow-hidden overflow-hidden space" id="about-sec">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="img-box3">
                            <div class="img1"><img src="{{ $our_mission->image_full_path }}" width="550"
                                    height="630" alt="About"></div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="title-area mb-20 pe-xl-5 me-xl-5"><span
                                class="sub-title style1">{{ __('labels.about_us') }}</span>
                            <h2 class="sec-title mb-20">{{ $our_mission->title }}</h2>
                        </div>
                        <p class="sec-text mb-30">{!! $our_mission->description !!}</p>
                    </div>
                </div>
            </div>
        </div>
    @endif


    <section class="cta-area2" data-overlay="title" data-opacity="9"
        data-bg-src="{{ asset('frontend/assets/img/bg/cta_bg_1.jpg') }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="title-area mb-0 text-center text-lg-start"><span
                            class="sub-title style1 mb-20">{{ __('labels.contacts') }}</span>
                        <h2 class="sec-title text-white">{{__('labels.contacts_title')}}</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cta-group justify-content-center">
                        <a href="{{ route('contact.index') }}" class="th-btn style1 th-icon">{{ __('labels.contacts') }}<i
                                class="fa-regular fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cta-shape"><img src="{{ asset('frontend/assets/img/normal/cta_1.png') }}" alt=""></div>
    </section>

    <section class="testi-area bg-smoke overflow-hidden space" id="testi-sec"
        data-bg-src="{{ asset('frontend/assets/img/bg/shape_bg_3.png') }}">
        <div class="container">
            <div class="title-area text-center"><span class="sub-title">{{ __('labels.client_testimonial') }}</span>
                <h2 class="sec-title">{{ __('labels.client_testimonial_subtitle') }}</h2>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="testiSlider1"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                    <div class="swiper-wrapper">
                        @foreach ($testimonials as $testimonial)
                            <div class="swiper-slide">
                                <div class="testi-card">
                                    <div class="testi-card_profile">
                                        <div class="testi-card_avater"><img src="{{ $testimonial->image_full_path }}"
                                                alt="testimonial"></div>
                                        <div class="testi-card-quote"><img
                                                src="{{ asset('frontend/assets/img/icon/testi-quote.svg') }}"
                                                alt="img">
                                        </div>
                                    </div>
                                    <p class="testi-card_text"><span>“</span>
                                        {{ $testimonial->description }}
                                        {{-- <img src="{{ asset('frontend/assets/img/icon/like.svg') }}" alt=""> --}}
                                        <span>”</span>
                                    </p>
                                    <div class="testi-card_content">
                                        <h3 class="testi-card_name">{{ $testimonial->name }}</h3>
                                        <div class="testi-card_review">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div><button data-slider-prev="#testiSlider1" class="slider-arrow style2 slider-prev"><i
                        class="far fa-arrow-left"></i></button> <button data-slider-next="#testiSlider1"
                    class="slider-arrow style2 slider-next"><i class="far fa-arrow-right"></i></button>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
@endpush
