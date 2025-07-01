<tr>
    <td class="text-lg-center">{{ $delivery_time->nameLang() }}</td>
    <td class="text-lg-center">
        {{ \Carbon\Carbon::parse($delivery_time->start_hour)->format('H:i') }} -
        {{ \Carbon\Carbon::parse($delivery_time->end_hour)->format('H:i') }}
    </td>
    {{-- active --}}
    @include('admin.layouts.tables.active', [
        'model' => 'delivery_times',
        'item' => $delivery_time,
        'param' => 'delivery_time',
    ])



    {{-- action --}}
    @include('admin.layouts.tables.actions', [
        'model' => 'delivery_times',
        'edit' => true,
        'item' => $delivery_time,
    ])
</tr>

@include('admin.layouts.modals.delete', [
    'id' => $delivery_time->id,
    'main_name' => 'dashboard.delivery_times',
    'name' => 'delivery_time',
    'foreDelete' => $foreDelete ?? false,
])
