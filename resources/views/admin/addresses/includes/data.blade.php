<tr>

    <td class="text-lg-center">{{ $address->user->name }}</td>
    <td class="text-lg-center">{{ $address->city->nameLang() ?? __('site.null')  }}</td>
    <td class="text-lg-center">{{ $address->region->nameLang() ?? __('site.null') }}</td>
    <td class="text-lg-center">{{ $address->address }}</td>
    <td class="text-lg-center">{{ $address->phone }}</td>
    {{-- location --}}
    <td class="text-lg-center">
        <a href="https://www.google.com/maps?q={{ $address->latitude }},{{ $address->longitude }}" target="_blank">
            <button disabled type="button" class="btn btn-success active-cities waves-effect waves-light">
                <i class="fa-solid fa-location-dot"></i>
            </button>
        </a>
    </td>



    {{-- action --}}
    @include('admin.layouts.tables.actions', [
        'model' => 'addresses',
        'edit' => true,
        'item' => $address,
    ])
</tr>

@include('admin.layouts.modals.delete', [
    'id' => $address->id,
    'main_name' => 'dashboard.addresses',
    'name' => 'address',
    'foreDelete' => $foreDelete ?? false,
])
