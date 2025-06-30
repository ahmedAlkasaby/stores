@extends('admin.layouts.app')
@section('title', __('site.pages'))
@section('styles')
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/bs-stepper/bs-stepper.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/dropzone/dropzone.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/select2/select2.css') }}" />
     <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.1.0/ckeditor5.css">

@endsection
@section('content')
    @include('admin.layouts.messages.displayErrors')
    @include('admin.layouts.forms.create', [
        'form_method' => 'POST',
        'form_class' => 'needs-validation',
        'form_status' => 'store',
        'table' => 'dashboard.pages',
        'model_id' => $page->id ?? null,
        'enctype' => true,
    ])

    @include('admin.layouts.forms.head', [
        'show_name' => true,
        'show_title' => true,
        'show_content' => true,
    ])
    @include('admin.layouts.forms.fields.number', [
        'number_name' => 'order_id',
        'min' => 0,
        'placeholder' => __('site.order_id'),
    ])

    <div class ="row">
        <div class="col-sm-6">
            @include('admin.layouts.forms.fields.select', [
                'select_name' => 'active',
                'select_function' => [0 => __('site.not_active'), 1 => __('site.active')],
                'select_value' => $page->active ?? null,
                'select_class' => 'select2',
                'select2' => true,
            ])
        </div>
        <div class="col-sm-6">
            @include('admin.layouts.forms.fields.select', [
                'select_name' => 'type',
                'select_function' => \App\Helpers\PageHelper::getPagesTypes(),
                'select_value' => $page->type ?? null,
                'select_class' => 'select2',
                'select2' => true,
            ])
        </div>
        <div class="col-sm-6">
            @include('admin.layouts.forms.fields.text', [
                'text_name' => 'linl',
                'text_value' => $page->linl ?? null,
                'label_name' => __('site.link'),
                'not_req' => true,
            ])
        </div>
        <div class="col-sm-6">
            @include('admin.layouts.forms.fields.text', [
                'text_name' => 'video_link',
                'text_value' => $page->video_link ?? null,
                'label_name' => __('site.video_link'),
                'not_req' => true,
            ])
        </div>
    </div>
    @include('admin.layouts.forms.fields.dropzone', [
        'name' => 'image',
    ])

    @include('admin.layouts.forms.footer')
    @include('admin.layouts.forms.close')
    </div>
@endsection

@section('jsFiles')
    <script src="{{ asset('admin/assets/vendor/libs/bs-stepper/bs-stepper.js') }}"></script>
    <script src="{{ asset("admin/assets/vendor/libs/dropzone/dropzone.js") }}"></script>

    @include('admin.layouts.forms.dropzone')

@endsection
@section('mainFiles')
    <script src="{{ asset('admin/assets/js/form-wizard-numbered.js') }}"></script>
    <script src="{{ asset('admin/assets/js/form-wizard-validation.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/select2/select2.js') }}"></script>
    @include('admin.layouts.js.editor')

@endsection
