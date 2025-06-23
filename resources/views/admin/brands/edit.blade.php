@extends('admin.layouts.app')
@section('title', __('site.brands'))
@section('styles')
<link rel="stylesheet" href="{{asset(" admin/assets/vendor/libs/bs-stepper/bs-stepper.css")}}" />
@endsection
@section('content')
@include('admin.layouts.forms.edit', [
'table' => 'brands',
'route_type' => 'dashboard',
'form_method' => 'PATCH',
'form_class' => 'custom-form-class',
'form_status' => 'update',
'model' => $brand,
'model_id' => $brand->id,
'enctype' => true,
])


@include('admin.layouts.forms.head',[
"show_name"=> true,
"show_content"=> true,
"show_image"=> true,
"name_ar"=> $brand->nameLang('ar') ,
"name_en"=> $brand->nameLang('en') ,
"content_ar"=> $brand->descriptionLang('ar') ?? null,
"content_en"=> $brand->descriptionLang('en') ?? null,
])
@include('admin.layouts.forms.fields.number',
[
'number_name' => 'order_id',
"min" => 0,
"placeholder" => __('site.order_id'),
'number_value' => $brand->order_id ?? null,

])
<div class="col-md-6 mt-3">
    @include('admin.layouts.forms.active',["var"=> $brand])
</div>
@include('admin.layouts.forms.fields.file',[
'image' => $brand->image ?? null
])

@include("admin.layouts.forms.footer")
@include('admin.layouts.forms.close')
</div>
@section('jsFiles')
<script src="{{ asset('admin/assets/vendor/libs/bs-stepper/bs-stepper.js') }}"></script>
<script src="{{ asset('js/showImage.js') }}"></script>
@endsection
@section('mainFiles')
<script src="{{asset(" admin/assets/js/form-wizard-numbered.js")}}"></script>
<script src="{{asset(" admin/assets/js/form-wizard-validation.js")}}"></script>
@endsection
@endsection