<div class="row">
    <div class="col-md-6">
        @include('admin.layouts.forms.fields.select', [
            'select_name' => 'user_id',
            'select_function' => $users,
            'select_value' => $address->user->id ?? null,
            'select_class' => 'select2',
            'select2' => true,
        ])
    </div>
    <div class="col-md-6">
        @include('admin.layouts.forms.fields.number', [
            'text_name' => 'phone',
            'text_value' => $address->phone ?? null,
            'label_name' => __('site.phone'),
        ])
    </div>
    <div class="col-md-6">
        @include('admin.layouts.forms.fields.text', [
            'text_name' => 'address',
            'text_value' => $address->address ?? null,
            'label_name' => __('site.address'),
            'label_req' => true,
        ])
    </div>
    <div class="col-md-6">
        @include('admin.layouts.forms.fields.select', [
            'select_name' => 'type',
            'select_function' => collect(\App\Enums\TypeAddressEnum::cases())->mapWithKeys(fn($case) => [$case->value => $case->label()])->toArray(),
            'select_value' => $address->type?->value ?? null,
            'select_class' => 'select2',
            'select2' => true,
        ])
    </div>
    <div class="col-md-6">
        @include('admin.layouts.forms.fields.text', [
            'text_name' => 'building',
            'text_value' => $address->building ?? null,
            'label_name' => __('site.building'),
        ])
    </div>
    <div class="col-md-6">
        @include('admin.layouts.forms.fields.select', [
            'select_name' => 'region_id',
            'select_function' => $regions,
            'select_value' => $address->region->id ?? null,
            'select_class' => 'select2',
            'select2' => true,
        ])
    </div>
    <div class="col-md-6">
        @include('admin.layouts.forms.fields.text', [
            'text_name' => 'floor',
            'text_value' => $address->floor ?? null,
            'label_name' => __('site.floor'),
        ])
    </div>
    <div class="col-md-6">
        @include('admin.layouts.forms.fields.select', [
            'select_name' => 'city_id',
            'select_function' => $cities,
            'select_value' => $address->city->id ?? null,
            'select_class' => 'select2',
            'select2' => true,
        ])
    </div>
    <div class="col-md-6">
        @include('admin.layouts.forms.fields.text', [
            'text_name' => 'apartment',
            'text_value' => $address->apartment ?? null,
            'label_name' => __('site.apartment'),
        ])
    </div>
    <div class="col-md-6">
        @include('admin.layouts.forms.fields.text', [
            'text_name' => 'longitude',
            'text_value' => $address->longitude ?? null,
            'label_name' => __('site.longitude'),
            'label_req' => true,
        ])
    </div>
    <div class="col-md-6">
        @include('admin.layouts.forms.fields.text', [
            'text_name' => 'latitude',
            'text_value' => $address->latitude ?? null,
            'label_name' => __('site.latitude'),
            'label_req' => true,
        ])
    </div>
    <div class="col-md-6">
        @include('admin.layouts.forms.fields.text', [
            'text_name' => 'additional_info',
            'text_value' => $address->additional_info ?? null,
            'label_name' => __('site.additional_info'),
        ])
    </div>
    <div class="mt-3">
        @include('admin.layouts.forms.buttons.save', [
            'save' => __('site.send'),
        ])

    </div>
</div>
