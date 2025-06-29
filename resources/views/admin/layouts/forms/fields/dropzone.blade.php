    <div class="form-group mb-4">
        <label class="form-label text-muted opacity-75 fw-medium" for="formImage">{{ __('site.image') }}</label>
        <div class="dropzone-drag-area form-control" id="myDropzoneArea">
            <div class="dz-message text-muted opacity-50" data-dz-message>
                <span>{{ __("site.Drag_file_here_to_upload") }}</span>
            </div>
        </div>
        <input type="file" name={{ $name }} id="hiddenImageInput" class="d-none" />
    </div>