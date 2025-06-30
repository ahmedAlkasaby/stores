@extends('admin.layouts.app')
@section('title', __('site.pages'))
@section('styles')
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/bs-stepper/bs-stepper.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/dropzone-style.css') }}" />
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.1.0/ckeditor5.css">
@endsection
@section('content')
    @include('admin.layouts.forms.edit', [
        'table' => 'pages',
        'route_type' => 'dashboard',
        'form_method' => 'PATCH',
        'form_class' => 'custom-form-class',
        'form_status' => 'update',
        'model' => $page,
        'model_id' => $page->id,
        'enctype' => true,
    ])


    @include('admin.layouts.forms.head', [
        'show_name' => true,
        'show_content' => true,
        'show_title' => true,
        'name_ar' => $page->nameLang('ar'),
        'name_en' => $page->nameLang('en'),
        'content_ar' => $page->descriptionLang('ar') ?? null,
        'content_en' => $page->descriptionLang('en') ?? null,
        'title_ar' => $page->titleLang('ar') ?? null,
        'title_en' => $page->titleLang('en') ?? null,
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
                'text_name' => 'link',
                'text_value' => $page->link ?? null,
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js"></script>
    @include('admin.layouts.forms.dropzone', [
        'inputName' => 'image',
        'existingImageUrl' => isset($page) && $page->image ? asset($page->image) : null,
    ])
@endsection
@section('mainFiles')
    <script src="{{ asset('admin/assets/js/form-wizard-numbered.js') }}"></script>
    <script src="{{ asset('admin/assets/js/form-wizard-validation.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/select2/select2.js') }}"></script>
    @include('admin.layouts.js.editor')
@endsection
