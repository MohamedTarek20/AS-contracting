.@extends('dashboard.app')

@section('title', 'Update Attachment')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-lg-flex">
                        <div>
                            <h6 class="text-white text-capitalize ps-3">Update Attachment</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form role="form" class="text-start"
                        action="{{ route('admin.projects.attachments.update', ['project' => request()->project, 'attachment' => $data->id]) }}"
                        method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf

                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="exampleFormControlInput1" class="form-label">Type *</label>
                                <div class="input-group input-group-outline">
                                    <select class="form-control @error('type') is-invalid @enderror" onfocus="focused(this)"
                                        onfocusout="defocused(this)" disabled>
                                        <option value="image" @selected(old('type') ?? $data->type == 'image')>Image</option>
                                        <option value="video" @selected(old('type') ?? $data->type == 'video')>Video</option>
                                    </select>
                                    @error('type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            @if ($data->type == 'image')

                                <div class="col-12" id="image">
                                    <div class="row">
                                        <label for="exampleFormControlInput1" class="form-label">Image *</label>
                                        <div class="col-11">
                                            <div class="input-group input-group-outline">
                                                <input class="form-control @error('image') is-invalid @enderror"
                                                    type="file" onfocus="focused(this)" onfocusout="defocused(this)"
                                                    name="image" accept="image/*">
                                                @error('image')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-1 align-content-end">
                                            @if ($data->attachment)
                                                <img src="{{ asset($data->attachment_full_path) }}" class="loaded-image"
                                                    alt="" style="width: 50px; height: 50px">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="col-12" id="video">
                                    <div class="row">
                                        <label for="exampleFormControlInput1" class="form-label">Video *</label>
                                        <div class="col-11">
                                            <div class="input-group input-group-outline">
                                                <input class="form-control @error('video') is-invalid @enderror"
                                                    type="file" onfocus="focused(this)" onfocusout="defocused(this)"
                                                    name="video" accept="video/*">
                                                @error('video')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-1 align-content-end">
                                            @if ($data->attachment)
                                                <video src="{{ $data->attachment_full_path }}" class="loaded-image"
                                                    alt="" style="width: 50px; height: 50px"></video>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endif
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
