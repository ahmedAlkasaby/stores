@extends('admin.layouts.app')
@section('title', __('site.sliders'))
@section('styles')
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/bs-stepper/bs-stepper.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/bs-stepper/bs-stepper.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/dropzone/dropzone.css') }}" />
@endsection
@section('content')
    @include('admin.layouts.messages.displayErrors')

    @include('admin.layouts.forms.edit', [
        'table' => 'sliders',
        'route_type' => 'dashboard',
        'form_method' => 'PATCH',
        'form_class' => 'custom-form-class',
        'form_status' => 'update',
        'model' => $slider,
        'model_id' => $slider->id,
        'enctype' => true,
    ])


    @include('admin.sliders.includes.form-fields')
@endsection

@section('jsFiles')
    <script src="{{ asset('admin/assets/vendor/libs/bs-stepper/bs-stepper.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/dropzone/dropzone.js') }}"></script>

    @include('admin.layouts.forms.dropzone', [
        'inputName' => 'image',
        'existingImageUrl' => isset($slider) && $slider->image ? asset($slider->image) : null,
    ])
    <script>
        $(document).ready(function() {
            let value = $("#product_id").val();

            if (value && value !== 'null') {
                $("#link").attr('disabled', true);
            } else {
                $("#link").removeAttr('disabled');
            }

            $('#product_id').on('change', function() {
                let value = $(this).val();

                if (value && value !== 'null') {
                    $("#link").attr('disabled', true);
                } else {
                    $("#link").removeAttr('disabled');
                }
            });
        });
    </script>
@endsection
@section('mainFiles')
    <script src="{{ asset('admin/assets/js/form-wizard-numbered.js') }}"></script>
    <script src="{{ asset('admin/assets/js/form-wizard-validation.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/select2/select2.js') }}"></script>
@endsection
