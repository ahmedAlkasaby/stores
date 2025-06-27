@php
$classOfHeaderTable= 'card-header';
$classDivTable = 'table-responsive text-nowrap';
$classTable='table';

@endphp

<h5 class="{{ $classOfHeaderTable }} d-flex justify-content-between align-items-center px-3 py-2">
    <span>{{ $TitleTable }}</span>

    <div class="d-flex align-items-center gap-2">
        @if(!empty($filter))
            <button type="button" class="btn btn-secondary"
                data-bs-toggle="modal" data-bs-target="#addNewAddress">
                <i class="fa fa-filter me-1"></i> {{ __('site.filter') }}
            </button>
        @endif

       <a href="{{ $routeToCreate }}"
   class="btn btn-primary btn-lg px-4 py-2 d-flex align-items-center gap-2">
    <i class="fa fa-plus fs-5"></i>
    @lang('site.new')
</a>

    </div>
</h5>





<div class={{ $classDivTable }}>
    <table class={{ $classTable }}>
