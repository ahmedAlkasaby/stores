@extends('admin.layouts.app')
@section('title', __('site.units'))
@section('styles')
<link rel="stylesheet" href="{{asset("admin/assets/vendor/libs/bs-stepper/bs-stepper.css")}}" />
@endsection
@section('content')
@include('admin.layouts.messages.success')
@include('admin.layouts.messages.displayErrors')
@include('admin.layouts.forms.edit', [
'table' => 'units',
'route_type' => 'dashboard',
'form_method' => 'PATCH',
'form_class' => 'custom-form-class',
'form_status' => 'update',
'model' => $unit,
'model_id' => $unit->id,
'enctype' => true,
])


@include('admin.layouts.forms.head',[
"show_name"=> true,
"show_content"=> true,
"show_image"=> true,
"name_ar"=> $unit->nameLang('ar') ,
"name_en"=> $unit->nameLang('en') ,
"content_ar"=> $unit->descriptionLang('ar') ?? null,
"content_en"=> $unit->descriptionLang('en') ?? null,
])
@include('admin.layouts.forms.fields.number',
[
'number_name' => 'order_id',
"min" => 0,
"placeholder" => __('site.order_id'),
'number_value' => $unit->order_id ?? null,
'label_req' => true
])
<div class="col-md-6 mt-3">
    @include('admin.layouts.forms.active',["var"=> $unit])
</div>


@include("admin.layouts.forms.footer")
@include('admin.layouts.forms.close')
</div>
@section('jsFiles')
<script src="{{ asset('admin/assets/vendor/libs/bs-stepper/bs-stepper.js') }}"></script>
@endsection
@section('mainFiles')
<script src="{{asset("admin/assets/js/form-wizard-numbered.js")}}"></script>
<script src="{{asset("admin/assets/js/form-wizard-validation.js")}}"></script>
@endsection
@endsection