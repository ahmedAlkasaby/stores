<label class="form-label">@lang('site.image')</label>
<span class="note needsclick btn bg-label-primary d-inline" id="btnBrowse">@lang('site.image')</span>
<input type="file" id="imageInput" name="image" style="display: none;" accept="image/*">
<div id="imagePreview" style="margin-top: 20px;">
    @if ($image)
    <img id="previewImg" src="{{ asset('../' . $image) }}" alt="Image Preview" style="max-width: 50%;">
    @else
    <img id="previewImg" src="" alt="Image Preview" style="max-width: 50%; display: none;">
    @endif
</div>