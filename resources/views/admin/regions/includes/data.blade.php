<tr>
    <td class="text-lg-center">{{ $region->nameLang() }}</td>
    <td class="text-lg-center">{{ $region->city->nameLang() }}</td>
    <td class="text-lg-center">{{ $region->shipping }}</td>
    {{-- active --}}
    @include('admin.layouts.tables.active', [
        'model' => 'regions',
        'item' => $region,
        'param' => 'region',
    ])



    {{-- action --}}
    @include('admin.layouts.tables.actions', [
        'model' => 'regions',
        'edit' => true,
        'show' => true,
        'delete' => true,
        'item' => $region,
    ])
</tr>

@include('admin.layouts.modals.delete', [
    'id' => $region->id,
    'main_name' => 'dashboard.regions',
    'name' => 'region',
    'foreDelete' => $foreDelete ?? false,
])
