@extends('frontend.app')

@push('styles')
@endpush

@section('title', $project->title)

@section('content')
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('frontend/assets/img/bg/breadcumb-bg.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">{{ $project->title }}</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">{{ __('labels.home') }}</a></li>
                    <li>{{ $project->title }}</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="space overflow-hidden">
        <div class="container">
            <div class="project-details">
                <div class="page-img">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($project->images as $key => $image)
                                <div class="carousel-item @if (!$key) active @endif">
                                    <img src="{{ $image->attachment_full_path }}" style="width:1230px;height:600px;"
                                        alt="Project Image {{ $key + 1 }}">
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" style="background-color: transparent; border: 0px;"
                            type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" style="background-color: transparent; border: 0px;"
                            type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                    <div class="page-content style2 mb-40">
                        <h3 class="page-title">{{ $project->title }}</h3>
                        <p class="mb-4 pb-2">{{ $project->description }}</p>
                        @if ($project->videos()->count())
                            <div class="row gy-30">
                                @foreach ($project->videos as $key => $video)
                                    <div class="col-lg-12">
                                        <div class="page-img mb-0">
                                            <h6 for="">{{ $project->title . '(' . ($key + 1) . ')' }}</h6>
                                            <video controls>
                                                <source src="{{ $video->attachment_full_path }}" type="video/mp4">
                                            </video>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar-area style2 pt-0">
                        <div class="widget widget_offer background-image" data-overlay="title" data-opacity="9"
                            style="background-image: url({{ asset('frontend/assets/img/bg/widget_bg_1.jpg') }});">
                            <div class="offer-banner">
                                <div class="offer"><span class="sub-title">{{ __('labels.contacts') }}</span>
                                    <h6 class="box-title">{{ __('labels.contacts_title') }}</h6><a
                                        href="{{ route('contacts.index') }}" class="th-btn style1">{{ __('labels.contacts') }}</a>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
@endpush
