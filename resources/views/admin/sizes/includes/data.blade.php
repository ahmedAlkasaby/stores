<tr>
    <td class="text-lg-center">{{ $size->nameLang() }}</td>
    {{-- active --}}
    @include('admin.layouts.tables.active', [
        'model' => 'sizes',
        'item' => $size,
        'param' => 'size',
    ])



    {{-- action --}}
    @include('admin.layouts.tables.actions', [
        'model' => 'sizes',
        'edit' => true,
        'show' => true,
        'delete' => true,
        'item' => $size,
    ])
</tr>

@include('admin.layouts.modals.delete', [
    'id' => $size->id,
    'main_name' => 'dashboard.sizes',
    'name' => 'size',
    'foreDelete' => $foreDelete ?? false,
])
