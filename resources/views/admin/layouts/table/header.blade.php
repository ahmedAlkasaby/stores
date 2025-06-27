@php
    $classOfHeaderTable= 'card-header';
    $classDivTable = 'table-responsive text-nowrap';
    $classTable='table';

@endphp

<h5 class="{{ $classOfHeaderTable }} d-flex justify-content-between align-items-center">
    <span>{{ $TitleTable }}</span>

    <div class="d-flex align-items-center gap-2">
        <div id="exportButtons"></div>

        <a href="{{ $routeToCreate }}" class="btn btn-primary" style="background-color:#805dff; border:none;">
            <i class="fa fa-plus me-1"></i> @lang('site.new')
        </a>
    </div>
</h5>



<div class={{ $classDivTable }}>
    <table class={{ $classTable }}>

