    @include('admin.layouts.forms.head', [
        'show_name' => true,
        'show_content' => true,
        'show_image' => true,
        'name_ar' => $unit?->nameLang('ar') ?? null,
        'name_en' => $unit?->nameLang('en') ?? null,
        'content_ar' => $unit?->descriptionLang('ar') ?? null,
        'content_en' => $unit?->descriptionLang('en') ?? null,
    ])
    @include('admin.layouts.forms.fields.number', [
        'number_name' => 'order_id',
        'min' => 0,
        'placeholder' => __('site.order_id'),
        'number_value' => $unit->order_id ?? null,
        'label_req' => true,
    ])
    @include('admin.layouts.forms.fields.select', [
        'select_name' => 'active',
        'select_function' => [0 => __('site.not_active'), 1 => __('site.active')],
        'select_value' => $unit->active ?? null,
        'select_class' => 'select2',
        'select2' => true,
    ])


    @include('admin.layouts.forms.footer')
    @include('admin.layouts.forms.close')
    </div>