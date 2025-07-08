    @include('admin.layouts.forms.head', [
        'show_name' => true,
        'show_content' => true,
        'name_ar' => $coupon?->nameLang('ar') ?? null,
        'name_en' => $coupon?->nameLang('en') ?? null,
        'content_ar' => $coupon?->descriptionLang('ar') ?? null,
        'content_en' => $coupon?->descriptionLang('en') ?? null,
    ])
    @include('admin.layouts.forms.fields.number', [
        'number_name' => 'code',
        'min' => 0,
        'placeholder' => __('site.code'),
        'number_value' => $coupon->code ?? null,
    ])

    @include('admin.layouts.forms.fields.select', [
        'select_name' => 'type',
        'select_function' => ['percentage' => __('site.percentage'), 'fixed' => __('site.fixed')],
        'select_value' => $coupon->type ?? null,
        'select_class' => 'select2',
        'select2' => true,
    ])
    @include('admin.layouts.forms.fields.date', [
        'date_name' => 'date_start',
        'date_value' => $coupon->start_date ?? null,
    ])
    @include('admin.layouts.forms.fields.number', [
        'number_name' => 'max_discount',
        'min' => 0,
        'placeholder' => __('site.max_discount'),
        'number_value' => $coupon->max_discount ?? null,
    ])
    <div class="form-group">
        <input class="form-control flatpickr-input flatpickr-datetime active" id="date_start" data-parsley-trigger="input"
            required="" name="date_start" type="text" readonly="readonly">
    </div>
    @include('admin.layouts.forms.fields.select', [
        'select_name' => 'active',
        'select_function' => [0 => __('site.not_active'), 1 => __('site.active')],
        'select_value' => $coupon->active ?? null,
        'select_class' => 'select2',
        'select2' => true,
    ])
    @include('admin.layouts.forms.fields.number', [
        'number_name' => 'user_limit',
        'min' => 0,
        'placeholder' => __('site.user_limit'),
        'number_value' => $coupon->user_limit ?? null,
    ])
    @include('admin.layouts.forms.fields.number', [
        'number_name' => 'use_count',
        'min' => 0,
        'placeholder' => __('site.use_count'),
        'number_value' => $coupon->use_count ?? null,
        'number_class' => 'disabled',
    ])
    @include('admin.layouts.forms.fields.number', [
        'number_name' => 'count_used',
        'min' => 0,
        'placeholder' => __('site.count_used'),
        'number_value' => $coupon->count_used ?? null,
    ])
    @include('admin.layouts.forms.fields.date', [
        'date_name' => 'date_end',
        'date_value' => $coupon->start_date ?? null,
    ])
    @include('admin.layouts.forms.fields.number', [
        'number_name' => 'min_order',
        'min' => 0,
        'placeholder' => __('site.min_order'),
        'number_value' => $coupon->min_order ?? null,
    ])
    @include('admin.layouts.forms.fields.number', [
        'number_name' => 'order_id',
        'min' => 0,
        'placeholder' => __('site.order_id'),
        'number_value' => $coupon->order_id ?? null,
    ])
    @include('admin.layouts.forms.fields.select', [
        'select_name' => 'finish',
        'select_function' => [0 => __('site.not_finish'), 1 => __('site.finish')],
        'select_value' => $coupon->finish ?? null,
        'select_class' => 'select2',
        'select2' => true,
    ])

    @include('admin.layouts.forms.footer')
    @include('admin.layouts.forms.close')
    </div>
