@extends('frontend.app')

@push('styles')
@endpush

@section('title', __('labels.contacts'))

@section('content')
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('frontend/assets/img/bg/breadcumb-bg.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">{{ __('labels.contacts') }}</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">{{ __('labels.home') }}</a></li>
                    <li>{{ __('labels.contacts') }}</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="space">
        <div class="container">
            <div class="row gy-40 gx-30">
                <div class="col-xl-4 col-lg-6">
                    <div class="title-area mb-30">
                        <h3 class="sec-title">{{ __('labels.contact_information') }}</h3>
                    </div>
                    <div class="contact-info-wrap">
                        <div class="contact-info">
                            <div class="contact-info_icon"><i class="fa-light fa-location-dot"></i></div>
                            <div class="media-body">
                                <p class="contact-info_label">{{ __('labels.location') }}</p>
                                @foreach ($contacts['location'] ?? [] as $location)
                                    <a href="https://www.google.com/maps"
                                        class="contact-info_link">{{ $location->value }}</a>
                                @endforeach
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info_icon"><i class="fa-light fa-phone"></i></div>
                            <div class="media-body">
                                <p class="contact-info_label">{{ __('labels.phone') }}</p>
                                @foreach ($contacts['phone'] ?? [] as $key => $phone)
                                    <a href="tel:{{ $phone->value }}" class="contact-info_link">
                                        {{ $phone->value }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info_icon"><i class="fa-light fa-envelope"></i></div>
                            <div class="media-body">
                                <p class="contact-info_label">{{ __('labels.email') }}</p>
                                @foreach ($contacts['email'] ?? [] as $key => $email)
                                    <a href="mailto:{{ $email->value }}" class="contact-info_link">
                                        {{ $email->value }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-6">
                    <div class="contact-map"> {!! $map !!} </div>
                </div>
            </div>
        </div>
    </div>

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
                                        name="name" id="name" placeholder="Your Name"> <i class="fal fa-user"></i>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" id="email" placeholder="{{ __('labels.email') }}"> <i
                                        class="fal fa-envelope"></i>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="tel" class="form-control @error('phone') is-invalid @enderror"
                                        name="phone" id="phone" placeholder="Phone Number"> <i
                                        class="fal fa-phone"></i>
                                </div>
                                <div class="form-group col-12">
                                    <textarea name="message" id="message" cols="30" rows="3"
                                        class="form-control @error('message') is-invalid @enderror" placeholder="Your Message"></textarea> <i class="fal fa-pencil"></i>
                                </div>
                                <div class="form-btn col-12"><button class="th-btn th-radius2">Send Message<i
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
