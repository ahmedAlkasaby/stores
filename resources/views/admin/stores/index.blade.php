@extends('admin.layouts.app')
@section('title', __('site.stores'))
@section('styles')
<link rel="stylesheet" href="{{asset('admin/assets/vendor/libs/select2/select2.css')}}" />
<!-- DataTables CSS -->

<!-- jQuery -->

<!-- DataTables JS -->

@endsection
@section('content')
@include('admin.layouts.messages.success')
@include('admin.layouts.messages.displayErrors')
<div class="card">

    @include('admin.stores.includes.table')
</div>
</div>
@include('admin.stores.includes.filter')

@endsection



@section('jsFiles')
<script src="{{asset("admin/assets/vendor/libs/select2/select2.js")}}"></script>
@include('admin.layouts.table.dataTableJs')


@endsection
