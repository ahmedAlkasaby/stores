@extends('admin.layouts.app')
@section('title', __('site.units'))
@section('styles')
<link rel="stylesheet" href="{{asset("admin/assets/vendor/libs/bs-stepper/bs-stepper.css")}}" />
@endsection
@section('content')
@include("admin.layouts.messages.displayErrors")
@include('admin.layouts.forms.create', [
'form_method' => 'POST',
'form_class' => 'needs-validation',
'form_status' => 'store',
'table' => 'dashboard.units',
'model_id' => $unit->id ?? null,
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
'label_req' => true
])
<div class="col-md-6 mt-3">
    @include('admin.layouts.forms.active')
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