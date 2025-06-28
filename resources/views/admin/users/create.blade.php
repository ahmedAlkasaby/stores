@extends('admin.layouts.app')
@section('title', __('site.stores'))
@section('styles')
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/bs-stepper/bs-stepper.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/bs-stepper/bs-stepper.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/select2/select2.css') }}" />
@endsection
@section('content')
@include("admin.layouts.messages.displayErrors")
@include('admin.layouts.forms.create', [
'form_method' => 'POST',
'form_class' => 'form-control',
'form_status' => 'store',
'table' => 'dashboard.users',
'enctype' => false
])
@include('admin.layouts.forms.head',["show"=>true])
<div class="row">
    <div class="col-md-6">
        @include('admin.layouts.forms.fields.text', [
        'text_name' => 'first_name',
        'text_value' => old('first_name') ?? null,
        'label_name' => __('site.first_name'),
        'label_req' => true,
        ])
    </div>
    <div class="col-md-6">
        @include('admin.layouts.forms.fields.text', [
        'text_name' => 'last_name',
        'text_value' => old('last_name') ?? null,
        'label_name' => __('site.last_name'),
        'label_req' => true,
        ])
    </div>
    <div class="col-md-6">
        @include('admin.layouts.forms.users.email')
    </div>
    <div class="col-md-6">
        @include('admin.layouts.forms.users.phone')
    </div>
    <div class="col-md-6">
        @include('admin.layouts.forms.users.password', ['new' => 1])
    </div>
    <div class="col-md-6">
        @include('admin.layouts.forms.users.password-confirm', ['new' => 1])
    </div>
    <div class="col-md-6">
        @include('admin.layouts.forms.fields.select', [
        'select_name' => 'active',
        'select_function' => [0 => __('site.not_active'), 1 => __('site.active')],
        'select_value' => $user->active ?? null,
        'select_class' => 'select2',
        'select2' => true,
        ])
    </div>
    <div class="col-md-6">
        @include('admin.layouts.forms.fields.select', [
        'select_name' => 'lang',
        'select_function' => ["en" => __('site.english'), "ar" => __('site.arabic')],
        'select_value' => $user->lang ?? null,
        'select_class' => 'select2',
        'select2' => true,
        ])
    </div>
</div>
<div class="mt-1">
    @include('admin.layouts.forms.users.user-type-admin')
</div>
<div class="mt-1">
    @include('admin.layouts.forms.users.role',["roles" => $roles,"userRoles" => $userRoles ?? null])

</div>
@include('admin.layouts.forms.fields.select', [
'select_name' => 'vip',
'select_function' => [0 => __('site.no'), 1 => __('site.yes')],
'select_value' => $user->vip ?? null,
'select_class' => 'select2',
'select2' => true,
])
@include('admin.layouts.forms.fields.select', [
'select_name' => 'notify',
'select_function' => [0 => __('site.no'), 1 => __('site.yes')],
'select_value' => $user->notify ?? null,
'select_class' => 'select2',
'select2' => true,
])
@include('admin.layouts.forms.fields.file', [
'image' => $image ?? null,
])

@include("admin.layouts.forms.footer")
@include('admin.layouts.forms.close')
</div>
@endsection
@section('jsFiles')
@include('admin.layouts.permissions.script_permission')
<script src="{{ asset('js/showImage.js') }}"></script>

@endsection
@section('mainFiles')
<script src="{{ asset('admin/assets/js/form-wizard-numbered.js') }}"></script>
<script src="{{ asset('admin/assets/js/form-wizard-validation.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/libs/select2/select2.js') }}"></script>
@endsection