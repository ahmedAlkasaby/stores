@extends('admin.layouts.app')
@section('title', __('site.units'))
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
    @include('admin.layouts.header_of_table',['filter'=>true,'model'=>'units'])
    @include('admin.units.includes.table')
</div>
</div>
@include('admin.units.includes.filter')

@section('mainFiles')
<script src="{{asset("admin/assets/js/modal-add-new-address.js")}}"></script>
@endsection
@section('jsFiles')
<script src="{{asset("admin/assets/vendor/libs/select2/select2.js")}}"></script>


@endsection
@endsection