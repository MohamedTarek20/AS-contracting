<footer class="footer-wrapper footer-layout1" data-bg-src="{{ asset('frontend/assets/img/bg/footer_bg_1.png') }}">
    <div class="widget-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 col-xl-3">
                    <div class="widget footer-widget">
                        <div class="th-widget-about">
                            <div class="about-logo"><a href="{{ route('home') }}"><img src="{{ asset('logo.svg') }}"
                                        alt="ElNasr"></a></div>
                            <p class="about-text">
                                {{ $settings['website_about_' . str_replace('-', '_', strtolower($lang))] }}</p>
                            <div class="th-social">
                                @if ($settings['website_facebook'])
                                    <a href="{{ $settings['website_facebook'] }}"><i class="fab fa-facebook-f"></i></a>
                                @endif
                                @if ($settings['website_twitter'])
                                    <a href="{{ $settings['website_twitter'] }}"><i class="fab fa-twitter"></i></a>
                                @endif
                                @if ($settings['website_linkedin'])
                                    <a href="{{ $settings['website_linkedin'] }}"><i class="fab fa-linkedin-in"></i></a>
                                @endif
                                @if ($settings['website_facebook'])
                                    <a href="{{ $settings['website_instagram'] }}"><i class="fab fa-instagram"></i></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">{{ __('labels.explore') }}</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li><a href="{{route('home')}}">{{__('labels.home')}}</a></li>
                                <li><a href="{{ route('about.index') }}">{{__('labels.about_us')}}</a></li>
                                <li><a href="{{ route('projects.index') }}">{{__('labels.projects')}}</a></li>
                                <li><a href="{{ route('contacts.index') }}">{{__('labels.contacts')}}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">{{ __('labels.contact_information') }}</h3>
                        <div class="th-widget-about">
                            <h4 class="footer-info-title">{{ __('labels.location') }}</h4>
                            <p class="footer-info"><i
                                    class="fas fa-map-marker-alt"></i>{{ $settings['website_address'] }}</p>
                            <h4 class="footer-info-title">{{ __('labels.phone') }}</h4>
                            <p class="footer-info"><i class="fa-sharp fa-solid fa-phone"></i><a class="text-inherit"
                                    href="tel:{{ $settings['website_phone'] }}">{{ $settings['website_phone'] }}</a>
                            </p>
                            <h4 class="footer-info-title">{{ __('labels.email') }}</h4>
                            <p class="footer-info"><i class="fas fa-envelope"></i><a class="text-inherit"
                                    href="mailto:{{ $settings['website_email'] }}">{{ $settings['website_email'] }}</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="widget footer-widget">
                        <h4 class="widget_title">{{ __('labels.qrcode') }}</h4>
                        <div class="newsletter-widget">
                            <p class="title md-10"><img src="{{ asset('qrcode.png') }}" width="200px" height="200px"
                                    alt=""></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-12" style="display: flex;justify-content: center;">
                    <p class="copyright-text">Copyright 2024 <a href="{{ route('home') }}">ElNasr</a>. All Rights
                        Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="scroll-top"><svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
            style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
        </path>
    </svg>
</div>
