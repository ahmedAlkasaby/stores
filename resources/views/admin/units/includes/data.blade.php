<tr>
    <td class="text-lg-center">{{ $unit->id }}</td>
    <td class="text-lg-center">{{ $unit->nameLang() }}</td>
    <td class="text-lg-center">{{ $unit->order_id ?? 0 }}</td>

    @include('admin.layouts.tables.active', [
        'model' => 'units',
        'item' => $unit,
        'param' => 'unit',
    ])

    {{-- action --}}
    @include('admin.layouts.tables.actions', [
        'model' => 'units',
        'edit' => true,
        'show' => true,
        'delete' => true,
        'item' => $unit,
    ])
</tr>

@include('admin.layouts.modals.delete', [
    'id' => $unit->id,
    'main_name' => 'dashboard.units',
    'name' => 'unit',
    'foreDelete' => $foreDelete ?? false,
])
