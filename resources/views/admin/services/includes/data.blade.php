<tr>

    <td class="text-lg-center">{{ $service->nameLang() }}</td>
    <td class="text-lg-center">{{ $service->order_id?? 0 }}</td>
    <td class="text-lg-center">
        @if ($service->image)
        <img src="{{ asset( $service->image) }}" alt="{{ $service->nameLang() }}" class="rounded-circle" width="50"
            height="50">
        @else
        <img src="{{ asset('images/default.png') }}" alt="{{ $service->nameLang() }}" class="rounded-circle" width="50"
            height="50">
        @endif
    </td>
    {{-- active --}}
    @include('admin.layouts.tables.active', [
    "model" => "services",
    "item" => $service,
    "param" => "service"
    ])

    {{-- action --}}
    @include('admin.layouts.tables.actions', [
    "model" => "services",
    "edit" => true,
    "show" => true,
    "delete" => true,
    "item" => $service,
    ])
</tr>

@include('admin.layouts.modals.delete', [
"id" => $service->id,
"main_name" => "dashboard.services",
"name" => "service",
"foreDelete" => $foreDelete ?? false,
])
