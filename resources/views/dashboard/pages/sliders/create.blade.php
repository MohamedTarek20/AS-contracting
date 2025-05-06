@extends('dashboard.app')
@push('styles')
    {{-- <link href="{{ asset('dashboard/assets/css/dropzone.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/assets/css/dropzone.css') }}" rel="stylesheet"> --}}
@endpush
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-lg-flex">
                        <div>
                            <h6 class="text-white text-capitalize ps-3">Create Slider</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form role="form" class="text-start" action="{{ route('admin.sliders.store') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-3">
                            <div class="col-12 col-sm-6 col-md-4">
                                <div>
                                    <div class="input-group input-group-outline my-3">
                                        <label for="exampleFormControlInput1" class="form-label">Title (AR) *</label>
                                        <input class="form-control @error('title_ar') is-invalid @enderror" type="text"
                                            onfocus="focused(this)" name="title_ar" onfocusout="defocused(this)" required>
                                        @error('title_ar')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div>
                                    <div class="input-group input-group-outline my-3">
                                        <label for="exampleFormControlInput1" class="form-label">Description (AR) *</label>
                                        <textarea class="form-control @error('description_ar') is-invalid @enderror" onfocus="focused(this)"
                                            onfocusout="defocused(this)" rows="3" name="description_ar" required></textarea>
                                        @error('description_ar')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div>
                                    <div class="input-group input-group-outline my-3">
                                        <label for="exampleFormControlInput1" class="form-label">Title (EN) *</label>
                                        <input class="form-control" type="text" onfocus="focused(this)"
                                            onfocusout="defocused(this)" name="title_en" required>
                                        @error('title_en')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div>
                                    <div class="input-group input-group-outline my-3">
                                        <label for="exampleFormControlInput1" class="form-label">Description (EN) *</label>
                                        <textarea class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" rows="3" name="description_en"
                                            required></textarea>
                                        @error('description_en')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div>
                                    <div class="input-group input-group-outline my-3">
                                        <label for="exampleFormControlInput1" class="form-label">Title (ZH CN) *</label>
                                        <input class="form-control" type="text" onfocus="focused(this)"
                                            onfocusout="defocused(this)" name="title_zh_cn" required>
                                        @error('title_zh_cn')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div>
                                    <div class="input-group input-group-outline my-3">
                                        <label for="exampleFormControlInput1" class="form-label">Description (ZH CN)
                                            *</label>
                                        <textarea class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" rows="3"
                                            name="description_zh_cn" required></textarea>
                                        @error('description_zh_cn')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                {{-- <div class="dropzone overflow-visible p-0" id="formDropzone">
                                    <label class="form-label text-muted opacity-75 fw-medium" for="formImage">Image
                                        *</label>
                                    <div class="dropzone-drag-area form-control" id="previews">
                                        <div class="dz-message text-muted opacity-50" data-dz-message>
                                            <span>Drag file here to upload</span>
                                        </div>
                                        <div class="d-none" id="dzPreviewContainer">
                                            <div class="dz-preview dz-file-preview">
                                                <div class="dz-photo">
                                                    <img class="dz-thumbnail" data-dz-thumbnail>
                                                </div>
                                                <button class="dz-delete border-0 p-0" type="button" data-dz-remove>
                                                    <i class="material-symbols-rounded text-lg text-white">close</i>
                                                </button>
                                            </div>
                                        </div>
                                        <input type="text" name="image" id="dropZoneInput" hidden required>
                                    </div>
                                    <div class="invalid-feedback fw-bold">Please upload an image.</div>
                                </div> --}}
                                <label for="exampleFormControlInput1" class="form-label">Image *</label>
                                <div class="input-group input-group-outline">
                                    <input class="form-control @error('image') is-invalid @enderror" type="file"
                                        onfocus="focused(this)" onfocusout="defocused(this)" name="image"
                                        accept=".jpg,.jpeg,.png,.bmp,.gif,.svg,.webp">
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div>
                                    <div class="input-group input-group-outline my-3">
                                        <label for="exampleFormControlInput1" class="form-label">Url</label>
                                        <input class="form-control" type="text" onfocus="focused(this)"
                                            onfocusout="defocused(this)" name="url">
                                        @error('url')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="button-row d-flex mt-4">
                            <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="submit"
                                title="Next">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    {{-- <script src="{{ asset('dashboard/assets/js/plugins/dropzone.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/js/dropzone.js') }}"></script> --}}
@endpush
