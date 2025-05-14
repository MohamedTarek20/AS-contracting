@extends('dashboard.app')
@push('styles')
@endpush
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-lg-flex">
                        <div>
                            <h6 class="text-white text-capitalize ps-3">Update Service</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form role="form" class="text-start"
                        action="{{ route('admin.services.update', ['service' => $data->id]) }}" method="post"
                        enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="row mt-3">
                            <div class="col-12 col-sm-6 col-md-4">
                                <div>
                                    <div
                                        class="input-group input-group-outline my-3 @if (old('title_ar') ?? $data->title_ar) is-filled @endif">
                                        <label for="exampleFormControlInput1" class="form-label">Title (AR) *</label>
                                        <input class="form-control @error('title_ar') is-invalid @enderror" type="text"
                                            onfocus="focused(this)" name="title_ar" onfocusout="defocused(this)" required
                                            value="{{ old('title_ar') ?? $data->title_ar }}">
                                        @error('title_ar')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div>
                                    <div
                                        class="input-group input-group-outline my-3 @if (old('description_ar') ?? $data->description_ar) is-filled @endif">
                                        <label for="exampleFormControlInput1" class="form-label">Description (AR) *</label>
                                        <textarea class="form-control @error('description_ar') is-invalid @enderror" onfocus="focused(this)"
                                            onfocusout="defocused(this)" rows="3" name="description_ar" required>{{ old('description_ar') ?? $data->description_ar }}</textarea>
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
                                    <div
                                        class="input-group input-group-outline my-3 @if (old('title_en') ?? $data->title_en) is-filled @endif">
                                        <label for="exampleFormControlInput1" class="form-label">Title (EN) *</label>
                                        <input class="form-control" type="text" onfocus="focused(this)"
                                            onfocusout="defocused(this)" name="title_en" required
                                            value="{{ old('title_en') ?? $data->title_en }}">
                                        @error('title_en')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class="input-group input-group-outline my-3 @if (old('description_en') ?? $data->description_en) is-filled @endif">
                                        <label for="exampleFormControlInput1" class="form-label">Description (EN) *</label>
                                        <textarea class="form-control @error('description_en') is-invalid @enderror" onfocus="focused(this)" onfocusout="defocused(this)" rows="3" name="description_en"
                                            required>{{ old('description_en') ?? $data->description_en }}</textarea>
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
                                    <div
                                        class="input-group input-group-outline my-3 @if (old('title_zh_cn') ?? $data->title_zh_cn) is-filled @endif">
                                        <label for="exampleFormControlInput1" class="form-label">Title (ZH CN) *</label>
                                        <input class="form-control" type="text" onfocus="focused(this)"
                                            onfocusout="defocused(this)" name="title_zh_cn" required
                                            value="{{ old('title_zh_cn') ?? $data->title_zh_cn }}">
                                        @error('title_zh_cn')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div>
                                    <div
                                        class="input-group input-group-outline my-3 @if (old('description_zh_cn') ?? $data->description_zh_cn) is-filled @endif">
                                        <label for="exampleFormControlInput1" class="form-label">Description (ZH CN)
                                            *</label>
                                        <textarea class="form-control @error('description_zh_cn') is-invalid @enderror" onfocus="focused(this)" onfocusout="defocused(this)" rows="3"
                                            name="description_zh_cn" required>{{ old('description_zh_cn') ?? $data->description_zh_cn }}</textarea>
                                        @error('description_zh_cn')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <label for="exampleFormControlInput1" class="form-label">Image *</label>
                                    <div class="col-11">
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
                                    <div class="col-1 align-content-end">
                                        @if ($data->image)
                                            <img src="{{ asset($data->image_full_path) }}" class="loaded-image"
                                                alt="" style="width: 50px; height: 50px">
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="button-row d-flex mt-4">
                            <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="submit"
                                title="Next">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
@endpush
