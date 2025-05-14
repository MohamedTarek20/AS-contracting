@extends('dashboard.app')
@push('styles')
    <style>
        .upload-area {
            transition: background-color 0.3s ease;
            align-content: center;
            cursor: pointer;
            text-align: center;
            min-height: 300px;
            width: 100%;
            position: relative;
            padding: 0 !important;
            border-radius: 10px;
            border: 3px dashed #dbdeea;
        }

        #imageInput {
            display: none;
        }

        .image-preview-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            padding: 1%;
        }

        .image-preview-container-images {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .image-box {
            width: 150px;
            height: 150px;
            border-radius: 20px;
            overflow: hidden;
            position: relative;
            border: 2px solid #ccc;
            background: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .image-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        #addMoreBtn {
            display: none
        }

        .remove-btn {
            position: absolute;
            top: 5px;
            right: 5px;
            background-color: rgba(255, 0, 0, 0.8);
            color: white;
            border: none;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            font-size: 16px;
            cursor: pointer;
        }

        .add-more-btn {
            width: 100%;
            padding: 10px 20px;
            background-color: #0055ff;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
        }

        .add-more-btn:hover {
            background-color: #003ccc;
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
                            <h6 class="text-white text-capitalize ps-3">Create Project</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form role="form" class="text-start" action="{{ route('admin.projects.store') }}" method="post"
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
                                    <label for="exampleFormControlInput1" class="form-label">Description (AR) *</label>
                                    <div class="input-group input-group-outline my-3">
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
                                        <input class="form-control @error('title_en') is-invalid @enderror" type="text" onfocus="focused(this)"
                                            onfocusout="defocused(this)" name="title_en" required>
                                        @error('title_en')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div>
                                    <label for="exampleFormControlInput1" class="form-label">Description (EN) *</label>
                                    <div class="input-group input-group-outline my-3">
                                        <textarea class="form-control @error('description_en') is-invalid @enderror" onfocus="focused(this)"
                                            onfocusout="defocused(this)" rows="3" name="description_en" required></textarea>
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
                                        <input class="form-control @error('title_zh_cn') is-invalid @enderror" type="text" onfocus="focused(this)"
                                            onfocusout="defocused(this)" name="title_zh_cn" required>
                                        @error('title_zh_cn')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div>
                                    <label for="exampleFormControlInput1" class="form-label">Description (ZH CN)
                                        *</label>
                                    <div class="input-group input-group-outline my-3">
                                        <textarea class="form-control  @error('description_zh_cn') is-invalid @enderror" onfocus="focused(this)"
                                            onfocusout="defocused(this)" rows="3" name="description_zh_cn" required></textarea>
                                        @error('description_zh_cn')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="upload-area" id="uploadArea">
                                    <label id="uploadLabel">
                                        Upload Images
                                    </label>
                                    <div class="image-preview-container">
                                        <div class="image-preview-container-images" id="imageContainer">
                                        </div>
                                        <button class="add-more-btn" id="addMoreBtn" type="button">+</button>
                                    </div>
                                </div>
                                <input type="file" id="imageInput" name="images[]" multiple accept="image/*">
                            </div>
                            <div class="col-12 my-3">
                                <label for="exampleFormControlInput1" class="form-label">Upload Videos</label>
                                <div class="input-group input-group-outline">
                                    <input class="form-control @error('videos.*') is-invalid @enderror" type="file" name="videos[]" accept="video/*" multiple>
                                    @error('videos.*')
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
        const imageInput = document.getElementById('imageInput');
        const uploadLabel = document.getElementById('uploadLabel');
        const uploadArea = document.getElementById('uploadArea');
        const imageContainer = document.getElementById('imageContainer');
        const addMoreBtn = document.getElementById('addMoreBtn');

        // Open file input when upload area or add-more button is clicked
        uploadArea.addEventListener('click', () => {
            if (imageInput.files.length == 0) {
                imageInput.click();
            }
        });
        addMoreBtn.addEventListener('click', () => imageInput.click());

        imageInput.addEventListener('change', () => {
            uploadLabel.style.display = 'none';
            addMoreBtn.style.display = 'block';
            handleFiles(imageInput.files);
        });

        function handleFiles(files) {
            [...files].forEach(file => {
                if (!file.type.startsWith('image/')) return;

                const reader = new FileReader();
                reader.onload = e => {
                    const imgBox = document.createElement('div');
                    imgBox.classList.add('image-box');

                    const img = document.createElement('img');
                    img.src = e.target.result;

                    const removeBtn = document.createElement('button');
                    removeBtn.textContent = '×';
                    removeBtn.className = 'remove-btn';
                    removeBtn.addEventListener('click', () => {
                        imgBox.remove();
                    });

                    imgBox.appendChild(img);
                    imgBox.appendChild(removeBtn);
                    imageContainer.appendChild(imgBox);
                };
                reader.readAsDataURL(file);
            });
        }
    </script>
@endpush
