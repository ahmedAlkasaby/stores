<tr>
    <td class="text-lg-center">{{ $delivery->nameLang() }}</td>
    <td class="text-lg-center">
        {{ \Carbon\Carbon::parse($delivery->start_hour)->format('H:i') }} -
        {{ \Carbon\Carbon::parse($delivery->end_hour)->format('H:i') }}
    </td>
    {{-- active --}}
    @include('admin.layouts.tables.active', [
        'model' => 'deliveries',
        'item' => $delivery,
        'param' => 'delivery',
    ])



    {{-- action --}}
    @include('admin.layouts.tables.actions', [
        'model' => 'deliveries',
        'edit' => true,
        'item' => $delivery,
    ])
</tr>

@include('admin.layouts.modals.delete', [
    'id' => $delivery->id,
    'main_name' => 'dashboard.deliveries',
    'name' => 'delivery',
    'foreDelete' => $foreDelete ?? false,
])
