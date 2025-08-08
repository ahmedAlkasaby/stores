@include('admin.layouts.forms.head', [
        'show_name' => true,
        'show_content' => true,
        'name_ar' => $payment?->nameLang('ar') ?? null,
        'name_en' => $payment?->nameLang('en') ?? null,
        'content_ar' => $payment?->descriptionLang('ar') ?? null,
        'content_en' => $payment?->descriptionLang('en') ?? null,
    ])
    {{-- @include('admin.layouts.forms.fields.select', [
        'select_name' => 'type',
        'select_function' => \App\Helpers\PaymentHelper::getPaymentTypes(),
        'select_value' => $payment->active ?? null,
        'select_class' => 'select2',
        'select2' => true,
    ]) --}}

    @include('admin.layouts.forms.fields.dropzone', [
        'name' => 'image',
    ])
    @include('admin.layouts.forms.fields.number', [
        'number_name' => 'order_id',
        'min' => 0,
        'placeholder' => __('site.order_id'),
    ])

    @include('admin.layouts.forms.fields.select', [
        'select_name' => 'active',
        'select_function' => [0 => __('site.not_active'), 1 => __('site.active')],
        'select_value' => $payment->active ?? null,
        'select_class' => 'select2',
        'select2' => true,
    ])
    @include('admin.layouts.forms.footer')
    @include('admin.layouts.forms.close')
    </div>