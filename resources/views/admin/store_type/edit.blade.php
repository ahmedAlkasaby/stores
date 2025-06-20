@extends('admin.layouts.app')
@section('title', __('site.home'))
@section('styles')
<link rel="stylesheet" href="{{asset("admin/assets/vendor/libs/bs-stepper/bs-stepper.css")}}" />
@endsection
@section('content')
@include('admin.layouts.forms.edit', [
'table' => 'store_types',
'route_type' => 'dashboard', 
'form_method' => 'PATCH', 
'form_class' => 'custom-form-class',
'form_status' => 'update', 
'model' => $storeType, 
'model_id' => $storeType->id, 
'enctype' => true, 
])


@include('admin.layouts.forms.head',[
"show_name"=> true,
"show_content"=> true,
"show_image"=> true,
"name_ar"=> $storeType->nameLang('ar') ,
"name_en"=> $storeType->nameLang('en') ,
"content_ar"=> $storeType->descriptionLang('ar') ?? null,
"content_en"=> $storeType->descriptionLang('en') ?? null,
])
@include('admin.layouts.forms.fields.file',[
'image' => $storeType->image ?? null
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
@endsection
@endsection