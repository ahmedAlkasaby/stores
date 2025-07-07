    <input type="hidden" name="id" value="{{ $slider?->id ?? null }}">
    @include('admin.layouts.forms.head', [
        'show_name' => true,
        'show_content' => true,
        'name_ar' => $slider?->nameLang('ar') ?? null,
        'name_en' => $slider?->nameLang('en') ?? null,
        'content_ar' => $slider?->descriptionLang('ar') ?? null,
        'content_en' => $slider?->descriptionLang('en') ?? null,
    ])
    @include('admin.layouts.forms.fields.number', [
        'number_name' => 'order_id',
        'min' => 0,
        'placeholder' => __('site.order_id'),
        'number_value' => $slider->order_id ?? null,
    ])
    <div class="row">
        <div class="col-6">
            @include('admin.layouts.forms.fields.select', [
                'select_name' => 'product_id',
                'select_function' => ['null' => __('site.null')] + $products,
                'select_value' => $slider->product_id ?? null,
                'select_class' => 'select2',
                'select2' => true,
                'select_id' => 'product_id',
            ])
        </div>
        <div class="col-6">
            @include('admin.layouts.forms.fields.select', [
                'select_name' => 'active',
                'select_function' => [0 => __('site.not_active'), 1 => __('site.active')],
                'select_value' => $slider->active ?? null,
                'select_class' => 'select2',
                'select2' => true,
            ])
        </div>
        <div class="col-6">
            @include('admin.layouts.forms.fields.text', [
                'text_name' => 'link',
                'text_value' => $slider->link ?? null,
                'label_name' => __('site.link'),
                'not_req' => true,
                'text_id' => 'link',
            ])
        </div>
    </div>
    @include('admin.layouts.forms.fields.dropzone', [
        'name' => 'image',
    ])
    @include('admin.layouts.forms.footer')
    @include('admin.layouts.forms.close')
    </div>