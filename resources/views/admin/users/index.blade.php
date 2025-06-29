@extends('admin.layouts.app')
@section('title', __('site.users'))

@section('styles')
@include('admin.layouts.table.datatablesCss')
@endsection

@section('content')
@include('admin.layouts.messages.success')
@include('admin.layouts.messages.displayErrors')
<div class="card">
    @include('admin.users.includes.table')
</div>
@endsection

@section('jsFiles')
@include('admin.layouts.table.dataTableJs', ['table' => $users->count() > 0])
@include('admin.layouts.table.ajaxActiveJs', ['model' => 'users'])
@endsection
