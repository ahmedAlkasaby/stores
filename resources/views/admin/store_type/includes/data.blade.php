<tr>
    <td class="text-lg-center">{{ $storeType->id }}</td>
    <td class="text-lg-center">{{ $storeType->nameLang() }}</td>

    {{-- image --}}
    <td class="text-center">
        @if ($storeType->image)
        <img src="{{ asset( $storeType->image) }}" alt="{{ $storeType->nameLang() }}" class="rounded-circle"
            width="50" height="50">
        @else
        <img src="{{ asset('images/default.png') }}" alt="{{ $storeType->nameLang() }}" class="rounded-circle"
            width="50" height="50">
        @endif
    </td>
    {{-- action --}}
    <td class="text-lg-center">
        <div class="dropdown">
            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                <i class="ti ti-dots-vertical"></i>
            </button>
            <div class="dropdown-menu">

                {{-- @endif --}}
                @if(Route::is('dashboard.store_types.deleted'))
                <li>
                    <button class="dropdown-item delete-btn" data-bs-toggle="modal"
                        data-bs-target="#deleteModal{{ $storeType->id }}">
                        <i class="ti ti-trash me-1"></i> @lang('site.delete_forever')
                    </button>
                    <a class="dropdown-item" href="{{ route('dashboard.store_types.restore', $storeType->id) }}">
                        <i class="ti ti-rotate-clockwise me-1"></i> @lang('site.restore')
                    </a>
                </li>
                @else
                <li>
                    {{-- @if (auth()->user()->hasPermission('categories-update')) --}}
                    <a class="dropdown-item" href="{{ route('dashboard.store_types.edit', $storeType->id) }}">
                        <i class="ti ti-pencil me-1"></i> @lang('site.Edit')
                    </a>
                    {{-- @else --}}
                    <button disabled class="dropdown-item" disabled>
                        <i class="ti ti-pencil me-1"></i> @lang('site.Edit')
                    </button>
                    {{-- @endif --}}

                    {{-- @if (auth()->user()->hasPermission('categories-delete')) --}}
                    <button class="dropdown-item delete-btn" data-bs-toggle="modal"
                        data-bs-target="#deleteModal{{ $storeType->id }}">
                        <i class="ti ti-trash me-1"></i> @lang('site.delete')
                    </button>
                    {{-- @else --}}
                    <button class="dropdown-item" disabled>
                        <i class="ti ti-trash me-1"></i> @lang('site.delete')
                    </button>
                </li>
                @endif
                </li>
            </div>
        </div>
    </td>
</tr>

@include('admin.layouts.modals.delete', [
"id" => $storeType->id,
"main_name" => "dashboard.store_types",
"name" => "store_type",
"foreDelete" => $foreDelete ?? false,
])