@extends('frontend.app')

@push('styles')
@endpush

@section('title', __('labels.home'))

@section('content')

    <div class="th-hero-wrapper hero-3" id="hero">
        <div class="swiper th-slider hero-slider-3" id="heroSlide3" data-slider-options='{"effect":"fade"}'>
            <div class="swiper-wrapper">
                @foreach ($sliders as $slider)
                    <div class="swiper-slide">
                        <div class="hero-inner">
                            <div class="th-hero-bg" data-bg-src="{{ $slider->image_full_path }}"><img
                                    src="{{ asset('frontend/assets/img/hero/hero_overlay_3.png') }}" alt="Hero Image">
                                <div class="hero-shape-1" data-ani="slideinleft" data-ani-delay="0.7s"><img
                                        src="{{ asset('frontend/assets/img/hero/hero_overlay_3_1.png') }}" alt="">
                                </div>
                            </div>
                            <div class="container">
                                <div class="hero-style3">
                                    <h1 class="hero-title" data-ani="slideinleft"
                                        data-ani-delay="0.4s">{{ $slider->title }}
                                        <span class="hero-text">{{ $slider->description }}</span>
                                    </h1>

                                    {{-- <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">{{ $slider->title }}
                                    </h1>
                                    <p class="hero-text" data-ani="slideinup" data-ani-delay="0.5s">
                                        {{ $slider->description }}</p> --}}
                                    <p class="hero-text slideinup" data-ani="slideinup" data-ani-delay="0.5s"
                                       style="animation-delay: 0.5s;"> {{ $slider->description }}</p>
                                    @if ($slider->url)
                                        <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s">
                                            <a href="{{ $slider->url }}"
                                               class="th-btn style1 th-style th-icon">{{ __('labels.see_more') }}<i
                                                    class="fa-regular fa-arrow-right ms-2"></i></a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button data-slider-prev="#heroSlide3" class="slider-arrow slider-prev"><i
                    class="far fa-arrow-left"></i></button>
            <button data-slider-next="#heroSlide3"
                    class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
        </div>
    </div>


    <section class="service-area overflow-hidden space">
        <div class="container th-container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-xxl-6 offset-xxl-3">
                    <div class="title-area text-center"><span
                            class="sub-title">{{ __('labels.latest_projects') }}</span>
                        <h2 class="sec-title">{{ __('labels.latest_projects_subtitle') }}</h2>
                    </div>
                </div>
            </div>
            <div class="slider-area">
                <div class="swiper has-shadow project-slider" id="projectSlider1"
                     data-slider-options='{"centeredSlides":true,"loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"},"1400":{"slidesPerView":"3"}}}'>
                    <div class="row">
                        @foreach ($projects as $project)
                            <div class="swiper-slide swiper-slide-active col-12 col-md-6 col-xl-4">
                                <div class="project-card">
                                    <div class="project-img"><img
                                            src="{{ $project->defaultImage->attachment_full_path }}"
                                            alt="project image">
                                    </div>
                                    <div class="project-content">
                                        <h3 class="box-title">
                                            <a
                                                href="{{ route('projects.show', $project->id) }}">{{ $project->title }}</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="slider-pagination"></div>
                </div>
                <button data-slider-prev="#projectSlider1" class="slider-arrow slider-prev"><i
                        class="far fa-arrow-left"></i></button>
                <button data-slider-next="#projectSlider1"
                        class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
            </div>
            <div class="btn_see_more"><a
                    href="{{ route('projects.index') }}" class="th-btn style1 th-icon">{{ __('labels.see_more') }}</a>
            </div>
        </div>
        <div class="shape-mockup d-none d-xl-block" data-top="0%" data-left="0%"><img
                src="{{ asset('frontend/assets/img/shape/shape_1.png') }}" alt="shape"></div>
        <div class="shape-mockup movingX d-none d-xxl-block" data-top="20%" data-right="0%"><img
                src="{{ asset('frontend/assets/img/shape/shape_2.png') }}" alt="shape"></div>
    </section>

    <section class="consultation-sec bg-title position-relative overflow-hidden"
             data-bg-src="{{ asset('frontend/assets/img/bg/shape_bg_2.png') }}">
        <div class="consultation-thumb">
            <div class="shape_1"></div>
            <div class="shape_2"></div>
            <img src="{{ asset('frontend/assets/img/normal/consultation_img.jpg') }}"
                 alt="">
        </div>
        <div class="container">
            <div class="row align-items-end flex-row-reverse">
                <div class="col-md-8">
                    <div class="consultation-title-area">
                        <div class="title-area mb-30"><span
                                class="sub-title style1 mb-20">{{ __('labels.contacts') }}</span>
                            <h2 class="sec-title text-white">{{ __('labels.contacts_title') }}</h2>
                        </div>
                        <div class=""><a href="{{ route('contacts.index') }}"
                                         class="th-btn style1 th-icon">{{ __('labels.contacts') }}<i
                                    class="fa-regular fa-arrow-right ms-2"></i></a></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="consultation-image movingX"><img
                            src="{{ asset('frontend/assets/img/normal/image.png') }}"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="counter-sec  bg-smoke"
         data-bg-src="{{ asset('frontend/assets/img/bg/shape_bg_3.png') }}">
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
                </div>
                <button data-slider-prev="#testiSlider1" class="slider-arrow style2 slider-prev"><i
                        class="far fa-arrow-left"></i></button>
                <button data-slider-next="#testiSlider1"
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
                            <h3 class="sec-title text-white">{{ __('labels.partners_title') }}</h3>
                            <p class="brand-text text-white">{{ __('labels.partners_subtitle') }}</p>

                            <div class="icon-box">
                                <button data-slider-prev="#brandSlider1"
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
                                                                                             src="{{ $partner->image_full_path }}"
                                                                                             alt="Brand Logo"> <img
                                                class="gray" src="{{ $partner->image_full_path }}"
                                                alt="Brand Logo"></a>
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
                        <form class="contact-form2" action="{{ route('messages.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                           name="name" id="name"
                                           placeholder="{{ __('labels.custom_input', ['attribute' => __('labels.name')]) }}">
                                    <i class="fal fa-user"></i>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                           name="email" id="email"
                                           placeholder="{{ __('labels.custom_input', ['attribute' => __('labels.email')]) }}">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="tel" class="form-control @error('phone') is-invalid @enderror"
                                           name="phone" id="phone"
                                           placeholder="{{ __('labels.custom_input', ['attribute' => __('labels.phone')]) }}">
                                    <i class="fal fa-phone"></i>
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
                                              class="form-control @error('message') is-invalid @enderror"
                                              placeholder="{{ __('labels.custom_input', ['attribute' => __('labels.message')]) }}"></textarea>
                                    <i class="fal fa-pencil"></i>
                                </div>
                                <div class="form-btn col-12">
                                    <button class="th-btn">{{ __('labels.submit') }}<i
                                            class="fa-regular fa-arrow-right ms-2"></i></button>
                                </div>
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
