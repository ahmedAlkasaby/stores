@extends('admin.layouts.app')
@section('title', __('site.products'))
@section('styles')
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/bs-stepper/bs-stepper.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/dropzone/dropzone.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/select2/select2.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/flatpickr/flatpickr.css')}}" />
@endsection

@section('content')
@include('admin.layouts.messages.displayErrors')
   @include('admin.layouts.forms.edit', [
        'table' => 'products',
        'route_type' => 'dashboard',
        'form_method' => 'PATCH',
        'form_class' => 'custom-form-class',
        'form_status' => 'update',
        'model' => $product,
        'model_id' => $product->id,
        'enctype' => true,
    ])

@include('admin.products.includes.form-fields')
@endsection



@section('jsFiles')
    <script src="{{ asset('admin/assets/vendor/libs/jquery/jquery.js') }}"></script>

    <script src="{{ asset('admin/assets/vendor/libs/bs-stepper/bs-stepper.js') }}"></script>

    <script src="{{ asset('admin/assets/js/form-wizard-numbered.js') }}"></script>
    <script src="{{ asset('admin/assets/js/form-wizard-validation.js') }}"></script>

    <!-- بقية المكتبات -->
    <script src="{{ asset('admin/assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/jquery-repeater/jquery-repeater.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/dropzone/dropzone.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    @include('admin.layouts.forms.dropzone', [
        'inputName' => 'image',
        'existingImageUrl' => isset($product) && $product->image ? asset($product->image) :  null,
    ])
@endsection


@section('mainFiles')
@include('admin.products.includes.date_scriptsjs')
@include('admin.products.includes.repeater_scriptjs')
@include('admin.layouts.forms.dropzone')
@endsection
