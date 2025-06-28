@extends('admin.layouts.app')
@section('title', __('site.brands'))
@section('styles')
<link rel="stylesheet" href="{{asset("admin/assets/vendor/libs/select2/select2.css")}}" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" />
@endsection

@section('content')
@include('admin.layouts.messages.success')
@include('admin.layouts.messages.displayErrors')
<div class="card">

    @include('admin.brands.includes.table')
</div>
</div>
@include('admin.brands.includes.filter')


@endsection
@section('jsFiles')
@include('admin.layouts.table.dataTableJs')
@include('admin.layouts.table.ajaxActiveJs', ['model' => 'brands'])
<script src="{{asset("admin/assets/vendor/libs/select2/select2.js")}}"></script>
@endsection
