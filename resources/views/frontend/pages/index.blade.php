@extends('frontend.app')

@push('styles')
@endpush

@section('title', __('labels.home'))

@section('content')
    {{-- <!-- start of hero -->
    <section class="hero hero-style-2">
        <div class="hero-slider">
            @foreach ($sliders as $banner)
                <div class="slide">
                    <img src="{{ $banner->image_full_path }}" alt class="slider-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col col-lg-5 slide-caption">
                                <div class="slide-title">
                                    <h2>
                                        @foreach (explode(' ', $banner->title) as $key => $word)
                                            @if ($key % 2)
                                                <span>{{ $word }}</span>
                                            @else
                                                {{ $word }}
                                            @endif
                                        @endforeach
                                    </h2>
                                </div>
                                @if ($banner->url)
                                    <div class="btns">
                                        <a href="{{ $banner->url }}" class="btn theme-btn">{{__('labels.shop_now')}} <i
                                                class="fa fa-angle-double-right"></i></a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!-- end of hero slider -->

    @foreach ($categories as $key => $category)
        <!-- product-area-start -->
        <section class="product-area section-padding @if (!($key % 2)) bg-white @endif">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section-title">
                            <h2>
                                <img src="{{ $category->image_full_path }}" alt="" width="75" height="75">
                                @foreach (explode(' ', $category->name) as $key => $word)
                                    @if ($key % 2)
                                        <span>{{ $word }}</span>
                                    @else
                                        {{ $word }}
                                    @endif
                                @endforeach
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="row align-items-center">
                        @foreach ($category->products as $product)
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                @include('frontend.pages.partials._product')
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="btns d-flex justify-content-center">
                <a href="{{ route('categories.show', $category->id) }}" class="btn theme-btn">{{__('labels.see_more')}} </a>
            </div>
        </section>
        <!-- product-area-end -->
    @endforeach

    <!-- testimonial-area-start -->
    @if ($testimonials->count() > 0)
        <section class="testimonial-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section-title">
                            <h2>
                                @foreach (explode(' ', __('labels.client_testimonial')) as $key => $word)
                                    @if ($key % 2)
                                        <span>{{ $word }}</span>
                                    @else
                                        {{ $word }}
                                    @endif
                                @endforeach
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="testimonial-wrap">
                    <div class="testimonial-active">
                        @foreach ($testimonials as $index => $testimonial)
                            <div class="testimonial-item">
                                <div class="testimonial-img">
                                    <img src="{{ $testimonial->image_full_path }}" alt="">
                                    <div class="t-quote">
                                        <i class="fi flaticon-left-quote"></i>
                                    </div>
                                </div>
                                <div class="testimonial-content">
                                    <p>{{ $testimonial->description }}</p>
                                    <div class="testimonial-author">
                                        <h3>{{ $testimonial->name }}</h3>
                                    </div>
                                    <div class="t-content-quote">
                                        <i class="fi flaticon-left-quote"></i>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-- testimonial-area-end --> --}}

    <div class="th-hero-wrapper hero-1" id="hero">
        <div class="swiper th-slider hero-slider-1" id="heroSlide1" data-slider-options='{"effect":"fade"}'>
            <div class="swiper-wrapper">

                @foreach ($sliders as $slider)
                    <div class="swiper-slide">
                        <div class="hero-inner">
                            <div class="th-hero-bg" data-bg-src="{{ $slider->image_full_path }}">
                                <div class="hero-shape-1" data-ani="slideinleft" data-ani-delay="0.7s"><img
                                        src="{{ asset('frontend/assets/img/hero/hero_shape_1.png') }}" alt=""></div>
                                <div class="hero-shape-2" data-ani="slideinleft" data-ani-delay="0.8s"><img
                                        src="{{ asset('frontend/assets/img/hero/hero_shape_2.png') }}" alt=""></div>
                                <div class="hero-shape-3" data-ani="slideinup" data-ani-delay="0.9s"><img
                                        src="{{ asset('frontend/assets/img/hero/hero_shape_3.png') }}" alt=""></div>
                            </div>
                            <div class="container">
                                <div class="hero-style1">
                                    <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">{{ $slider->title }}
                                    </h1>
                                    <p class="hero-text" data-ani="slideinup" data-ani-delay="0.5s">
                                        {{ $slider->description }}</p>
                                    @if ($slider->url)
                                        <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s">
                                            <a href="{{ $slider->url }}" class="th-btn th-icon">Discover More<i
                                                    class="fa-regular fa-arrow-right ms-2"></i></a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div><button data-slider-prev="#heroSlide1" class="slider-arrow slider-prev"><i
                    class="far fa-arrow-left"></i></button> <button data-slider-next="#heroSlide1"
                class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
        </div>
    </div>

    <section class="service-area overflow-hidden space" id="service-sec" data-bg-src="assets/img/bg/service_bg_1.jpg">
        <div class="container">
            <div class="row">
                <div class="title-area mb-0 text-center"><span class="sub-title">Our Services</span>
                    <h2 class="sec-title">The Best Service For You</h2>
                </div>
            </div>
            <div class="nav nav-tabs service-tabs" id="nav-tab" role="tablist"><button class="nav-link th-btn active"
                    id="nav-step1-tab" data-bs-toggle="tab" data-bs-target="#nav-step1" type="button"><img
                        src="assets/img/icon/ser_icon_1.svg" alt="">Commercial</button> <button
                    class="nav-link th-btn" id="nav-step2-tab" data-bs-toggle="tab" data-bs-target="#nav-step2"
                    type="button"><img src="assets/img/icon/ser_icon_2.svg" alt="">Residential</button> <button
                    class="nav-link th-btn" id="nav-step3-tab" data-bs-toggle="tab" data-bs-target="#nav-step3"
                    type="button"><img src="assets/img/icon/ser_icon_3.svg" alt="">Industrial</button></div>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade active show" id="nav-step1" role="tabpanel">
                    <div class="slider-area">
                        <div class="swiper th-slider has-shadow" id="serviceSlider1"
                            data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="service-box" data-bg-src="assets/img/bg/shape_bg_1.png">
                                        <div class="service-content">
                                            <div class="service-box_icon"><img src="assets/img/icon/service_1_1.svg"
                                                    alt="icon"></div>
                                            <div class="service-box_number">01</div>
                                        </div>
                                        <h3 class="box-title"><a href="service-details.html">Building Construction</a>
                                        </h3>
                                        <p class="service-box_text">Certainly, I can provide some general details about
                                            the construction industry. If you have a specific aspect.</p><a class="line-btn"
                                            href="service-details.html">Read More <i
                                                class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-box" data-bg-src="assets/img/bg/shape_bg_1.png">
                                        <div class="service-content">
                                            <div class="service-box_icon"><img src="assets/img/icon/service_1_2.svg"
                                                    alt="icon"></div>
                                            <div class="service-box_number">02</div>
                                        </div>
                                        <h3 class="box-title"><a href="service-details.html">Interior Designing</a>
                                        </h3>
                                        <p class="service-box_text">Construction services also encompass renovating and
                                            existing structures to update them change layout.</p><a class="line-btn"
                                            href="service-details.html">Read More <i
                                                class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-box" data-bg-src="assets/img/bg/shape_bg_1.png">
                                        <div class="service-content">
                                            <div class="service-box_icon"><img src="assets/img/icon/service_1_3.svg"
                                                    alt="icon"></div>
                                            <div class="service-box_number">03</div>
                                        </div>
                                        <h3 class="box-title"><a href="service-details.html">General Contracting</a>
                                        </h3>
                                        <p class="service-box_text">This includes building homes, apartments, and
                                            housing units. It can involve single-family homes and more.</p><a
                                            class="line-btn" href="service-details.html">Read More <i
                                                class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-box" data-bg-src="assets/img/bg/shape_bg_1.png">
                                        <div class="service-content">
                                            <div class="service-box_icon"><img src="assets/img/icon/service_1_4.svg"
                                                    alt="icon"></div>
                                            <div class="service-box_number">04</div>
                                        </div>
                                        <h3 class="box-title"><a href="service-details.html">Architecture Design</a>
                                        </h3>
                                        <p class="service-box_text">Architectural wonders await firms offer project Our
                                            management services. Along with design architecture firms</p><a
                                            class="line-btn" href="service-details.html">Read More <i
                                                class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-box" data-bg-src="assets/img/bg/shape_bg_1.png">
                                        <div class="service-content">
                                            <div class="service-box_icon"><img src="assets/img/icon/service_1_5.svg"
                                                    alt="icon"></div>
                                            <div class="service-box_number">05</div>
                                        </div>
                                        <h3 class="box-title"><a href="service-details.html">House Renovation</a></h3>
                                        <p class="service-box_text">Where ideas take shape architecture often offer
                                            project in Our management services used in and around a home</p><a
                                            class="line-btn" href="service-details.html">Read More <i
                                                class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-box" data-bg-src="assets/img/bg/shape_bg_1.png">
                                        <div class="service-content">
                                            <div class="service-box_icon"><img src="assets/img/icon/service_1_6.svg"
                                                    alt="icon"></div>
                                            <div class="service-box_number">06</div>
                                        </div>
                                        <h3 class="box-title"><a href="service-details.html">Material Supply</a></h3>
                                        <p class="service-box_text">Material supply can refer to the process of
                                            providing and delivering various materials needed for a project</p><a
                                            class="line-btn" href="service-details.html">Read More <i
                                                class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-box" data-bg-src="assets/img/bg/shape_bg_1.png">
                                        <div class="service-content">
                                            <div class="service-box_icon"><img src="assets/img/icon/service_1_1.svg"
                                                    alt="icon"></div>
                                            <div class="service-box_number">07</div>
                                        </div>
                                        <h3 class="box-title"><a href="service-details.html">General Contracting</a>
                                        </h3>
                                        <p class="service-box_text">This includes building homes, apartments, and
                                            housing units. It can involve single-family homes and more.</p><a
                                            class="line-btn" href="service-details.html">Read More <i
                                                class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-box" data-bg-src="assets/img/bg/shape_bg_1.png">
                                        <div class="service-content">
                                            <div class="service-box_icon"><img src="assets/img/icon/service_1_2.svg"
                                                    alt="icon"></div>
                                            <div class="service-box_number">08</div>
                                        </div>
                                        <h3 class="box-title"><a href="service-details.html">Architecture Design</a>
                                        </h3>
                                        <p class="service-box_text">Architectural wonders await firms offer project Our
                                            management services. Along with design architecture firms</p><a
                                            class="line-btn" href="service-details.html">Read More <i
                                                class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><button data-slider-prev="#serviceSlider1" class="slider-arrow slider-prev"><i
                                class="far fa-arrow-left"></i></button> <button data-slider-next="#serviceSlider1"
                            class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-step2" role="tabpanel">
                    <div class="slider-area">
                        <div class="swiper th-slider has-shadow" id="serviceSlider2"
                            data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="service-box" data-bg-src="assets/img/bg/shape_bg_1.png">
                                        <div class="service-content">
                                            <div class="service-box_icon"><img src="assets/img/icon/service_1_1.svg"
                                                    alt="icon"></div>
                                            <div class="service-box_number">01</div>
                                        </div>
                                        <h3 class="box-title"><a href="service-details.html">General Contracting</a>
                                        </h3>
                                        <p class="service-box_text">Material supply can refer to the process of
                                            providing and delivering various materials needed for a project</p><a
                                            class="line-btn" href="service-details.html">Read More <i
                                                class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-box" data-bg-src="assets/img/bg/shape_bg_1.png">
                                        <div class="service-content">
                                            <div class="service-box_icon"><img src="assets/img/icon/service_1_2.svg"
                                                    alt="icon"></div>
                                            <div class="service-box_number">02</div>
                                        </div>
                                        <h3 class="box-title"><a href="service-details.html">Architecture Design</a>
                                        </h3>
                                        <p class="service-box_text">This includes building homes, apartments, and
                                            housing units. It can involve single-family homes and more.</p><a
                                            class="line-btn" href="service-details.html">Read More <i
                                                class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-box" data-bg-src="assets/img/bg/shape_bg_1.png">
                                        <div class="service-content">
                                            <div class="service-box_icon"><img src="assets/img/icon/service_1_3.svg"
                                                    alt="icon"></div>
                                            <div class="service-box_number">03</div>
                                        </div>
                                        <h3 class="box-title"><a href="service-details.html">House Renovation</a></h3>
                                        <p class="service-box_text">Architectural wonders await firms offer project Our
                                            management services. Along with design architecture firms</p><a
                                            class="line-btn" href="service-details.html">Read More <i
                                                class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-box" data-bg-src="assets/img/bg/shape_bg_1.png">
                                        <div class="service-content">
                                            <div class="service-box_icon"><img src="assets/img/icon/service_1_4.svg"
                                                    alt="icon"></div>
                                            <div class="service-box_number">04</div>
                                        </div>
                                        <h3 class="box-title"><a href="service-details.html">Material Supply</a></h3>
                                        <p class="service-box_text">Where ideas take shape architecture often offer
                                            project in Our management services used in and around a home</p><a
                                            class="line-btn" href="service-details.html">Read More <i
                                                class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-box" data-bg-src="assets/img/bg/shape_bg_1.png">
                                        <div class="service-content">
                                            <div class="service-box_icon"><img src="assets/img/icon/service_1_1.svg"
                                                    alt="icon"></div>
                                            <div class="service-box_number">05</div>
                                        </div>
                                        <h3 class="box-title"><a href="service-details.html">Building Construction</a>
                                        </h3>
                                        <p class="service-box_text">Material supply can refer to the process of
                                            providing and delivering various materials needed for a project</p><a
                                            class="line-btn" href="service-details.html">Read More <i
                                                class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-box" data-bg-src="assets/img/bg/shape_bg_1.png">
                                        <div class="service-content">
                                            <div class="service-box_icon"><img src="assets/img/icon/service_1_2.svg"
                                                    alt="icon"></div>
                                            <div class="service-box_number">06</div>
                                        </div>
                                        <h3 class="box-title"><a href="service-details.html">Interior Designing</a>
                                        </h3>
                                        <p class="service-box_text">Certainly, I can provide some general details about
                                            the construction industry. If you have a specific aspect.</p><a
                                            class="line-btn" href="service-details.html">Read More <i
                                                class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-box" data-bg-src="assets/img/bg/shape_bg_1.png">
                                        <div class="service-content">
                                            <div class="service-box_icon"><img src="assets/img/icon/service_1_3.svg"
                                                    alt="icon"></div>
                                            <div class="service-box_number">07</div>
                                        </div>
                                        <h3 class="box-title"><a href="service-details.html">General Contracting</a>
                                        </h3>
                                        <p class="service-box_text">Construction services also encompass renovating and
                                            existing structures to update them change layout.</p><a class="line-btn"
                                            href="service-details.html">Read More <i
                                                class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-box" data-bg-src="assets/img/bg/shape_bg_1.png">
                                        <div class="service-content">
                                            <div class="service-box_icon"><img src="assets/img/icon/service_1_4.svg"
                                                    alt="icon"></div>
                                            <div class="service-box_number">08</div>
                                        </div>
                                        <h3 class="box-title"><a href="service-details.html">Architecture Design</a>
                                        </h3>
                                        <p class="service-box_text">This includes building homes, apartments, and
                                            housing units. It can involve single-family homes and more.</p><a
                                            class="line-btn" href="service-details.html">Read More <i
                                                class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><button data-slider-prev="#serviceSlider2" class="slider-arrow slider-prev"><i
                                class="far fa-arrow-left"></i></button> <button data-slider-next="#serviceSlider2"
                            class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-step3" role="tabpanel">
                    <div class="slider-area">
                        <div class="swiper th-slider has-shadow" id="serviceSlider3"
                            data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="service-box" data-bg-src="assets/img/bg/shape_bg_1.png">
                                        <div class="service-content">
                                            <div class="service-box_icon"><img src="assets/img/icon/service_1_1.svg"
                                                    alt="icon"></div>
                                            <div class="service-box_number">01</div>
                                        </div>
                                        <h3 class="box-title"><a href="service-details.html">Building Construction</a>
                                        </h3>
                                        <p class="service-box_text">Certainly, I can provide some general details about
                                            the construction industry. If you have a specific aspect.</p><a
                                            class="line-btn" href="service-details.html">Read More <i
                                                class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-box" data-bg-src="assets/img/bg/shape_bg_1.png">
                                        <div class="service-content">
                                            <div class="service-box_icon"><img src="assets/img/icon/service_1_2.svg"
                                                    alt="icon"></div>
                                            <div class="service-box_number">02</div>
                                        </div>
                                        <h3 class="box-title"><a href="service-details.html">Interior Designing</a>
                                        </h3>
                                        <p class="service-box_text">Construction services also encompass renovating and
                                            existing structures to update them change layout.</p><a class="line-btn"
                                            href="service-details.html">Read More <i
                                                class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-box" data-bg-src="assets/img/bg/shape_bg_1.png">
                                        <div class="service-content">
                                            <div class="service-box_icon"><img src="assets/img/icon/service_1_3.svg"
                                                    alt="icon"></div>
                                            <div class="service-box_number">03</div>
                                        </div>
                                        <h3 class="box-title"><a href="service-details.html">General Contracting</a>
                                        </h3>
                                        <p class="service-box_text">This includes building homes, apartments, and
                                            housing units. It can involve single-family homes and more.</p><a
                                            class="line-btn" href="service-details.html">Read More <i
                                                class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-box" data-bg-src="assets/img/bg/shape_bg_1.png">
                                        <div class="service-content">
                                            <div class="service-box_icon"><img src="assets/img/icon/service_1_4.svg"
                                                    alt="icon"></div>
                                            <div class="service-box_number">04</div>
                                        </div>
                                        <h3 class="box-title"><a href="service-details.html">Architecture Design</a>
                                        </h3>
                                        <p class="service-box_text">Architectural wonders await firms offer project Our
                                            management services. Along with design architecture firms</p><a
                                            class="line-btn" href="service-details.html">Read More <i
                                                class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-box" data-bg-src="assets/img/bg/shape_bg_1.png">
                                        <div class="service-content">
                                            <div class="service-box_icon"><img src="assets/img/icon/service_1_5.svg"
                                                    alt="icon"></div>
                                            <div class="service-box_number">05</div>
                                        </div>
                                        <h3 class="box-title"><a href="service-details.html">House Renovation</a></h3>
                                        <p class="service-box_text">Where ideas take shape architecture often offer
                                            project in Our management services used in and around a home</p><a
                                            class="line-btn" href="service-details.html">Read More <i
                                                class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-box" data-bg-src="assets/img/bg/shape_bg_1.png">
                                        <div class="service-content">
                                            <div class="service-box_icon"><img src="assets/img/icon/service_1_6.svg"
                                                    alt="icon"></div>
                                            <div class="service-box_number">06</div>
                                        </div>
                                        <h3 class="box-title"><a href="service-details.html">Material Supply</a></h3>
                                        <p class="service-box_text">Material supply can refer to the process of
                                            providing and delivering various materials needed for a project</p><a
                                            class="line-btn" href="service-details.html">Read More <i
                                                class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-box" data-bg-src="assets/img/bg/shape_bg_1.png">
                                        <div class="service-content">
                                            <div class="service-box_icon"><img src="assets/img/icon/service_1_1.svg"
                                                    alt="icon"></div>
                                            <div class="service-box_number">07</div>
                                        </div>
                                        <h3 class="box-title"><a href="service-details.html">General Contracting</a>
                                        </h3>
                                        <p class="service-box_text">This includes building homes, apartments, and
                                            housing units. It can involve single-family homes and more.</p><a
                                            class="line-btn" href="service-details.html">Read More <i
                                                class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-box" data-bg-src="assets/img/bg/shape_bg_1.png">
                                        <div class="service-content">
                                            <div class="service-box_icon"><img src="assets/img/icon/service_1_2.svg"
                                                    alt="icon"></div>
                                            <div class="service-box_number">08</div>
                                        </div>
                                        <h3 class="box-title"><a href="service-details.html">Architecture Design</a>
                                        </h3>
                                        <p class="service-box_text">Architectural wonders await firms offer project Our
                                            management services. Along with design architecture firms</p><a
                                            class="line-btn" href="service-details.html">Read More <i
                                                class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><button data-slider-prev="#serviceSlider3" class="slider-arrow slider-prev"><i
                                class="far fa-arrow-left"></i></button> <button data-slider-next="#serviceSlider3"
                            class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="consultation-sec bg-title position-relative overflow-hidden"
        data-bg-src="assets/img/bg/shape_bg_2.png">
        <div class="consultation-thumb">
            <div class="shape_1"></div>
            <div class="shape_2"></div><img src="assets/img/normal/consultation_img.jpg" alt="">
        </div>
        <div class="container">
            <div class="row align-items-end flex-row-reverse">
                <div class="col-md-8">
                    <div class="consultation-title-area">
                        <div class="title-area mb-30"><span class="sub-title style1 mb-20">Get Consultation</span>
                            <h2 class="sec-title text-white">Get A Free Consultation Contact Us <span
                                    class="text-theme">!</span></h2>
                        </div>
                        <div class=""><a href="contact.html" class="th-btn style1 th-icon">Contact Us <i
                                    class="fa-regular fa-arrow-right ms-2"></i></a></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="consultation-image movingX"><img src="assets/img/normal/image.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="counter-sec">
        <div class="container">
            <div class="counter-area bg-theme" data-pos-for="#consultation-sec" data-sec-pos="top-half">
                <div class="row">
                    <div class="col-sm-6 col-xl-3 counter-card-wrap style2">
                        <div class="counter-card style2">
                            <div class="media-body">
                                <h2 class="box-number text-white"><span class="counter-number">2</span>k<span
                                        class="text">+</span></h2>
                                <p class="box-text text-white">Project Completed</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 counter-card-wrap style2">
                        <div class="counter-card style2">
                            <div class="media-body">
                                <h2 class="box-number text-white"><span class="counter-number">1.5</span>k<span
                                        class="text">+</span></h2>
                                <p class="box-text text-white">Customer Satisfied</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 counter-card-wrap style2">
                        <div class="counter-card style2">
                            <div class="media-body">
                                <h2 class="box-number text-white"><span class="counter-number">360</span><span
                                        class="text">+</span></h2>
                                <p class="box-text text-white">Expert Team Members</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 counter-card-wrap style2">
                        <div class="counter-card style2">
                            <div class="media-body">
                                <h2 class="box-number text-white"><span class="counter-number">85</span><span
                                        class="text">+</span></h2>
                                <p class="box-text text-white">Awards Winner</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="project-area overflow-hidden space" data-pos-for="#counter-sec" data-sec-pos="top-half">
        <div class="container th-container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-xxl-6 offset-xxl-3">
                    <div class="title-area text-center"><span class="sub-title">Latest Projects</span>
                        <h2 class="sec-title">Crafting Quality Structures, Creating Lasting Impressions.</h2>
                    </div>
                </div>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow project-slider" id="projectSlider1"
                    data-slider-options='{"centeredSlides":true,"loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"},"1400":{"slidesPerView":"3"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="project-card">
                                <div class="project-img"><img src="assets/img/project/project_1_1.jpg"
                                        alt="project image"></div>
                                <div class="project-content">
                                    <p class="project-subtitle">Contemporary</p>
                                    <h3 class="box-title"><a href="project-details.html">Contemporary Villa</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="project-card">
                                <div class="project-img"><img src="assets/img/project/project_1_2.jpg"
                                        alt="project image"></div>
                                <div class="project-content">
                                    <p class="project-subtitle">Industrial</p>
                                    <h3 class="box-title"><a href="project-details.html">Industrial Design</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="project-card">
                                <div class="project-img"><img src="assets/img/project/project_1_3.jpg"
                                        alt="project image"></div>
                                <div class="project-content">
                                    <p class="project-subtitle">Architect</p>
                                    <h3 class="box-title"><a href="project-details.html">Architect Design</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="project-card">
                                <div class="project-img"><img src="assets/img/project/project_1_1.jpg"
                                        alt="project image"></div>
                                <div class="project-content">
                                    <p class="project-subtitle">Residential</p>
                                    <h3 class="box-title"><a href="project-details.html">Residential Design</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="project-card">
                                <div class="project-img"><img src="assets/img/project/project_1_2.jpg"
                                        alt="project image"></div>
                                <div class="project-content">
                                    <p class="project-subtitle">Contemporary</p>
                                    <h3 class="box-title"><a href="project-details.html">Contemporary Villa</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-pagination"></div>
                </div><button data-slider-prev="#projectSlider1" class="slider-arrow slider-prev"><i
                        class="far fa-arrow-left"></i></button> <button data-slider-next="#projectSlider1"
                    class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
            </div>
        </div>
        <div class="shape-mockup d-none d-xl-block" data-top="15%" data-left="0%"><img
                src="assets/img/shape/shape_1.png" alt="shape"></div>
        <div class="shape-mockup movingX d-none d-xxl-block" data-top="20%" data-right="0%"><img
                src="assets/img/shape/shape_2.png" alt="shape"></div>
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

    <section class="cta-sec bg-title">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="brand-title-area">
                        <div class="title-area mb-0">
                            <h3 class="sec-title text-white">Our Trusted Partners</h3>
                            <p class="brand-text text-white">Good communication is crucial in the construction
                                industry. A construction company maintains.</p>
                                
                            <div class="icon-box"><button data-slider-prev="#brandSlider1"
                                    class="slider-arrow default"><i class="far fa-arrow-left"></i></button>
                                <button data-slider-next="#brandSlider1" class="slider-arrow default"><i
                                        class="far fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="swiper th-slider brandSlider1" id="brandSlider1"
                        data-slider-options='{"grid":{"rows":2,"fill":"row"},"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"},"1400":{"slidesPerView":"3"}}}'>
                        <div class="swiper-wrapper">
                            @foreach ($partners as $partner)
                                <div class="swiper-slide">
                                    <div class="brand-box"><a href="javascript:void(0)"><img class="original"
                                                src="{{$partner->image_full_path}}" alt="Brand Logo"> <img
                                                class="gray" src="{{$partner->image_full_path}}" alt="Brand Logo"></a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="space overflow-hidden">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-6">
                    <div class="">
                        <div class="title-area mb-30"><span
                                class="sub-title style1">{{ __('labels.contact_information') }}</span>
                            <h2 class="sec-title">{{ __('labels.contact_information_subtitle') }}</h2>
                        </div>

                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        <form class="contact-form2"action="{{ route('messages.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" id="name" placeholder="Your Name"> <i
                                        class="fal fa-user"></i>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" id="email" placeholder="Email Address"> <i
                                        class="fal fa-envelope"></i>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="tel" class="form-control @error('phone') is-invalid @enderror"
                                        name="phone" id="phone" placeholder="Phone Number"> <i
                                        class="fal fa-phone"></i>
                                </div>
                                {{-- <div class="form-group col-md-6">
                                    <select name="subject" id="subject"
                                        class="form-select nice-select">
                                        <option value="" disabled="disabled" selected="selected" hidden>
                                            Select Subjects
                                        </option>
                                        <option value="Construction">Construction</option>
                                        <option value="Real Estate">Real Estate</option>
                                        <option value="Industry">Industry</option>
                                        <option value="Architect">Architect</option>
                                    </select></div> --}}
                                <div class="form-group col-12">
                                    <textarea name="message" id="message" cols="30" rows="3"
                                        class="form-control @error('message') is-invalid @enderror" placeholder="Your Message"></textarea> <i class="fal fa-pencil"></i>
                                </div>
                                <div class="form-btn col-12"><button class="th-btn">Send Message<i
                                            class="fa-regular fa-arrow-right ms-2"></i></button></div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-image"><img src="{{ asset('frontend/assets/img/normal/contact-image.jpg') }}"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
@endpush
