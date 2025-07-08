@include('admin.layouts.forms.head', [
'show_name' => true,
'show_content' => true,
'show_image' => true,
'name_ar' => $product?->nameLang('ar') ?? null,
'name_en' => $product?->nameLang('en') ?? null,
'content_ar' => $product?->descriptionLang('ar') ?? null,
'content_en' => $product?->descriptionLang('en') ?? null,
])
<div class="row">
    <div class="col-md-6">
        @include('admin.layouts.forms.fields.select', [
        'select_name' => 'unit_id',
        'select_function' => ['' => __('site.select_option')] + $units->mapWithKeys(fn($unit) => [$unit->id =>
        $unit->nameLang()])->toArray() ?? null,
        'select_value' => $product->unit_id ?? null,
        'select_class' => 'select2',
        'select2' => true,
        'label_req' => true,
        ])
    </div>
    <div class="col-md-6">
        @include('admin.layouts.forms.fields.select', [
        'select_name' => 'brand_id',
        'select_function' => ['' => __('site.select_option')] + $brands->mapWithKeys(fn($brand) => [$brand->id =>
        $brand->nameLang()])->toArray() ?? null,
        'select_value' => $product->brand_id ?? null,
        'select_class' => 'select2',
        'select2' => true,
        'not_req' => true,

        ])
    </div>

</div>



<div class="row">
    <div class="col-md-6">
        @include('admin.layouts.forms.fields.select', [
        'select_name' => 'service_id',
        'select_function' => ['' => __('site.select_option')] + $services->mapWithKeys(fn($service) => [$service->id =>
        $service->nameLang()])->toArray(),
        'select_value' => $product->service_id ?? null,
        'select_class' => 'select2',
        'select2' => true,
        'label_req' => true,
        ])
    </div>
    <div class="col-md-6">
        @include('admin.layouts.forms.fields.select', [
        'select_name' => 'categories',
        'select_function' => $categories,
        'select_value' => $product->category_id ?? null,
        'select_class' => 'select2',
        'select2' => true,
        'label_req' => true,
        'is_multiple' => true
        ])
    </div>

</div>


<div class="row">
    <div class="col-md-6">
        @include('admin.layouts.forms.fields.number', [
        'number_name' => 'amount',
        'min' => 0,
        'placeholder' => __('site.amount'),
        'number_value' => $product->amount ?? null,
        'label_req' => true,
        ])
    </div>
    <div class="col-md-6">
        @include('admin.layouts.forms.fields.number', [
        'number_name' => 'max_order',
        'min' => 0,
        'placeholder' => __('site.max_order'),
        'number_value' => $product->max_order ?? null,
        'label_req' => true,

        ])
    </div>

</div>
<div class="row">
    @include('admin.layouts.forms.fields.select', [
    'select_name' => 'size_id',
    'select_function' => ['' => __('site.select_option')] + $sizes->mapWithKeys(fn($size) => [$size->id =>
    $size->nameLang()])->toArray() ?? null,
    'select_value' => $product->size_id ?? null,
    'select_class' => 'select2',
    'select2' => true,
    'not_req' => true,

    ])
</div>

@include('admin.products.includes.booliens_fields')

@include('admin.products.includes.price_fields')

<div class="row">
    <div class="col-md-6">
        @include('admin.layouts.forms.fields.date', [
        'date_name' => 'date_start',
        'date_value' => old('date_start', $product->date_start ?? null),
        'placeholder' => 'YYYY-MM-DD HH:MM',
        'date_id' => 'flatpickr-datetime-start',
        'date_class' => ' flatpickr-datetime',
        'label_name' => __('site.date_start')
        ])
    </div>
    <div class="col-md-6">
        @include('admin.layouts.forms.fields.date', [
        'date_name' => 'date_end',
        'date_value' => old('date_end', $product->date_end ?? null),
        'placeholder' => 'YYYY-MM-DD HH:MM',
        'date_id' => 'flatpickr-datetime-end',
        'date_class' => ' flatpickr-datetime',
        'label_name' => __('site.date_end')
        ])
    </div>
</div>


@include('admin.layouts.forms.fields.dropzone', [
"name" => "image",
])

<!-- Form Repeater -->
<div class="col-12">
    <div class="card">
        <h5 class="card-header">Form Repeater</h5>
        <div class="card-body">
            <form class="form-repeater">
                <div data-repeater-list="group-a">
                    <div data-repeater-item class="mb-4">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                @include('admin.layouts.forms.fields.select', [
                                'select_name' => 'size_id',
                                'select_function' => ['' => __('site.select_option')] + $sizes->mapWithKeys(fn($size) =>
                                [$size->id => $size->nameLang()])->toArray() ?? null,
                                'select_value' => $product->size_id ?? null,
                                'select_class' => 'select2',
                                'select2' => true,
                                'label_req' => true,
                                ])
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                @include('admin.layouts.forms.fields.number', [
                                'number_name' => 'amount',
                                'min' => 0,
                                'placeholder' => __('site.amount'),
                                'number_value' => $product->amount ?? null,
                                'label_req' => true,
                                ])
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                @include('admin.layouts.forms.fields.select', [
                                'select_name' => 'offer',
                                'select_function' => booleantype(),
                                'select_value' => $product->offer ?? null,
                                'select_class' => 'select2',
                                'select2' => true,
                                ])
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                @include('admin.layouts.forms.fields.number', [
                                'number_name' => 'offer_price',
                                'min' => 0,
                                'placeholder' => __('site.offer_price'),
                                'number_value' => $product->offer_price ?? null,
                                'not_req' => true,
                                ])
                            </div>

                            {{-- السطر الثاني: باقي الحقول + زر الحذف --}}
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                @include('admin.layouts.forms.fields.number', [
                                'number_name' => 'offer_amount',
                                'min' => 0,
                                'placeholder' => __('site.offer_amount'),
                                'number_value' => $product->offer_amount ?? null,
                                'not_req' => true,
                                ])
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                @include('admin.layouts.forms.fields.number', [
                                'number_name' => 'offer_percent',
                                'min' => 0,
                                'placeholder' => __('site.offer_percent'),
                                'number_value' => $product->offer_percent ?? null,
                                'not_req' => true,
                                ])
                            </div>

                            <div class="col-auto d-flex mt-auto align-self-end">
                                <button class="btn btn-danger" data-repeater-delete type="button">
                                    {{ __('site.delete') }}
                                </button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="mt-3">
                    <button class="btn btn-primary" data-repeater-create>
                        <i class="ti ti-plus me-1"></i>
                        <span class="align-middle">{{ __('site.add')}}</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Form Repeater -->

@include('admin.layouts.forms.footer')
@include('admin.layouts.forms.close')
</div>
