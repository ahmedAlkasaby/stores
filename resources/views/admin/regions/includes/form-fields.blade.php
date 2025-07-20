    @include('admin.layouts.forms.head', [
        'show_name' => true,

        'name_ar' => $region?->nameLang('ar') ?? null,
        'name_en' => $region?->nameLang('en') ?? null,

    ])
    @include('admin.layouts.forms.fields.number', [
        'number_name' => 'order_id',
        'min' => 0,
        'placeholder' => __('site.order_id'),
        'number_value' => $region->order_id ?? null,
    ])
    @include('admin.layouts.forms.fields.number', [
        'number_name' => 'shipping',
        'min' => 0,
        'placeholder' => __('site.shipping'),
        'number_value' => $region->shipping ?? null,
    ])
    @include('admin.layouts.forms.fields.select', [
        'select_name' => 'active',
        'select_function' => [0 => __('site.not_active'), 1 => __('site.active')],
        'select_value' => $region->active ?? null,
        'select_class' => 'select2',
        'select2' => true,
    ])
        @include('admin.layouts.forms.fields.select', [
        'select_name' => 'city_id',
        'select_function' => $cities->mapWithKeys(function ($city) {
            return [$city->id => $city->nameLang()];
        }),
        'select_value' => $region->city_id ?? null,
        'select_class' => 'select2',
        'select2' => true,
    ])
    @include('admin.layouts.forms.footer')
    @include('admin.layouts.forms.close')
    </div>