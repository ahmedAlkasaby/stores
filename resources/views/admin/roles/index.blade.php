@extends('admin.layouts.app')

@section('content')
<div class="card">
    <div class="card-datatable table-responsive">
        @include('admin.layouts.header_of_table',['model'=>'roles','filter'=>true])
        @include('admin.roles.includes.table')
    </div>
</div>
@endsection
