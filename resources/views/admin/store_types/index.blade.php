@extends('admin.layouts.app')
@section('title', __('site.store_types'))
@section('styles')
@endsection
@section('content')
@include('admin.layouts.messages.success')
@include('admin.layouts.messages.displayErrors')
<div class="card">
    @include('admin.store_types.includes.table')
</div>

@endsection

@section('mainFiles')
@include('admin.layouts.table.dataTableJs')

@endsection
