<tr>

    <td >{{ $store->nameLang() }}</td>
    <td >{{ $store->address }}</td>
    <td >{{ $store->order_id?? 0 }}</td>
<td >{{ optional($store->storeType)->nameLang() }}</td>
    <td >
        @if ($store->image)
        <img src="{{ asset( $store->image) }}" alt="{{ $store->nameLang() }}" class="rounded-circle" width="50"
            height="50">
        @else
        <img src="{{ asset('images/default.png') }}" alt="{{ $store->nameLang() }}" class="rounded-circle" width="50"
            height="50">
        @endif
    </td>
    {{-- active --}}
    @include('admin.layouts.tables.active', [
    "model" => "stores",
    "item" => $store,
    "param" => "store"
    ])

    {{-- action --}}
    @include('admin.layouts.tables.actions', [
    "model" => "stores",
    "edit" => true,
    "show" => true,
    "delete" => true,
    "item" => $store,
    ])
</tr>

@include('admin.layouts.modals.delete', [
"id" => $store->id,
"main_name" => "dashboard.stores",
"name" => "store",
"foreDelete" => $foreDelete ?? false,
])
