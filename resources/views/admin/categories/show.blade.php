@extends('admin.layouts.app')
@section('title', __('site.categories'))
@section('styles')
<link rel="stylesheet" href="{{asset("admin/assets/vendor/libs/bs-stepper/bs-stepper.css")}}" />
<link rel="stylesheet" href="{{asset("admin/assets/vendor/libs/bs-stepper/bs-stepper.css")}}" />
<link rel="stylesheet" href="{{asset("admin/assets/vendor/libs/bootstrap-select/bootstrap-select.css")}}" />
<link rel="stylesheet" href="{{asset("admin/assets/vendor/libs/select2/select2.css")}}" />@endsection
@section('content')
@include('admin.layouts.messages.success')
@include('admin.layouts.messages.displayErrors')
@include('admin.layouts.forms.edit', [
'table' => 'categories',
'route_type' => 'dashboard',
'form_method' => 'PATCH',
'form_class' => 'custom-form-class',
'form_status' => 'update',
'model' => $category,
'model_id' => $category->id,
'enctype' => true,
])


@include('admin.layouts.forms.head',[
"show_name"=> true,
"show_content"=> true,
"show_image"=> true,
"name_ar"=> $category->nameLang('ar') ,
"name_en"=> $category->nameLang('en') ,
"content_ar"=> $category->descriptionLang('ar') ?? null,
"content_en"=> $category->descriptionLang('en') ?? null,
])
@include('admin.layouts.forms.fields.number',
[
'number_name' => 'order_id',
"min" => 0,
"placeholder" => __('site.order_id'),
'number_value' => $category->order_id ?? null,

])

@include("admin.layouts.forms.fields.select",[
'select_name' => 'store_id',
'select_function' => $stores->mapWithKeys(fn($store) => [$store->id => $store->nameLang()])->toArray()
?? null,
'select_value' => $category->store_id ?? null,
'select_class' => 'select2',
'select2' => true,
])
@include("admin.layouts.forms.fields.select",[
'select_name' => 'parent_id',
'select_function' => $categories->mapWithKeys(fn($category) => [$category->id => $category->nameLang()])->toArray()
?? null,
'select_value' => $category->parent_id ?? null,
'select_class' => 'select2',
'select2' => true,
])
<div class="col-md-6 mt-3">
    @include('admin.layouts.forms.active',["var"=> $category])
</div>

@include('admin.layouts.forms.fields.file',[
'image' => $category->image ?? null
])
@include("admin.layouts.forms.footer")
@include('admin.layouts.forms.close')
</div>
<script src="{{ asset('admin/assets/vendor/libs/bs-stepper/bs-stepper.js') }}"></script>
<script src="{{ asset('js/showImage.js') }}"></script>
@endsection
@section('mainFiles')
<script src="{{asset("admin/assets/js/form-wizard-numbered.js")}}"></script>
<script src="{{asset("admin/assets/js/form-wizard-validation.js")}}"></script>
<script src="{{asset("admin/assets/vendor/libs/bootstrap-select/bootstrap-select.js")}}"></script>
<script src="{{asset("admin/assets/vendor/libs/select2/select2.js")}}"></script>
@endsection
