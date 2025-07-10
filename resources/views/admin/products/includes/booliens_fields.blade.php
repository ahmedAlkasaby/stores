<div class="row">
    <div class="col-md-6">
        @include('admin.layouts.forms.fields.number', [
        'number_name' => 'order_id',
        'min' => 0,
        'not_req'=> true,
        'placeholder' => __('site.order_id'),
        'number_value' => $product->order_id ?? null,

        ])
    </div>
    <div class="col-md-6">
        @include('admin.layouts.forms.fields.select', [
        'select_name' => 'active',
        'select_function' =>statusType(),
        'select_value' => $product->active ?? null,
        'select_class' => 'select2',
        'select2' => true,
        ])
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        @include('admin.layouts.forms.fields.select', [
        'select_name' => 'feature',
        'select_function' => booleantype(),
        'select_value' => $product->feature ?? null,
        'select_class' => 'select2',
        'select2' => true,
        ])
    </div>
    <div class="col-md-6">
        @include('admin.layouts.forms.fields.select', [
        'select_name' => 'returned',
        'select_function' => booleantype(),
        'select_value' => $product->returned ?? null,
        'select_class' => 'select2',
        'select2' => true,
        ])
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        @include('admin.layouts.forms.fields.select', [
        'select_name' => 'stock',
        'select_function' => booleantype(),

        'select_value' => $product->stock ?? null,
        'select_class' => 'select2',
        'select2' => true,
        ])
    </div>

    <div class="col-md-6">
        @include('admin.layouts.forms.fields.select', [
        'select_name' => 'new',
        'select_function' => booleantype(),

        'select_value' => $product->new ?? null,
        'select_class' => 'select2',
        'select2' => true,
        ])
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        @include('admin.layouts.forms.fields.select', [
        'select_name' => 'special',
        'select_function' => booleantype(),

        'select_value' => $product->special ?? null,
        'select_class' => 'select2',
        'select2' => true,
        ])
    </div>
    <div class="col-md-6">
        @include('admin.layouts.forms.fields.select', [
        'select_name' => 'filter',
        'select_function' => booleantype(),

        'select_value' => $product->filter ?? null,
        'select_class' => 'select2',
        'select2' => true,
        ])
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        @include('admin.layouts.forms.fields.select', [
        'select_name' => 'sale',
        'select_function' => booleantype(),

        'select_value' => $product->sale ?? null,
        'select_class' => 'select2',
        'select2' => true,
        ])
    </div>
    <div class="col-md-6">
        @include('admin.layouts.forms.fields.select', [
        'select_name' => 'late',
        'select_function' => booleantype(),

        'select_value' => $product->late ?? null,
        'select_class' => 'select2',
        'select2' => true,
        ])
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        @include('admin.layouts.forms.fields.select', [
        'select_name' => 'offer',
        'select_function' => booleantype(),

        'select_value' => $product->offer ?? null,
        'select_class' => 'select2',
        'select2' => true,
        ])
    </div>

    <div class="col-md-6">
        @include('admin.layouts.forms.fields.select', [
        'select_name' => 'free_shipping',
        'select_function' => booleantype(),

        'select_value' => $product->free_shipping ?? null,
        'select_class' => 'select2',
        'select2' => true,
        ])
    </div>
</div>
