    <div class="form-group mb-4">
        <label class="form-label text-muted opacity-75 fw-medium" for="formImage">{{ __('site.image') }}</label>

        <div class="dropzone needsclick dz-clickable dz-max-files-reached" id="myDropzoneArea">
            <div class="dz-message needsclick">
                {{ __('site.Drag_file_here_to_upload') }}
            </div>

        </div>
        <input type="file" name={{ $name }} id="hiddenImageInput" class="d-none" />
    </div>
