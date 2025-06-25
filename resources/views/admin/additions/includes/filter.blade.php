@include('admin.layouts.modals.filter.header', ['model' => 'additions'])


{{-- Search by Name --}}
<div class="col-md-6">
    <label for="name" class="form-label">{{ __('site.name') }}</label>
    <input type="text" name="name" id="name" class="form-control" value="{{ request('name') }}"
        placeholder="{{ __('site.name') }}">
</div>
<div class="col-md-6">
    <label for="price" class="form-label">{{ __('site.price') }}</label>
    <input type="text" name="price" id="price" class="form-control" value="{{ request('price') }}"
        placeholder="{{ __('site.price') }}">
</div>


{{-- Search by address --}}
<div class="col-md-6">
    @include('admin.layouts.forms.fields.select', [
        'select_name' => 'type',
        'select_function' => ['all' => __('site.all'), 'paid' => __('site.paid'), 'free' => __('site.free')],
        'select_value' => old('type') ?? request('type'),
        'select_class' => 'select2',
        'select2' => true,
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
@include('admin.layouts.modals.filter.buttons', ['model' => 'additions'])

{{-- Footer --}}
@include('admin.layouts.modals.filter.footer')
