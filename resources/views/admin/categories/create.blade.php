@extends('admin.layouts.app')
@section('title', __('site.categories'))
@section('styles')
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/bs-stepper/bs-stepper.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/bs-stepper/bs-stepper.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/select2/select2.css') }}" />
    <!-- For date picker -->
@endsection
@section('content')
    @include('admin.layouts.messages.displayErrors')
    @include('admin.layouts.forms.create', [
        'form_method' => 'POST',
        'form_class' => 'needs-validation',
        'form_status' => 'store',
        'table' => 'dashboard.categories',
        'model_id' => $category->id ?? null,
        'enctype' => true,
    ])

    @include('admin.layouts.forms.head', [
        'show_name' => true,
        'show_content' => true,
    ])
    @include('admin.layouts.forms.fields.number', [
        'number_name' => 'order_id',
        'min' => 0,
        'placeholder' => __('site.order_id'),
        'number_value' => $category->order_id ?? null,
    ])

    @include('admin.layouts.forms.fields.select', [
        'select_name' => 'store_id',
        'select_function' =>
            $stores->mapWithKeys(fn($store) => [$store->id => $store->nameLang()])->toArray() ?? null,
        'select_value' => $category->store_id ?? null,
        'select_class' => 'select2',
        'select2' => true,
    ])
    @include('admin.layouts.forms.fields.select', [
        'select_name' => 'parent_id',
        'select_function' =>
            ['null' => __('site.null')] +
                $categories->mapWithKeys(fn($category) => [$category->id => $category->nameLang()])->toArray() ??
            null,
        'select_value' => $category->parent_id ?? null,
        'select_class' => 'select2',
        'select2' => true,
    ])
    @include('admin.layouts.forms.fields.select', [
        'select_name' => 'active',
        'select_function' => [false => __('site.not_active'), true => __('site.active')],
        'select_value' => $category->active ?? null,
        'select_class' => 'select2',
        'select2' => true,
    ])

    @include('admin.layouts.forms.fields.file', [
        'image' => $category->image ?? null,
    ])
    @include('admin.layouts.forms.footer')
    @include('admin.layouts.forms.close')
    </div>
@section('jsFiles')
    <script src="{{ asset('admin/assets/vendor/libs/bs-stepper/bs-stepper.js') }}"></script>
    <script src="{{ asset('js/showImage.js') }}"></script>
@endsection
@section('mainFiles')
    <script src="{{ asset('admin/assets/js/form-wizard-numbered.js') }}"></script>
    <script src="{{ asset('admin/assets/js/form-wizard-validation.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/select2/select2.js') }}"></script>
@endsection
@endsection
