@extends('admin.layouts.app')
@section('title', __('site.stores'))
@section('styles')
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/bs-stepper/bs-stepper.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/bs-stepper/bs-stepper.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/select2/select2.css') }}" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/dropzone-style.css') }}" />
@endsection
@section('content')
    @include('admin.layouts.messages.displayErrors')
    @include('admin.layouts.forms.edit', [
        'table' => 'deliveries',
        'route_type' => 'dashboard',
        'form_method' => 'PATCH',
        'form_class' => 'custom-form-class',
        'form_status' => 'update',
        'model' => $delivery,
        'model_id' => $delivery->id,
        'enctype' => true,
    ])
    @include('admin.layouts.forms.head', [
        'show_name' => true,
        'name_ar' => $delivery->nameLang('ar'),
        'name_en' => $delivery->nameLang('en'),
    ])
    @include('admin.layouts.forms.fields.number', [
        'number_name' => 'order_id',
        'min' => 0,
        'placeholder' => __('site.order_id'),
        'number_value' => $delivery->order_id ?? null,
    ])
    @include('admin.layouts.forms.fields.select', [
        'select_name' => 'active',
        'select_function' => [false => __('site.not_active'), true => __('site.active')],
        'select_value' => $delivery->active ?? null,
        'select_class' => 'select2',
        'select2' => true,
    ])
    @include('admin.layouts.forms.selects.delivery', [
        'name' => 'start_hour',
        'label' => __('site.start_hour'),
        'type' => isset($delivery->start_hour)
            ? \Carbon\Carbon::parse($delivery->start_hour)->format('H:i')
            : null,
    ])

    @include('admin.layouts.forms.selects.delivery', [
        'name' => 'end_hour',
        'label' => __('site.end_hour'),
        'type' => isset($delivery->end_hour)
            ? \Carbon\Carbon::parse($delivery->end_hour)->format('H:i')
            : null,
    ])
    @include('admin.layouts.forms.footer')
    @include('admin.layouts.forms.close')
    </div>
@endsection
@section('jsFiles')
    <script src="{{ asset('admin/assets/vendor/libs/bs-stepper/bs-stepper.js') }}"></script>

@endsection
@section('mainFiles')
    <script src="{{ asset('admin/assets/js/form-wizard-numbered.js') }}"></script>
    <script src="{{ asset('admin/assets/js/form-wizard-validation.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/select2/select2.js') }}"></script>
@endsection
