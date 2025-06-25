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
    <td class="text-lg-end">
        <div class="dropdown">
            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                <i class="ti ti-dots-vertical"></i>
            </button>
            <div class="dropdown-menu">

                {{-- @endif --}}
                @if (request()->has('deleted'))
                <li>
                    <button class="dropdown-item delete-btn" data-bs-toggle="modal"
                        data-bs-target="#deleteModal{{ $size->id }}">
                        <i class="ti ti-trash me-1"></i> @lang('site.delete_forever')
                    </button>
                    <a class="dropdown-item" href="{{ route('dashboard.sizes.restore', $size->id) }}">
                        <i class="ti ti-rotate-clockwise me-1"></i> @lang('site.restore')
                    </a>
                </li>
                @else
                <li>
                    @if (auth()->user()->hasPermission('categories-update'))
                    <a class="dropdown-item" href="{{ route('dashboard.sizes.edit', $size->id) }}">
                        <i class="ti ti-pencil me-1"></i> @lang('site.Edit')
                    </a>
                    @else
                    <button disabled class="dropdown-item" disabled>
                        <i class="ti ti-pencil me-1"></i> @lang('site.Edit')
                    </button>
                    @endif

                    {{-- @if (auth()->user()->hasPermission('categories-delete')) --}}
                    <button class="dropdown-item delete-btn" data-bs-toggle="modal"
                        data-bs-target="#deleteModal{{ $size->id }}">
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
"id" => $size->id,
"main_name" => "dashboard.sizes",
"name" => "size",
"foreDelete" => $foreDelete ?? false,
])
