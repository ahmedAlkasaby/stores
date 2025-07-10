<div class="row">
    <div class="col-md-6">
        @include('admin.layouts.forms.fields.number', [
        'number_name' => 'price',
        'min' => 0,
        'placeholder' => __('site.price'),
        'number_value' => $product->price ?? null,
        'label_req' => true,
        ])
    </div>
    <div class="col-md-6">
        @include('admin.layouts.forms.fields.number', [
        'number_name' => 'shipping_cost',
        'min' => 0,
        'placeholder' => __('site.shipping_cost'),
        'number_value' => $product->shipping_cost ?? null,
        'not_req' => true,

        ])
    </div>

</div>
<div class="row">
    <div class="col-md-6">
        @include('admin.layouts.forms.fields.number', [
        'number_name' => 'offer_price',
        'min' => 0,
        'placeholder' => __('site.offer_price'),
        'number_value' => $product->offer_price ?? null,
        'not_req' => true,

        ])
    </div>
    <div class="col-md-6">
        @include('admin.layouts.forms.fields.number', [
        'number_name' => 'offer_amount',
        'min' => 0,
        'placeholder' => __('site.offer_amount'),
        'number_value' => $product->offer_amount ?? null,
        'not_req' => true,
        ])
    </div>

</div>
<div class="row">
    <div class="col-md-6">
        @include('admin.layouts.forms.fields.number', [
        'number_name' => 'offer_percent',
        'min' => 0,
        'placeholder' => __('site.offer_percent'),
        'number_value' => $product->offer_percent ?? null,
        'not_req' => true,

        ])
    </div>
    <div class="col-md-6">
        @include('admin.layouts.forms.fields.number', [
        'number_name' => 'code',
        'min' => 0,
        'placeholder' => __('site.code'),
        'number_value' => $product->code ?? null,
        'label_req' => true,
        ])
    </div>
</div>