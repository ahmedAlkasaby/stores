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
        'select_function' => $services->mapWithKeys(fn($unit) => [$unit->id => $unit->nameLang()])->toArray() ?? null,
        'select_value' => $product->unit_id ?? null,
        'select_class' => 'select2',
        'select2' => true,
        'label_req' => true,
        ])
    </div>
    <div class="col-md-6">
        @include('admin.layouts.forms.fields.select', [
        'select_name' => 'brand_id',
        'select_function' => $brands->mapWithKeys(fn($brand) => [$brand->id => $brand->nameLang()])->toArray() ?? null,
        'select_value' => $product->brand_id ?? null,
        'select_class' => 'select2',
        'select2' => true,
        ])
    </div>

</div>



<div class="row">
    <div class="col-md-6">
        @include('admin.layouts.forms.fields.select', [
        'select_name' => 'service_id',
        'select_function' => $services->mapWithKeys(fn($service) => [$service->id => $service->nameLang()])->toArray() ?? null,
        'select_value' => $product->service_id ?? null,
        'select_class' => 'select2',
        'select2' => true,
        'label_req' => true,
        ])
    </div>
    <div class="col-md-6">
        @include('admin.layouts.forms.fields.select', [
        'select_name' => 'category_id',
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

@include('admin.products.includes.booliens_fields')

@include('admin.products.includes.price_fields')


@include('admin.layouts.forms.fields.dropzone', [
"name" => "image",
])
@include('admin.layouts.forms.footer')
@include('admin.layouts.forms.close')
</div>
