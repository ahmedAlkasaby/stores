@include('admin.layouts.modals.filter.header',["model"=>"stores"])

{{-- Search by Image --}}



{{-- Search by Order ID --}}
<div class="col-md-6">
    <label for="order_id" class="form-label">{{ __('site.order_id') }}</label>
    <input type="text" name="order_id" id="order_id" class="form-control" value="{{ request('order_id') }}"
        placeholder="{{ __('site.order_id') }}">
</div>

{{-- Search by Name --}}
<div class="col-md-6">
    <label for="name" class="form-label">{{ __('site.name') }}</label>
    <input type="text" name="name" id="name" class="form-control" value="{{ request('name') }}"
        placeholder="{{ __('site.name') }}">
</div>


{{-- Search by address --}}
<div class="col-md-6">
    <label for="address" class="form-label">{{ __('site.address') }}</label>
    <input type="text" name="address" id="address" class="form-control" value="{{ request('address') }}"
        placeholder="{{ __('site.address') }}">
</div>

{{-- Active Status --}}
<div class="col-md-6">
    <label for="active" class="form-label">{{ __('site.status') }}</label>
    <select name="active" id="active" class="form-select">
        <option value="all">{{ __('site.both') }}</option>
        <option value="1" @selected(request('active')==='1' )>{{ __('site.active') }}</option>
        <option value="0" @selected(request('active')==='0' )>{{ __('site.not_active') }}</option>
    </select>
</div>
@include("admin.layouts.forms.fields.select",[
'select_name' => 'store_type_id',
'select_function' => $storeTypes->mapWithKeys(fn($storeType) => [$storeType->id => $storeType->nameLang()])->toArray()
?? null,
'select_value' => $store->store_type_id ?? null,
'select_class' => 'select2',
'select2' => true,
])

{{-- buttons --}}
@include('admin.layouts.modals.filter.buttons',
['model' => 'stores'])

{{-- Footer --}}
@include('admin.layouts.modals.filter.footer')
