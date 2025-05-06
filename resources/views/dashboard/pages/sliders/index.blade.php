@extends('dashboard.app')
@push('styles')
@endpush
@section('content')
    {{-- <div class="content-wrapper" style="min-height: 1360.44px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Banners</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Banners</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
            <button type="button" onclick="location.href='{{ route('admin.sliders.create') }}'" class="btn btn-primary">New
                Slider</button>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">

                                <h3 class="card-title">Banners</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6"></div>
                                        <div class="col-sm-12 col-md-6"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="datatable"
                                                class="table table-bordered table-hover dataTable dtr-inline" role="grid"
                                                aria-describedby="example2_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting_asc" tabindex="0" aria-controls="example2"
                                                            rowspan="1" colspan="1" aria-sort="ascending"
                                                            aria-label="Rendering engine: activate to sort column descending">
                                                            #
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="example2"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Browser: activate to sort column ascending">Title
                                                            (AR)
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="example2"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Browser: activate to sort column ascending">Title
                                                            (EN)
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="example2"
                                                            rowspan="1" colspan="1"
                                                            aria-label="CSS grade: activate to sort column ascending">Url
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="example2"
                                                            rowspan="1" colspan="1"
                                                            aria-label="CSS grade: activate to sort column ascending">Image
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="example2"
                                                            rowspan="1" colspan="1"
                                                            aria-label="CSS grade: activate to sort column ascending">Action
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($data as $index => $slider)
                                                        <tr role="row">
                                                            <td>{{ $index + 1 }}</td>
                                                            <td>{{ $slider->title_ar }}</td>
                                                            <td>{{ $slider->title_en }}</td>
                                                            <td>{{ $slider->url }}</td>
                                                            <td>
                                                                @if ($slider->image)
                                                                    <img src="{{ $slider->image_full_path }}"
                                                                        class="loaded-image" alt=""
                                                                        style="width: 50px; height: 50px">
                                                                @endif
                                                            </td>
                                                            <td><a title="update" class="btn btn-info"
                                                                    href="{{ route('admin.sliders.edit', ['banner' => $slider->id]) }}">
                                                                    Edit
                                                                </a>
                                                                <form style="display: inline" method="post"
                                                                    action="{{ route('admin.sliders.destroy', ['banner' => $slider->id]) }}">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button class="btn btn-danger" onclick="if (!confirm('Are you sure you want to delete?')) { return false }">Delete</button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div> --}}

    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-lg-flex">
                        <div>
                            <h6 class="text-white text-capitalize ps-3">Sliders</h6>
                        </div>
                        <div class="ms-auto my-auto mt-lg-0 mt-4 me-3">
                            <div class="ms-auto my-auto">
                                <a href="{{ route('admin.sliders.create') }}" class="btn bg-gradient-dark btn-sm mb-0">+
                                    New Slider</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                        #
                                    </th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center">
                                        Title (AR)</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center">
                                        Title (EN)</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center">
                                        Title (ZH)</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                        Url</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                        Image</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $index => $slider)
                                    <tr>
                                        <td class="align-middle text-center text-sm">
                                            <span class="text-secondary text-xs font-weight-bold">{{ $index + 1 }}</span>

                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span
                                                class="text-secondary text-xs font-weight-bold">{{ $slider->title_ar }}</span>

                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span
                                                class="text-secondary text-xs font-weight-bold">{{ $slider->title_en }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span
                                                class="text-secondary text-xs font-weight-bold">{{ $slider->title_zh_cn }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">{{ $slider->url }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            @if ($slider->image)
                                                <img src="{{ $slider->image_full_path }}" class="avatar border-radius-lg"
                                                    width="50px" height="50px">
                                            @endif
                                        </td>
                                        <td class="align-middle text-center">
                                            <a class="btn btn-link text-dark px-3 mb-0"
                                                href="{{ route('admin.sliders.edit', ['slider' => $slider->id]) }}"><i
                                                    class="material-symbols-rounded text-sm me-2">edit</i>Edit</a>
                                            <form style="display: inline" method="post"
                                                action="{{ route('admin.sliders.destroy', ['slider' => $slider->id]) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-link text-danger text-gradient px-3 mb-0"
                                                    href="javascript:;"
                                                    onclick="if (!confirm('Are you sure you want to delete?')) { return false }"><i
                                                        class="material-symbols-rounded text-sm me-2">delete</i>Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
@endpush
