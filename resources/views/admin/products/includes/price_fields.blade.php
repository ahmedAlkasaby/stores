<div class="row">
    <div class="col-md-6">
        @include('admin.layouts.forms.fields.number', [
        'number_name' => 'price',
        'min' => 0,
        'placeholder' => __('site.pice'),
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
        'label_req' => true,

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
        'label_req' => true,

        ])
    </div>
    <div class="col-md-6">
        @include('admin.layouts.forms.fields.number', [
        'number_name' => 'offer_amount',
        'min' => 0,
        'placeholder' => __('site.offer_amount'),
        'number_value' => $product->offer_amount ?? null,
        'label_req' => true,
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
        'label_req' => true,

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
<div class="row">
  <div class="col-md-6">
    @include('admin.layouts.forms.fields.date', [
        'date_name'     => 'date_start',
        'date_value'    => old('date_start', $product->date_start ?? null),
        'placeholder'   => 'YYYY-MM-DD HH:MM',
        'date_id'       => 'flatpickr-datetime',
        'date_class'    => ' flatpickr-datetime',
        'label_name'    => __('site.date_start')
    ])
  </div>
  <div class="col-md-6">
    @include('admin.layouts.forms.fields.date', [
        'date_name'     => 'date_end',
        'date_value'    => old('date_end', $product->date_end ?? null),
        'placeholder'   => 'YYYY-MM-DD HH:MM',
        'date_id'       => 'flatpickr-datetime',
        'date_class'    => ' flatpickr-datetime',
        'label_name'    => __('site.date_end')
    ])
  </div>
</div>
