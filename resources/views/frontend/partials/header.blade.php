<div class="sidemenu-wrapper sidemenu-info">
    <div class="sidemenu-content"><button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
        <div class="widget">
            <div class="th-widget-about">
                <div class="about-logo"><a href="{{ route('home') }}"><img src="{{ asset('logo.svg') }}" alt="ElNasr"></a>
                </div>
                <p class="about-text">{{ $settings['website_about_' . str_replace('-', '_', strtolower($lang))] }}</p>
                <div class="th-social style2">
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
        <div class="widget">
            <h3 class="widget_title">{{ __('labels.contact_information') }}</h3>
            <div class="th-widget-about">
                <h4 class="footer-info-title">{{ __('labels.location') }}</h4>
                <p class="footer-info"><i class="fas fa-map-marker-alt"></i>{{ $settings['website_address'] }}</p>
                <h4 class="footer-info-title">{{ __('labels.phone') }}</h4>
                <p class="footer-info"><i class="fa-sharp fa-solid fa-phone"></i><a class="text-inherit"
                        href="tel:{{ $settings['website_phone'] }}">{{ $settings['website_phone'] }}</a></p>
                <h4 class="footer-info-title">{{ __('labels.email') }}</h4>
                <p class="footer-info"><i class="fas fa-envelope"></i><a class="text-inherit"
                        href="mailto:{{ $settings['website_email'] }}">{{ $settings['website_email'] }}</a></p>
            </div>
        </div>
    </div>
</div>
<div class="th-menu-wrapper">
    <div class="th-menu-area text-center"><button class="th-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo"><a href="{{ route('home') }}"><img src="{{ asset('logo.svg') }}" alt="ElNasr"></a>
        </div>
        <div class="th-mobile-menu">
            <ul>
                <li><a href="{{ route('home') }}">{{ __('labels.home') }}</a></li>
                <li><a href="{{ route('about.index') }}">{{ __('labels.about_us') }}</a></li>
                <li><a href="{{ route('projects.index') }}">{{ __('labels.projects') }}</a></li>
                <li><a href="{{ route('contacts.index') }}">{{ __('labels.contacts') }}</a></li>

                <li class="menu-item-has-children"><a href="#">{{ __('labels.language') }}</a>
                    <ul class="sub-menu">
                        @if (App::getLocale() != 'en')
                            <li><a
                                    href="{{ route('change-language', ['lang' => 'en']) }}">{{ __('labels.language', [], 'en') }}</a>
                            </li>
                        @endif
                        @if (App::getLocale() != 'ar')
                            <li><a
                                    href="{{ route('change-language', ['lang' => 'ar']) }}">{{ __('labels.language', [], 'ar') }}</a>
                            </li>
                        @endif
                        @if (App::getLocale() != 'zh-CN')
                            <li><a
                                    href="{{ route('change-language', ['lang' => 'zh-CN']) }}">{{ __('labels.language', [], 'zh-CN') }}</a>
                            </li>
                        @endif

                    </ul>
                </li>

            </ul>
        </div>
    </div>
</div>
<header class="th-header header-layout1">
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center">
                <div class="col-auto d-none d-md-block">
                    <div class="header-links">
                        <ul>
                            <li><i class="fa-regular fa-phone"></i><a
                                    href="tel:{{ $settings['website_phone'] }}">{{ $settings['website_phone'] }}</a>
                            </li>
                            <li class="d-none d-xl-inline-block"><i class="fa-sharp fa-regular fa-location-dot"></i>
                                <span>{{ $settings['website_address'] }}</span>
                            </li>
                            <li><i class="fa-regular fa-envelope"></i><a
                                    href="mailto:{{ $settings['website_email'] }}">{{ $settings['website_email'] }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="social-links"><span class="social-title">{{ __('labels.contact_information') }}:</span>
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
    </div>
    <div class="sticky-wrapper">
        <div class="container">
            <div class="menu-area style2">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo"><a href="{{ route('home') }}"><img src="{{ asset('logo.svg') }}"
                                    alt="ElNasr"></a>
                        </div>
                    </div>
                    <div class="col-auto m-xl-auto">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <ul>
                                <li><a href="{{ route('home') }}">{{ __('labels.home') }}</a></li>
                                <li><a href="{{ route('about.index') }}">{{ __('labels.about_us') }}</a></li>
                                <li><a href="{{ route('projects.index') }}">{{ __('labels.projects') }}</a></li>
                            </ul>
                        </nav><button type="button" class="th-menu-toggle d-block d-lg-none"><i
                                class="far fa-bars"></i></button>
                    </div>
                    <div class="col-auto d-none d-xl-block">
                        <div class="header-button">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li><a class="@if (App::getLocale() == 'en') active @endif"
                                            href="{{ route('change-language', ['lang' => 'en']) }}">{{ __('labels.language', [], 'en') }}</a>
                                    </li>
                                    <li><a class="@if (App::getLocale() == 'ar') active @endif"
                                            href="{{ route('change-language', ['lang' => 'ar']) }}">{{ __('labels.language', [], 'ar') }}</a>
                                    </li>
                                    <li><a class="@if (App::getLocale() == 'zh-CN') active @endif"
                                            href="{{ route('change-language', ['lang' => 'zh-CN']) }}">{{ __('labels.language', [], 'zh-CN') }}</a>
                                    </li>
                                </ul>
                                {{-- <ul>
                                    <li class="menu-item-has-children">
                                        <button type="button"
                                            class="icon-btn">{{ __('labels.language_short') }}</button>
                                        <ul class="sub-menu">
                                            @if (App::getLocale() != 'en')
                                                <li>
                                                </li>
                                            @endif
                                            @if (App::getLocale() != 'ar')
                                                <li>
                                                </li>
                                            @endif
                                            @if (App::getLocale() != 'zh-CN')
                                                <li><a
                                                        href="{{ route('change-language', ['lang' => 'zh-CN']) }}">{{ __('labels.language', [], 'zh-CN') }}</a>
                                                </li>
                                            @endif
                                        </ul>
                                    </li>
                                </ul> --}}
                            </nav>
                            {{-- <a href="#" class="icon-btn sideMenuToggler d-none d-lg-block">
                                <i class="fa-solid fa-grid"></i>
                            </a> --}}
                            <a href="{{ route('contacts.index') }}"
                                class="th-btn th-icon">{{ __('labels.contacts') }}<i
                                    class="fa-regular fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
