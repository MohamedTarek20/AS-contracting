Dropzone.autoDiscover = false;

/**
 * Setup dropzone
 */
$('#formDropzone').dropzone({
    previewTemplate: $('#dzPreviewContainer').html(),
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
        myDropzone = this;

        // when file is dragged in
        this.on('addedfile', function (file) {
            $('.dropzone-drag-area').removeClass('is-invalid').next('.invalid-feedback').hide();

            // Optional: Convert file to base64 and store in hidden input
            const reader = new FileReader();
            reader.onload = function (e) {
                // Create or update hidden input
                let hiddenInput = $('#formDropzone').find('#dropZoneInput');
                hiddenInput.val(e.target.result);
            };
            reader.readAsDataURL(file);
        });
    },
    success: function (file, response) {
        // hide form and show success message
        $('#formDropzone').fadeOut(600);
        setTimeout(function () {
            $('#successMessage').removeClass('d-none');
        }, 600);
    }
});
