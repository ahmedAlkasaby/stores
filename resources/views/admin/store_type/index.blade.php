@extends('admin.layouts.app')
@section('title', __('site.home'))
@section('styles')
@endsection
@section('content')
    <div class="card">
        @include('admin.layouts.header_of_table',['filter'=>false,'model'=>'store_types'])
        @include('admin.store_type.includes.table')
    </div>
</div>
@endsection