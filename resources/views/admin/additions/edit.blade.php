@extends('admin.layouts.app')
@section('title', __('site.additions'))
@section('styles')
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/bs-stepper/bs-stepper.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/bs-stepper/bs-stepper.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/select2/select2.css') }}" />
@endsection
@section('content')
    @include('admin.layouts.messages.success')
    @include('admin.layouts.messages.displayErrors')
    @include('admin.layouts.forms.edit', [
        'table' => 'additions',
        'route_type' => 'dashboard',
        'form_method' => 'PATCH',
        'form_class' => 'custom-form-class',
        'form_status' => 'update',
        'model' => $addition,
        'model_id' => $addition->id,
        'enctype' => true,
    ])


    @include('admin.layouts.forms.head', [
        'show_name' => true,
        'show_content' => true,
        'show_image' => true,
        'name_ar' => $addition->nameLang('ar'),
        'name_en' => $addition->nameLang('en'),
        'content_ar' => $addition->descriptionLang('ar') ?? null,
        'content_en' => $addition->descriptionLang('en') ?? null,
    ])
    @include('admin.layouts.forms.fields.number', [
        'number_name' => 'order_id',
        'min' => 0,
        'placeholder' => __('site.order_id'),
        'number_value' => $addition->order_id ?? null,
    ])@include('admin.layouts.forms.fields.number', [
        'number_name' => 'price',
        'min' => 0,
        'placeholder' => __('site.price'),
        'number_value' => $addition->price ?? 0,
    ])

    @include('admin.layouts.forms.fields.select', [
        'select_name' => 'type',
        'select_function' => ['free' => __('site.free'), 'paid' => __('site.paid')],
        'select_value' => $addition->type ?? null,
        'select_class' => 'select2',
        'select2' => true,
    ])

    @include('admin.layouts.forms.fields.select', [
        'select_name' => 'active',
        'select_function' => [0 => __('site.not_active'), 1 => __('site.active')],
        'select_value' => $addition->active ?? null,
        'select_class' => 'select2',
        'select2' => true,
    ])
    @include('admin.layouts.forms.fields.file', [
        'image' => $addition->image ?? null,
    ])
    @include('admin.layouts.forms.footer')
    @include('admin.layouts.forms.close')
    </div>
    <script src="{{ asset('admin/assets/vendor/libs/bs-stepper/bs-stepper.js') }}"></script>
    <script src="{{ asset('js/showImage.js') }}"></script>
@endsection
@section('mainFiles')
    <script src="{{ asset('admin/assets/js/form-wizard-numbered.js') }}"></script>
    <script src="{{ asset('admin/assets/js/form-wizard-validation.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/select2/select2.js') }}"></script>
@endsection
