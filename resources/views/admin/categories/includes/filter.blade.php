@include('admin.layouts.modals.filter.header', ['model' => 'categories'])


{{-- Search by Name --}}
<div class="col-md-6">
    @include('admin.layouts.forms.fields.text', [
        'text_name' => 'search',
        'text_value' => request('search') ?? null,
        'label_name' => __('site.search'),
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
{{-- service --}}
<div class="col-md-6">

@include('admin.layouts.forms.fields.select', [
    'select_name' => 'service_id',
    'select_function' =>
        ['all' => __('site.all')] +
            $services->mapWithKeys(fn($service) => [$service->id => $service->nameLang()])->toArray() ??
        null,
    'select_value' => old('service') ?? request('service'),
    'select_class' => 'select2',
    'select2' => true,
    'not_req' => true,
])

</div>
{{-- Parent --}}
<div class="col-md-6">

@include('admin.layouts.forms.fields.select', [
    'select_name' => 'parent_id',
    'select_function' =>
        ["all"=>__('site.all')] +
            $parentCategories->mapWithKeys(fn($category) => [$category->id => $category->nameLang()])->toArray() ??
        null,
    'select_value' =>  request('parent_id'),
    'select_class' => 'select2',
    'select2' => true,
    'not_req' => true,
])

</div>
{{-- buttons --}}
@include('admin.layouts.modals.filter.buttons', ['model' => 'categories'])

{{-- Footer --}}
@include('admin.layouts.modals.filter.footer')
