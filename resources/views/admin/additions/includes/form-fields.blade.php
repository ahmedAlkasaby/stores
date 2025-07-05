@include('admin.layouts.forms.head', [
        'show_name' => true,
        'show_content' => true,
        'show_image' => true,
        'name_ar' => $addition?->nameLang('ar') ?? null,
        'name_en' => $addition?->nameLang('en') ?? null,
        'content_ar' => $addition?->descriptionLang('ar') ?? null,
        'content_en' => $addition?->descriptionLang('en') ?? null,
    ])
    @include('admin.layouts.forms.fields.number', [
        'number_name' => 'order_id',
        'min' => 0,
        'placeholder' => __('site.order_id'),
        'number_value' => $addition->order_id ?? null,
    ])@include('admin.layouts.forms.fields.number', [
        'number_name' => 'price',
        'min' => 0,
        'placeholder' => __('site.price'),
        'number_value' => $addition->price ?? 0,
    ])

    @include('admin.layouts.forms.fields.select', [
        'select_name' => 'type',
        'select_function' => ['free' => __('site.free'), 'paid' => __('site.paid')],
        'select_value' => $addition->type ?? null,
        'select_class' => 'select2',
        'select2' => true,
    ])

    @include('admin.layouts.forms.fields.select', [
        'select_name' => 'active',
        'select_function' => [0 => __('site.not_active'), 1 => __('site.active')],
        'select_value' => $addition->active ?? null,
        'select_class' => 'select2',
        'select2' => true,
    ])
    @include('admin.layouts.forms.fields.dropzone', [
        "name" => "image",
    ])
    @include('admin.layouts.forms.footer')
    @include('admin.layouts.forms.close')
    </div>