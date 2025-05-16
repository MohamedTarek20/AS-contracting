@extends('dashboard.app')

@section('title', 'Attachments')

@push('styles')
@endpush

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-lg-flex">
                        <div>
                            <h6 class="text-white text-capitalize ps-3">({{ $project->title }}) Attachments</h6>
                        </div>
                        <div class="ms-auto my-auto mt-lg-0 mt-4 me-3">
                            <div class="ms-auto my-auto">
                                <a href="{{ route('admin.projects.attachments.create', ['project' => $project->id]) }}"
                                    class="btn bg-gradient-dark btn-sm mb-0">+
                                    New Attachment</a>
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
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                        Type</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                        Attachment</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $index => $attachment)
                                    <tr>
                                        <td class="align-middle text-center text-sm">
                                            <span class="text-secondary text-xs font-weight-bold">{{ $index + 1 }}</span>

                                        </td>
                                        <td class="align-middle text-center">
                                            {{ $attachment->type }}
                                        </td>
                                        <td class="align-middle text-center">
                                            @if ($attachment->attachment)
                                                @if ($attachment->type == 'image')
                                                    <img src="{{ $attachment->attachment_full_path }}"
                                                        class="avatar border-radius-lg" width="50px" height="50px">
                                                @else
                                                    <video src="{{ $attachment->attachment_full_path }}" width="50px"></video>
                                                @endif
                                            @endif
                                        </td>
                                        <td class="align-middle text-center">
                                            <a class="btn btn-link text-dark px-3 mb-0"
                                                href="{{ route('admin.projects.attachments.edit', ['project' => $project->id, 'attachment' => $attachment->id]) }}"><i
                                                    class="material-symbols-rounded text-sm me-2">edit</i>Edit</a>
                                            <form style="display: inline" method="post"
                                                action="{{ route('admin.projects.attachments.destroy', ['project' => $project->id, 'attachment' => $attachment->id]) }}">
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
