@extends('dashboard.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-lg-flex">
                        <div>
                            <h6 class="text-white text-capitalize ps-3">Create Testimonial</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form role="form" class="text-start" action="{{ route('admin.testimonials.store') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-3">
                            <div class="col-12">
                                <div>
                                    <div class="input-group input-group-outline my-3">
                                        <label for="exampleFormControlInput1" class="form-label">Name *</label>
                                        <input class="form-control @error('name') is-invalid @enderror" type="text"
                                            onfocus="focused(this)" name="name" onfocusout="defocused(this)" required>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div>
                                    <div class="input-group input-group-outline my-3">
                                        <label for="exampleFormControlInput1" class="form-label">Description *</label>
                                        <textarea class="form-control @error('description') is-invalid @enderror" onfocus="focused(this)"
                                            onfocusout="defocused(this)" rows="3" name="description" required></textarea>
                                        @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
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
