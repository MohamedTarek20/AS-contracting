Dropzone.autoDiscover = false;

document.addEventListener("DOMContentLoaded", function () {
    const previewTemplate = document.getElementById('dzPreviewContainer').innerHTML;
    const formDropzone = document.getElementById('formDropzone');
    const dropZoneInput = document.getElementById('dropZoneInput');
    const successMessage = document.getElementById('successMessage');
    const dropArea = document.querySelector('.dropzone-drag-area');

    const existingImageUrl = dropZoneInput?.dataset.previewUrl || ''; // Load image from data-preview-url attribute

    const myDropzone = new Dropzone(formDropzone, {
        previewTemplate: previewTemplate,
        url: '/form-submit',
        addRemoveLinks: true,
        autoProcessQueue: false,
        uploadMultiple: false,
        parallelUploads: 1,
        maxFiles: 1,
        acceptedFiles: '.jpeg, .jpg, .png, .gif',
        thumbnailWidth: 900,
        thumbnailHeight: 600,
        previewsContainer: "#previews",
        timeout: 0,
        init: function () {
            this.on('addedfile', function (file) {
                // Skip base64 conversion for mock files (like existing image)
                if (!file || file.isMock) return;

                // Remove invalid style
                if (dropArea) {
                    dropArea.classList.remove('is-invalid');
                    const invalidFeedback = dropArea.nextElementSibling;
                    if (invalidFeedback && invalidFeedback.classList.contains('invalid-feedback')) {
                        invalidFeedback.style.display = 'none';
                    }
                }

                // Convert real file to base64
                const reader = new FileReader();
                reader.onload = function (e) {
                    if (dropZoneInput) {
                        dropZoneInput.value = e.target.result;
                    }
                };
                reader.readAsDataURL(file);
            });


            this.on('success', function () {
                formDropzone.style.transition = "opacity 0.6s";
                formDropzone.style.opacity = 0;
                setTimeout(() => {
                    formDropzone.style.display = "none";
                    if (successMessage) {
                        successMessage.classList.remove('d-none');
                    }
                }, 600);
            });

            if (existingImageUrl) {
                const mockFile = {
                    name: "existing-image.jpg",
                    size: 123456,
                    accepted: true,
                    isMock: true // mark it as mock
                };
                this.emit("addedfile", mockFile);
                this.emit("thumbnail", mockFile, existingImageUrl);
                this.emit("complete", mockFile);
                this.files.push(mockFile);
            }
        }
    });
});
