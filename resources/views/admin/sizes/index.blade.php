@extends('admin.layouts.app')
@section('title', __('site.sizes'))
@section('styles')
@endsection
@section('content')
@include('admin.layouts.messages.success')
@include('admin.layouts.messages.displayErrors')
<div class="card">
    @include('admin.layouts.tables.header_of_table',['filter'=>false,'model'=>'sizes'])
    @include('admin.sizes.includes.table')
</div>
</div>
@endsection