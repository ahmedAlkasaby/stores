@extends('admin.layouts.app')
@section('title', __('site.sizes'))
@section('styles')
    @include('admin.layouts.table.datatablesCss')
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/select2/select2.css') }}" />

@endsection
@section('content')
    @include('admin.layouts.messages.success')
    @include('admin.layouts.messages.displayErrors')
    <div class="card">
        @include('admin.sizes.includes.table')
    </div>
    </div>
    @include('admin.sizes.includes.filter')

@endsection
@section('mainFiles')
    <script src="{{ asset('admin/assets/js/modal-add-new-address.js') }}"></script>
@endsection
@section('jsFiles')
    <script src="{{ asset('admin/assets/vendor/libs/select2/select2.js') }}"></script>
    @include('admin.layouts.table.dataTableJs', ['table' => $sizes->count() > 0])
    @include('admin.layouts.table.ajaxActiveJs', ['model' => 'sizes'])
@endsection
