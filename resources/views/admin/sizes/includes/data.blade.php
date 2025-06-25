<tr>
    <td class="text-lg-end">{{ $size->id }}</td>
    <td class="text-lg-end">{{ $size->nameLang() }}</td>
    {{-- active --}}
    <td class="text-lg-end">
        <a href="{{ route('dashboard.sizes.toggle', ['size' => $size->id]) }}">
            <button type="button"
                class="btn {{ $size->active ? 'btn-success' : 'btn-danger' }} toggle-size waves-effect waves-light"
                data-size-id="{{ $size->id }}">
                <i class="fa-solid {{ $size->active ? 'fa-check' : 'fa-circle-xmark' }}"></i>
            </button>
        </a>
    </td>

    {{-- action --}}
    @include('admin.layouts.tables.actions', [
    "model" => "sizes",
    "edit" => true,
    "show" => true,
    "delete" => true,
    ])
</tr>

@include('admin.layouts.modals.delete', [
"id" => $size->id,
"main_name" => "dashboard.sizes",
"name" => "size",
"foreDelete" => $foreDelete ?? false,
])
