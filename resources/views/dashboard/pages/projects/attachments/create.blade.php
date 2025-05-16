@extends('dashboard.app')

@section('title', 'Create Attachment')

@push('styles')
    <style>
        #video {
            display: none;
        }
    </style>
@endpush

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-lg-flex">
                        <div>
                            <h6 class="text-white text-capitalize ps-3">Create Attachment</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form role="form" class="text-start"
                        action="{{ route('admin.projects.attachments.store', ['project' => request()->project]) }}"
                        method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="exampleFormControlInput1" class="form-label">Type *</label>
                                <div class="input-group input-group-outline">
                                    <select class="form-control @error('type') is-invalid @enderror" name="type"
                                        onfocus="focused(this)" onfocusout="defocused(this)" required>
                                        <option value="image" @selected(old('type') == 'image')>Image</option>
                                        <option value="video" @selected(old('type') == 'video')>Video</option>
                                    </select>
                                    @error('type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12" id="image">
                                <label for="exampleFormControlInput1" class="form-label">Image *</label>
                                <div class="input-group input-group-outline">
                                    <input class="form-control @error('image') is-invalid @enderror" type="file"
                                        onfocus="focused(this)" onfocusout="defocused(this)" name="image"
                                        accept="image/*">
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12" id="video">
                                <label for="exampleFormControlInput1" class="form-label">Video *</label>
                                <div class="input-group input-group-outline">
                                    <input class="form-control @error('video') is-invalid @enderror" type="file"
                                        onfocus="focused(this)" onfocusout="defocused(this)" name="video"
                                        accept="video/*">
                                    @error('video')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
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
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const typeSelect = document.querySelector('select[name="type"]');
            const imageDiv = document.getElementById('image');
            const videoDiv = document.getElementById('video');

            typeSelect.addEventListener('change', function() {
                if (this.value === 'image') {
                    imageDiv.style.display = 'block';
                    videoDiv.style.display = 'none';
                } else if (this.value === 'video') {
                    videoDiv.style.display = 'block';
                    imageDiv.style.display = 'none';
                }
            });
        });
    </script>
@endpush
