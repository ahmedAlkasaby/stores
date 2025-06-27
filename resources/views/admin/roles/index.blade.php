@extends('admin.layouts.app')
@section('title', __('site.stores'))

@section('styles')

@endsection

@section('content')
@include('admin.layouts.messages.success')
@include('admin.layouts.messages.displayErrors')
<div class="card">
    @include('admin.roles.includes.table')
</div>

@endsection


@section('jsFiles')
<script src="{{asset("admin/assets/vendor/libs/select2/select2.js")}}"></script>
@include('admin.layouts.table.dataTableJs')
@endsection
