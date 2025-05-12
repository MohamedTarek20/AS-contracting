@extends('dashboard.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-lg-flex">
                        <div>
                            <h6 class="text-white text-capitalize ps-3">Update Setting</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form role="form" class="text-start"
                        action="{{ route('admin.settings.update', ['setting' => $data->id]) }}" method="post"
                        enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="row mt-3">
                            <div class="col-12">
                                <div
                                    class="input-group input-group-outline my-3 @if (old('identifier') ?? $data->identifier) is-filled @endif">
                                    <label for="exampleFormControlInput1" class="form-label">identifier *</label>
                                    <input class="form-control @error('identifier') is-invalid @enderror" type="text"
                                        onfocus="focused(this)" name="identifier" onfocusout="defocused(this)" required
                                        value="{{ old('identifier') ?? $data->identifier }}" disabled>
                                    @error('identifier')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div
                                    class="input-group input-group-outline my-3 @if (old('value') ?? $data->value) is-filled @endif">
                                    <label for="exampleFormControlInput1" class="form-label">Value *</label>
                                    <input class="form-control @error('value') is-invalid @enderror" type="text"
                                        onfocus="focused(this)" name="value" onfocusout="defocused(this)" required
                                        value="{{ old('value') ?? $data->value }}">
                                    @error('value')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
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
