@extends('admin.layouts.app')
@section('title', __('site.users'))

@section('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" />
@endsection

@section('content')
@include('admin.layouts.messages.success')
@include('admin.layouts.messages.displayErrors')
<div class="card">
    @include('admin.users.includes.table')
</div>
@endsection

@section('jsFiles')
@include('admin.layouts.table.dataTableJs')
@include('admin.layouts.table.ajaxActiveJs', ['model' => 'users'])
@endsection
