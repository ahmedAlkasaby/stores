@extends('admin.layouts.app')
@section('title', __('site.delivery_times'))
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
        'table' => 'delivery_times',
        'route_type' => 'dashboard',
        'form_method' => 'PATCH',
        'form_class' => 'custom-form-class',
        'form_status' => 'update',
        'model' => $delivery_time,
        'model_id' => $delivery_time->id,
        'enctype' => true,
    ])
    @include('admin.layouts.forms.head', [
        'show_name' => true,
        'name_ar' => $delivery_time->nameLang('ar'),
        'name_en' => $delivery_time->nameLang('en'),
    ])

    @include('admin.layouts.forms.fields.select', [
        'select_name' => 'active',
        'select_function' => [false => __('site.not_active'), true => __('site.active')],
        'select_value' => $delivery_time->active ?? null,
        'select_class' => 'select2',
        'select2' => true,
    ])
    @include('admin.layouts.forms.fields.select', [
        'select_name' => 'start_hour',
        'select_function' => \App\Helpers\HourHelper::fullDayRange(),
        'select_value' => isset($delivery_time->start_hour)
            ? \Carbon\Carbon::parse($delivery_time->start_hour)->format('H:i')
            : null,
        'select_class' => 'select2',
        'select2' => true,
    ])@include('admin.layouts.forms.fields.select', [
        'select_name' => 'end_hour',
        'select_function' => \App\Helpers\HourHelper::fullDayRange(),
        'select_value' => isset($delivery_time->end_hour)
            ? \Carbon\Carbon::parse($delivery_time->end_hour)->format('H:i')
            : null,
        'select_class' => 'select2',
        'select2' => true,
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
