@extends('frontend.app')

@push('styles')
@endpush

@section('title', __('labels.our_projects'))

@section('content')
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('frontend/assets/img/bg/breadcumb-bg.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">{{__('labels.our_projects')}}</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{route('home')}}">{{__('labels.home')}}</a></li>
                    <li>{{__('labels.our_projects')}}</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="space">
        <div class="container">
            <div class="title-area text-center mb-40"><span class="sub-title">{{__('labels.our_projects')}}</span>
                <h2 class="sec-title">{{__('labels.our_projects_subtitle')}}</h2>
            </div>
            <div class="row gallery-row filter-active">
                @foreach ($projects as $project)
                    <div class="col-md-6 col-xl-auto filter-item cat1">
                        <div class="project-box">
                            <div class="project-box-img"><img
                                    src="{{$project->defaultImage->attachment_full_path}}" style="width:400px!important; height:400px!important;" alt="project image">
                            </div>
                            <div class="project-box-content">
                                <h3 class="box-title"><a href="{{route('projects.show', $project->id)}}">{{$project->title}}</a></h3><a
                                    href="{{ asset('frontend/assets/img/project/project_3_1.jpg') }}"
                                    class="gallery-btn popup-image"><i class="fa-regular fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- <div class="th-pagination text-center mt-80 mb-0">
                <ul>
                    <li><a href="blog.html"><i class="fa-regular fa-arrow-left"></i></a></li>
                    <li><a href="blog.html">1</a></li>
                    <li><a href="blog.html">2</a></li>
                    <li><a href="blog.html"><i class="fa-regular fa-arrow-right"></i></a></li>
                </ul>
            </div> --}}
        </div>
    </section>
@endsection
@push('scripts')
@endpush
