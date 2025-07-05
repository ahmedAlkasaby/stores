@include('admin.layouts.forms.head', [
    'show_name' => true,
    'show_content' => true,
    'show_title' => true,
    'name_ar' => $page?->nameLang('ar') ?? null,
    'name_en' => $page?->nameLang('en') ?? null,
    'content_ar' => $page?->descriptionLang('ar') ?? null,
    'content_en' => $page?->descriptionLang('en') ?? null,
    'title_ar' => $page?->titleLang('ar') ?? null,
    'title_en' => $page?->titleLang('en') ?? null,
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
            'select_name' => 'page',
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
    @include('admin.layouts.forms.fields.number', [
        'number_name' => 'order_id',
        'min' => 0,
        'placeholder' => __('site.order_id'),
    ])
</div>
@include('admin.layouts.forms.fields.dropzone', [
    'name' => 'image',
])
@include('admin.layouts.forms.footer')
@include('admin.layouts.forms.close')
</div>
