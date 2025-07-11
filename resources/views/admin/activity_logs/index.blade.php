@extends('admin.layouts.app')
@section('title', __('site.brands'))
@section('styles')
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/select2/select2.css') }}" />
    @include('admin.layouts.table.datatablesCss')

@endsection
@section('content')

    <div class="card">
        @include('admin.brands.includes.table')
    </div>
</div>
@include('admin.brands.includes.filter')

@endsection

@section('mainFiles')
    <script src="{{ asset('admin/assets/js/modal-add-new-address.js') }}"></script>
@endsection
@section('jsFiles')
    <script src="{{ asset('admin/assets/vendor/libs/select2/select2.js') }}"></script>
    @include('admin.layouts.table.dataTableJs', ['table' => $brands->count() > 0])
@endsection
