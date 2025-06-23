@extends('admin.layouts.app')
@section('title', __('site.store_types'))
@section('styles')
@endsection
@section('content')
@include('admin.layouts.messages.success')
@include('admin.layouts.messages.displayErrors')
<div class="card">
    @include('admin.layouts.header_of_table',['filter'=>false,'model'=>'store_types'])
    @include('admin.store_types.includes.table')
</div>

@endsection