@extends('admin.layouts.app')
@section('title', __('site.home'))
@section('styles')
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/css/pages/app-logistics-dashboard.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/apex-charts/apex-charts.css') }}" />
@endsection
@section('content')


    <!-- header -->
    @include('admin.home.includes.header')
    <!--/ header -->
    <div class="row">
        <!-- product details -->
        @include('admin.home.includes.products')
        <!--/ product details -->

        <!-- order details -->
        @include('admin.home.includes.orders')
        <!--/ order details -->

    </div>
    @include('admin.home.includes.profits')

@endsection
@section('mainFiles')
    <script src="{{ asset('admin/assets/js/app-logistics-dashboard.js') }}"></script>
    @include('admin.home.includes.chartJs')
@endsection
@section('jsFiles')
    <script src="{{ asset('admin/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
@endsection
