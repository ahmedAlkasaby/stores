@include('admin.layouts.modals.filter.header', ['model' => 'products'])





{{-- Search by Name --}}
<div class="col-md-6">
    @include('admin.layouts.forms.fields.text', [
        'text_name' => 'name',
        'text_value' => request('name') ?? null,
        'label_name' => __('site.name'),
        'label_req' => true,
        'not_req' => true,
    ])
</div>

{{-- Active Status --}}
<div class="col-md-6">
    @include('admin.layouts.forms.fields.select', [
        'select_name' => 'active',
        'select_function' => ['all' => __('site.all'), '1' => __('site.active'), '0' => __('site.not_active')],
        'select_value' => old('active') ?? request('active'),
        'select_class' => 'select2',
        'select2' => true,
        'not_req' => true,
    ])
</div>
{{-- feature --}}
<div class="col-md-6">
    @include('admin.layouts.forms.fields.select', [
        'select_name' => 'feature',
        'select_function' => ['all' => __('site.all'), '1' => __('site.active'), '0' => __('site.not_active')],
        'select_value' => old('feature') ?? request('feature'),
        'select_class' => 'select2',
        'select2' => true,
        'not_req' => true,
    ])
</div>
{{-- offer --}}
<div class="col-md-6">
    @include('admin.layouts.forms.fields.select', [
        'select_name' => 'offer',
        'select_function' => ['all' => __('site.all'), '1' => __('site.active'), '0' => __('site.not_active')],
        'select_value' => old('offer') ?? request('offer'),
        'select_class' => 'select2',
        'select2' => true,
        'not_req' => true,
    ])
</div>
{{-- free_shipping --}}
<div class="col-md-6">
    @include('admin.layouts.forms.fields.select', [
        'select_name' => 'free_shipping',
        'select_function' => ['all' => __('site.all'), '1' => __('site.active'), '0' => __('site.not_active')],
        'select_value' => old('free_shipping') ?? request('free_shipping'),
        'select_class' => 'select2',
        'select2' => true,
        'not_req' => true,
    ])
</div>
{{-- returned --}}
<div class="col-md-6">
    @include('admin.layouts.forms.fields.select', [
        'select_name' => 'returned',
        'select_function' => ['all' => __('site.all'), '1' => __('site.active'), '0' => __('site.not_active')],
        'select_value' => old('returned') ?? request('returned'),
        'select_class' => 'select2',
        'select2' => true,
        'not_req' => true,
    ])
</div>
{{-- min_price --}}
<div class="col-md-6">
    @include('admin.layouts.forms.fields.number', [
        'number_name' => 'min_price',
        'min' => 0,
        'not_req' => true,
        'placeholder' => __('site.min_price'),
        'number_value' => request('min_price') ?? null,
    ])
</div>
{{-- max_price --}}
<div class="col-md-6">
    @include('admin.layouts.forms.fields.number', [
        'number_name' => 'max_price',
        'min' => 0,
        'not_req' => true,
        'placeholder' => __('site.max_price'),
        'number_value' => request('max_price') ?? null,
    ])
</div>
{{-- units --}}
<div class="col-md-6">
    @include('admin.layouts.forms.fields.select', [
        'select_name' => 'unit',
        'select_function' => ['all' => __('site.all')] + $units,
        'select_value' => old('unit') ?? request('unit'),
        'select_class' => 'select2',
        'select2' => true,
        'not_req' => true,
    ])
</div>
{{-- category --}}
<div class="col-md-6">
    @include('admin.layouts.forms.fields.select', [
        'select_name' => 'category_id',
        'select_function' => ['all' => __('site.all')] + $categories,
        'select_value' => old('category_id') ?? request('category_id'),
        'select_class' => 'select2',
        'select2' => true,
        'not_req' => true,
    ])
</div>
{{-- brand --}}
<div class="col-md-6">
    @include('admin.layouts.forms.fields.select', [
        'select_name' => 'brand',
        'select_function' => ['all' => __('site.all')] + $brands,
        'select_value' => old('brand') ?? request('brand'),
        'select_class' => 'select2',
        'select2' => true,
        'not_req' => true,
    ])
</div>
{{-- new --}}
<div class="col-md-6">
    @include('admin.layouts.forms.fields.select', [
        'select_name' => 'new',
        'select_function' => ['all' => __('site.all'), '1' => __('site.yes'), '0' => __('site.no')],
        'select_value' => old('new') ?? request('new'),
        'select_class' => 'select2',
        'select2' => true,
        'not_req' => true,
    ])
</div>
{{-- special --}}
<div class="col-md-6">
    @include('admin.layouts.forms.fields.select', [
        'select_name' => 'special',
        'select_function' => ['all' => __('site.all'), '1' => __('site.yes'), '0' => __('site.no')],
        'select_value' => old('special') ?? request('special'),
        'select_class' => 'select2',
        'select2' => true,
        'not_req' => true,
    ])
</div>
{{-- filter --}}
<div class="col-md-6">
    @include('admin.layouts.forms.fields.select', [
        'select_name' => 'filter',
        'select_function' => ['all' => __('site.all'), '1' => __('site.yes'), '0' => __('site.no')],
        'select_value' => old('filter') ?? request('filter'),
        'select_class' => 'select2',
        'select2' => true,
        'not_req' => true,
    ])
</div>
{{-- sale --}}
<div class="col-md-6">
    @include('admin.layouts.forms.fields.select', [
        'select_name' => 'sale',
        'select_function' => ['all' => __('site.all'), '1' => __('site.yes'), '0' => __('site.no')],
        'select_value' => old('sale') ?? request('sale'),
        'select_class' => 'select2',
        'select2' => true,
        'not_req' => true,
    ])
</div>


{{-- buttons --}}
@include('admin.layouts.modals.filter.buttons', [
    'model' => 'brands',
])

{{-- Footer --}}
@include('admin.layouts.modals.filter.footer')
