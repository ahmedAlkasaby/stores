@extends('admin.layouts.app')
@section('title', __('site.stores'))
@section('styles')
<link rel="stylesheet" href="{{asset("admin/assets/vendor/libs/bs-stepper/bs-stepper.css")}}" />
<link rel="stylesheet" href="{{asset("admin/assets/vendor/libs/bs-stepper/bs-stepper.css")}}" />
<link rel="stylesheet" href="{{asset("admin/assets/vendor/libs/bootstrap-select/bootstrap-select.css")}}" />
<link rel="stylesheet" href="{{asset("admin/assets/vendor/libs/select2/select2.css")}}" />
<!-- For date picker -->
@endsection
@section('content')
@include("admin.layouts.messages.displayErrors")
@include('admin.layouts.forms.create', [
'form_method' => 'POST',
'form_class' => 'needs-validation',
'form_status' => 'store',
'table' => 'dashboard.stores',
'model_id' => $store->id ?? null,
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
])
<div class="col-sm-12 mt-2">
    @include('admin.layouts.forms.fields.text', [
    'text_name' => 'address',
    'text_value' => null,
    'label_name' => __("site.address"),
    'label_req' => true])
</div>
@include("admin.layouts.forms.fields.select",[
'select_name' => 'store_type_id',
'select_function' => $storeTypes->mapWithKeys(fn($storeType) => [$storeType->id => $storeType->nameLang()])->toArray()
?? null,
'select_value' => $store->store_type_id ?? null,
'select_class' => 'select2',
'select2' => true,
])

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
