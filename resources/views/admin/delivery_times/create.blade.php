@extends('admin.layouts.app')
@section('title', __('site.delivery_times'))
@section('styles')
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/bs-stepper/bs-stepper.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/bs-stepper/bs-stepper.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/select2/select2.css') }}" />
@endsection
@section('content')
    @include('admin.layouts.messages.displayErrors')
    @include('admin.layouts.forms.create', [
        'form_method' => 'POST',
        'form_class' => 'needs-validation',
        'form_status' => 'store',
        'table' => 'dashboard.delivery_times',
        'model_id' => $delivery_time->id ?? null,
        'enctype' => true,
    ])

    @include('admin.layouts.forms.head', [
        'show_name' => true,
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
        'select_value' => $delivery_time->start_hour ?? null,
        'select_class' => 'select2',
        'select2' => true,
    ])@include('admin.layouts.forms.fields.select', [
        'select_name' => 'end_hour',
        'select_function' => \App\Helpers\HourHelper::fullDayRange(),
        'select_value' => $delivery_time->end_hour ?? null,
        'select_class' => 'select2',
        'select2' => true,
    ])
   
    @include('admin.layouts.forms.footer')
    @include('admin.layouts.forms.close')
    </div>
@section('jsFiles')
    <script src="{{ asset('admin/assets/vendor/libs/bs-stepper/bs-stepper.js') }}"></script>
@endsection
@section('mainFiles')
    <script src="{{ asset('admin/assets/js/form-wizard-numbered.js') }}"></script>
    <script src="{{ asset('admin/assets/js/form-wizard-validation.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/select2/select2.js') }}"></script>
@endsection
@endsection
