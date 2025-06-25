@include('admin.layouts.modals.filter.header',["model"=>"brands"])

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

{{-- Active Status --}}
<div class="col-md-6">
    <label for="active" class="form-label">{{ __('site.status') }}</label>
    <select name="active" id="active" class="form-select">
        <option value="all">{{ __('site.both') }}</option>
        <option value="1" @selected(request('active')==='1' )>{{ __('site.active') }}</option>
        <option value="0" @selected(request('active')==='0' )>{{ __('site.not_active') }}</option>
    </select>
</div>
<div class="col-md-6">
    <label for="deleted" class="form-label">{{ __('site.trash') }}</label>
    <select name="deleted" id="deleted" class="form-select">
        <option value="1" @selected(request('deleted')==='1' )>{{ __('site.deleted') }}</option>
        <option value="0" @selected(request('deleted')==='0' )>{{ __('site.not_deleted') }}</option>
    </select>
</div>

{{-- buttons --}}
@include('admin.layouts.modals.filter.buttons',[
'model' => 'brands'])

{{-- Footer --}}
@include('admin.layouts.modals.filter.footer')