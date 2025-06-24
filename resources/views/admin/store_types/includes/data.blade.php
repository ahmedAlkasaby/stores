<tr>
    <td class="text-lg-end">{{ $storeType->id }}</td>
    <td class="text-lg-end">{{ $storeType->nameLang() }}</td>

    {{-- image --}}
    <td class="text-end">
        @if ($storeType->image)
        <img src="{{ asset( $storeType->image) }}" alt="{{ $storeType->nameLang() }}" class="rounded-circle" width="50"
            height="50">
        @else
        <img src="{{ asset('images/default.png') }}" alt="{{ $storeType->nameLang() }}" class="rounded-circle"
            width="50" height="50">
        @endif
    </td>

     {{-- active --}}
    @include('admin.layouts.tables.active', [
    "model" => "store_types",
    "item" => $storeType,
    "param" => "storeType"
    ])


    {{-- action --}}
    @include('admin.layouts.tables.actions', [
    "model" => "store_types",
    "edit" => true,
    "show" => true,
    "delete" => true,
    ])
</tr>

@include('admin.layouts.modals.delete', [
"id" => $storeType->id,
"main_name" => "dashboard.store_types",
"name" => "store_type",
"foreDelete" => $foreDelete ?? false,
])
