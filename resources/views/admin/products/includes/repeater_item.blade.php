@php
    if (!isset($child) || !is_object($child)) {
        $child = null;
    }
@endphp

<div data-repeater-item class="row mb-3">

    @include('admin.layouts.forms.hiddens.id', [
        'id' => $child?->id,
        'name' => 'children[][id]' // تأكد من اسم الـ id كمان
    ])

    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
        @include('admin.layouts.forms.fields.select', [
            'select_name' => 'children[][size_id]',
            'select_function' => ['' => __('site.select_option')] + $sizes->mapWithKeys(fn($size) =>
                [$size->id => $size->nameLang()])->toArray(),
            'select_value' => $child?->size_id,
            'label_req' => true,
            'select2' => false,
        ])
    </div>

    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
        @include('admin.layouts.forms.fields.number', [
            'number_name' => 'children[][amount]',
            'min' => 0,
            'placeholder' => __('site.amount'),
            'number_value' => $child?->amount,
            'label_req' => true,

        ])
    </div>

    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
        @include('admin.layouts.forms.fields.number', [
            'number_name' => 'children[][price]',
            'min' => 0,
            'placeholder' => __('site.price'),
            'number_value' => $child?->price,
            'label_req' => true,
        ])
    </div>

    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
        @include('admin.layouts.forms.fields.select', [
            'select_name' => 'children[][offer]',
            'select_function' => ['' => __('site.select_option')] + booleantype(),
            'select_value' => $child?->offer,
            'select2' => false
        ])
    </div>

    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
        @include('admin.layouts.forms.fields.number', [
            'number_name' => 'children[][offer_price]',
            'min' => 0,
            'placeholder' => __('site.offer_price'),
            'number_value' => $child?->offer_price,
            'not_req' => true,
        ])
    </div>

    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
        @include('admin.layouts.forms.fields.number', [
            'number_name' => 'children[][offer_amount]',
            'min' => 0,
            'placeholder' => __('site.offer_amount'),
            'number_value' => $child?->offer_amount,
            'not_req' => true,
        ])
    </div>

    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
        @include('admin.layouts.forms.fields.number', [
            'number_name' => 'children[][offer_percent]',
            'min' => 0,
            'placeholder' => __('site.offer_percent'),
            'number_value' => $child?->offer_percent,
            'not_req' => true,
        ])
    </div>

    <div class="col-auto d-flex mt-auto align-self-end">
        <button class="btn btn-danger" data-repeater-delete type="button">
            {{ __('site.delete') }}
        </button>
    </div>

</div>
