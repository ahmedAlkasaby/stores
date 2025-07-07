@include('admin.layouts.modals.filter.header', ['model' => 'regions'])





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


{{-- buttons --}}
@include('admin.layouts.modals.filter.buttons', [
    'model' => 'brands',
])

{{-- Footer --}}
@include('admin.layouts.modals.filter.footer')
