@extends('admin.layouts.app')
@section('title', __('site.stores'))
@section('styles')
<link rel="stylesheet" href="{{asset('admin/assets/vendor/libs/select2/select2.css')}}" />
@endsection
@section('content')
@include('admin.layouts.messages.success')
@include('admin.layouts.messages.displayErrors')
<div class="card">
    @include('admin.layouts.tables.header_of_table',['filter'=>true,'model'=>'roles'])
    @include('admin.roles.includes.table')
</div>
</div>

@section('mainFiles')
<script src="{{asset("admin/assets/js/modal-add-new-address.js")}}"></script>
@endsection

@section('jsFiles')
<script src="{{asset("admin/assets/vendor/libs/select2/select2.js")}}"></script>
@endsection
@endsection
