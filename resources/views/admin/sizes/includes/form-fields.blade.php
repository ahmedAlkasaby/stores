    @include('admin.layouts.forms.head', [
        'show_name' => true,
        'show_content' => true,
        'show_image' => true,
        'name_ar' => $size?->nameLang('ar') ?? null,
        'name_en' => $size?->nameLang('en') ?? null,
        'content_ar' => $size?->descriptionLang('ar') ?? null,
        'content_en' => $size?->descriptionLang('en') ?? null,
    ])
    @include('admin.layouts.forms.fields.number', [
        'number_name' => 'order_id',
        'min' => 0,
        'placeholder' => __('site.order_id'),
        'number_value' => $size->order_id ?? null,
    ])
    @include('admin.layouts.forms.fields.select', [
        'select_name' => 'active',
        'select_function' => [0 => __('site.not_active'), 1 => __('site.active')],
        'select_value' => $size->active ?? null,
        'select_class' => 'select2',
        'select2' => true,
    ])

    @include('admin.layouts.forms.footer')
    @include('admin.layouts.forms.close')
    </div>