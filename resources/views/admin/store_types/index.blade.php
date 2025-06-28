@extends('admin.layouts.app')
@section('title', __('site.store_types'))
@section('styles')
@include('admin.layouts.table.datatablesCss')

@endsection
@section('content')
@include('admin.layouts.messages.success')
@include('admin.layouts.messages.displayErrors')
<div class="card">
    @include('admin.store_types.includes.table')
</div>

@endsection

@section('mainFiles')

@include('admin.layouts.table.dataTableJs',["table"=>$storeTypes->count() > 0])
@include('admin.layouts.table.ajaxActiveJs', ['model' => 'store_types'])
@endsection
