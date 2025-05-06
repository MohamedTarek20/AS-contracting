@extends('dashboard.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-lg-flex">
                        <div>
                            <h6 class="text-white text-capitalize ps-3">Update Testimonial</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form role="form" class="text-start"
                        action="{{ route('admin.testimonials.update', ['testimonial' => $data->id]) }}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="row mt-3">
                            <div class="col-12">
                                <div
                                    class="input-group input-group-outline my-3 @if (old('name') ?? $data->name) is-filled @endif">
                                    <label for="exampleFormControlInput1" class="form-label">Name *</label>
                                    <input class="form-control @error('name') is-invalid @enderror" type="text"
                                        onfocus="focused(this)" name="name" onfocusout="defocused(this)" required
                                        value="{{ old('name') ?? $data->name }}">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div
                                    class="input-group input-group-outline my-3 @if (old('description') ?? $data->description) is-filled @endif">
                                    <label for="exampleFormControlInput1" class="form-label">Description (EN) *</label>
                                    <textarea class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" rows="3" name="description"
                                        required>{{ old('description') ?? $data->description }}</textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
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
                            <div class="button-row d-flex mt-4">
                                <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="submit"
                                    title="Next">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
