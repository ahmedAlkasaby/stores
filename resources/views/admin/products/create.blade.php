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
  @include('admin.layouts.forms.create', [
        'form_method' => 'POST',
        'form_class' => 'needs-validation',
        'form_status' => 'store',
        'table' => 'dashboard.products',
        'model_id' => $category->id ?? null,
        'enctype' => true,
    ])

@include('admin.products.includes.form-fields')
@endsection



@section('jsFiles')
<script src="{{ asset('admin/assets/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('admin/assets/js/form-wizard-numbered.js') }}"></script>
<script src="{{ asset('admin/assets/js/form-wizard-validation.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/libs/select2/select2.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/libs/jquery-repeater/jquery-repeater.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/libs/bs-stepper/bs-stepper.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/libs/dropzone/dropzone.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
@endsection

@section('mainFiles')
@include('admin.products.includes.date_scriptsjs')
@include('admin.products.includes.repeater_scriptjs')
@include('admin.layouts.forms.dropzone')
@endsection
