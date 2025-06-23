<div class="col-12 text-center mt-4">
    <button type="submit" class="btn btn-primary me-2">
        <i class="ti ti-search"></i> {{ __('site.filter') }}
    </button>
    <a href="{{ route('dashboard.'.$model.'.index') }}" class="btn btn-outline-secondary">
        <i class="ti ti-refresh"></i> {{ __('site.reset') }}
    </a>
</div>