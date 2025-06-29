<div id="site-details" class="content">
    <div class="row g-3">
        <div class="col-sm-6">
            @include('admin.layouts.forms.fields.text', [
                'text_name' => 'site_title',
                'text_value' => $site_title ?? null,
                'label_name' => __('site.site_title'),
                'label_req' => true,
            ])
        </div>
        <div class="col-sm-6">
            @include('admin.layouts.forms.fields.text', [
                'text_name' => 'site_phone',
                'text_value' => $site_phone ?? null,
                'label_name' => __('site.site_phone'),
                'label_req' => true,
            ])
        </div>
        <div class="col-sm-6">
            @include('admin.layouts.forms.fields.text', [
                'text_name' => 'site_email',
                'text_value' => $site_email ?? null,
                'label_name' => __('site.site_email'),
                'label_req' => true,
            ])
        </div>
        <div class="col-sm-6">
            @include('admin.layouts.forms.fields.number', [
                'number_name' => 'min_order',
                'min' => 0,
                'placeholder' => __('site.min_order'),
                'number_value' => $setting->min_order ?? null,
            ])
        </div>
        <div class="col-sm-6">
            @include('admin.layouts.forms.fields.text', [
                'text_name' => 'max_order',
                'text_value' => $max_order ?? null,
                'label_name' => __('site.max_order'),
                'label_req' => true,
            ])
        </div>
        <div class="col-sm-6">
            @include('admin.layouts.forms.fields.number', [
                'number_name' => 'min_order_for_shipping_free',
                'min' => 0,
                'placeholder' => __('site.min_order_for_shipping_free'),
                'number_value' => $min_order_for_shipping_free ?? null,
            ])
        </div>
        <div class="col-sm-6">
            @include('admin.layouts.forms.fields.text', [
                'text_name' => 'delivery_cost',
                'text_value' => $delivery_cost ?? null,
                'label_name' => __('site.delivery_cost'),
                'label_req' => true,
            ])
        </div>
        <div class="col-sm-6">
            @include('admin.layouts.forms.fields.select', [
                'select_name' => 'site_open',
                'select_function' => [0 => __('site.no'), 1 => __('site.yes')],
                'select_value' => $site_open ?? null,
                'select_class' => 'select2',
                'select2' => true,
            ])
        </div>
        <div class="col-sm-12">
            @include('admin.layouts.forms.fields.dropzone', [
                'name' => 'logo',
            ])
        </div>
    </div>
</div>
