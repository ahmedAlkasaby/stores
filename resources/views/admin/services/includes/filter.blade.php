@include('admin.layouts.modals.filter.header', ['model' => 'services'])


{{-- Search by Name --}}
<div class="col-md-6">
    @include('admin.layouts.forms.fields.text', [
        'text_name' => 'name',
        'text_value' => request('name') ?? null,
        'label_name' => __('site.name'),
        'label_req' => true,
        "not_req" => true
    ])
</div>


{{-- Search by address --}}

<div class="col-md-6">
    @include('admin.layouts.forms.fields.text', [
        'text_name' => 'address',
        'text_value' => request('address') ?? null,
        'label_name' => __('site.address'),
        'label_req' => true,
        "not_req"=> true
    ])
</div>


{{-- Active Status --}}
<div class="col-md-6">

    @include('admin.layouts.forms.fields.select', [
        'select_name' => 'active',
        'select_function' =>
            ['all' => __('site.all'), '1' => __('site.active'), '0' => __('site.not_active')] ?? null,
        'select_value' => old('active') ?? request('active'),
        'select_class' => 'select2',
        'select2' => true,
        'not_req' => true,
    ])
</div>

<div class="col-md-6">




{{-- buttons --}}
@include('admin.layouts.modals.filter.buttons', ['model' => 'services'])

{{-- Footer --}}
@include('admin.layouts.modals.filter.footer')
