@extends('dashboard.app')
@section('content')
    {{-- <div class="content-wrapper" style="min-height: 1403.62px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Update Setting</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Update Setting</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-name">Update Setting</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('admin.settings.update', [$data->id]) }}" method="POST"
                                enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Identifier</label>
                                        <input type="text" class="form-control" name="identifier"
                                            value="{{ old('identifier') ?? $data->identifier }}" disabled>
                                    </div>
                                    @if ($data->identifier != 'image')
                                        <div class="form-group">
                                            <label>Value</label>
                                            <input type="text" class="form-control @error('value') is-invalid @enderror"
                                                name="value" value="{{ old('value') ?? $data->value }}">
                                            @error('value')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    @else
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-11">
                                                    <label>Value</label>
                                                    <input type="file"
                                                        class="form-control @error('value') is-invalid @enderror"
                                                        name="value" value="{{ old('value') }}">
                                                    @error('value')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-sm-1 align-content-end">
                                                    @if ($data->value)
                                                        <img src="{{ asset($data->image_full_path) }}"
                                                            class="loaded-image" alt="" style="width: 50px; height: 50px">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div> --}}

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
