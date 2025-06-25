@extends('admin.layouts.app')
@section('title', __('site.additions'))
@section('styles')
<link rel="stylesheet" href="{{asset("admin/assets/vendor/libs/bs-stepper/bs-stepper.css")}}" />
<link rel="stylesheet" href="{{asset("admin/assets/vendor/libs/bs-stepper/bs-stepper.css")}}" />
<link rel="stylesheet" href="{{asset("admin/assets/vendor/libs/bootstrap-select/bootstrap-select.css")}}" />
<link rel="stylesheet" href="{{asset("admin/assets/vendor/libs/select2/select2.css")}}" />
<!-- For date picker -->
@endsection
@include("admin.layouts.messages.displayErrors")
@section('content')
@include('admin.layouts.forms.create', [
'form_method' => 'POST',
'form_class' => 'needs-validation',
'form_status' => 'store',
'table' => 'dashboard.additions',
'model_id' => $addition->id ?? null,
'enctype' => true
])

@include('admin.layouts.forms.head',[
"show_name"=> true,
"show_content"=> true,
])
@include('admin.layouts.forms.fields.number',
[
'number_name' => 'order_id',
"min" => 0,
"placeholder" => __('site.order_id'),
])@include('admin.layouts.forms.fields.number',
[
'number_name' => 'price',
"min" => 0,
"placeholder" => __('site.price'),
'number_value' => $addition->price ?? 0,

])

@include("admin.layouts.forms.fields.select",[
'select_name' => 'type',
'select_function' => ["free" => __("site.free"), "paid" => __("site.paid")],
'select_value' => $addition->type ?? null,
'select_class' => 'select2',
'select2' => true,
])
<div class="col-md-6 mt-3">
    @include('admin.layouts.forms.active')
</div>
@include('admin.layouts.forms.fields.file',[
'image' => $image ?? null
])
@include("admin.layouts.forms.footer")
@include('admin.layouts.forms.close')
</div>
@section('jsFiles')
<script src="{{ asset('admin/assets/vendor/libs/bs-stepper/bs-stepper.js') }}"></script>
<script src="{{ asset('js/showImage.js') }}"></script>
@endsection
@section('mainFiles')
<script src="{{asset("admin/assets/js/form-wizard-numbered.js")}}"></script>
<script src="{{asset("admin/assets/js/form-wizard-validation.js")}}"></script>
<script src="{{asset("admin/assets/vendor/libs/bootstrap-select/bootstrap-select.js")}}"></script>
<script src="{{asset("admin/assets/vendor/libs/select2/select2.js")}}"></script>
@endsection
@endsection