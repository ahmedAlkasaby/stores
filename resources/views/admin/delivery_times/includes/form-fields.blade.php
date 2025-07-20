    @include('admin.layouts.forms.head', [
        'show_name' => true,
        "name_ar" => $delivery_time->nameLang('ar'),
        "name_en" => $delivery_time->nameLang('en'),
    ])

    @include('admin.layouts.forms.fields.select', [
        'select_name' => 'active',
        'select_function' => [false => __('site.not_active'), true => __('site.active')],
        'select_value' => $delivery_time->active ?? null,
        'select_class' => 'select2',
        'select2' => true,
    ])
   
    @include('admin.layouts.forms.fields.select', [
        'select_name' => 'start_hour',
        'select_function' => \App\Helpers\HourHelper::fullDayRange(),
        'select_value' => $delivery_time->start_hour ?? null,
        'select_class' => 'select2',
        'select2' => true,
    ])@include('admin.layouts.forms.fields.select', [
        'select_name' => 'end_hour',
        'select_function' => \App\Helpers\HourHelper::fullDayRange(),
        'select_value' => $delivery_time->end_hour ?? null,
        'select_class' => 'select2',
        'select2' => true,
    ])
   
    @include('admin.layouts.forms.footer')
    @include('admin.layouts.forms.close')
    </div>