    @include('admin.layouts.forms.head', [])

    @include('admin.layouts.forms.fields.number', [
        'number_name' => 'shipping',
        'min' => 0,
        'placeholder' => __('site.shipping'),
        'number_value' => $review->shipping ?? null,
    ])
    @include('admin.layouts.forms.fields.select', [
        'select_name' => 'user_id',
        'select_function' => [$users->mapWithKeys(fn($user) => [$user->id => $user->name])->toArray()],
        'select_value' => $review->active ?? null,
        'select_class' => 'select2',
        'select2' => true,
        'select_id' => 'user_id',
    ])
    @include('admin.layouts.forms.fields.select', [
        'select_name' => 'type',
        'select_function' => ['order' => __('site.order'), 'product' => __('site.product')],
        'select_value' => $review->active ?? null,
        'select_class' => 'select2',
        'select2' => true,
        'select_id' => 'type',
    ])
    @include('admin.layouts.forms.fields.select', [
        'select_name' => 'order_id',
        'select_function' => ['null' => __('site.null')],
        'select_value' => $review->active ?? null,
        'select_class' => 'select2',
        'select2' => true,
        'select_id' => 'order_id',
    ])
    @include('admin.layouts.forms.fields.select', [
        'select_name' => 'product_id',
        'select_function' => ['null' => __('site.null')] + $products,
        'select_value' => $review->product ?? null,
        'select_class' => 'select2',
        'select2' => true,
        'select_id' => 'product_id',
    ])
    @include('admin.layouts.forms.fields.select', [
        'select_name' => 'rating',
        'select_function' => [0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5],
        'select_value' => $review->review ?? null,
        'select_class' => 'select2',
        'select2' => true,
    ])
    @include('admin.layouts.forms.fields.text', [
        'text_name' => 'comment',
        'text_value' => $review->comment ?? null,
        'label_name' => __('site.comment'),
        'not_req' => true,
        'text_id' => 'comment',
    ])
    @include('admin.layouts.forms.footer')
    @include('admin.layouts.forms.close')
    </div>
