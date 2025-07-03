@extends('admin.layouts.app')
@section('title', __('site.services'))
@section('styles')
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/select2/select2.css') }}" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" />

@include('admin.layouts.table.datatablesCss')
@endsection

@section('content')
@include('admin.layouts.messages.success')
@include('admin.layouts.messages.displayErrors')
<div class="card">
    @include('admin.services.includes.table')
</div>
@include('admin.services.includes.filter')
@endsection


@section('mainFiles')
<script src="{{ asset('admin/assets/js/modal-add-new-address.js') }}"></script>
@endsection
@section('jsFiles')
<script src="{{ asset('admin/assets/vendor/libs/select2/select2.js') }}"></script>
@include('admin.layouts.table.dataTableJs',["table"=>$services->count() > 0])
@include('admin.layouts.table.ajaxActiveJs', ['model' => 'services'])
@endsection