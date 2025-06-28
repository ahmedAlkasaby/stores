<tr>
    <td class="text-lg-end">{{ $unit->id }}</td>
    <td class="text-lg-end">{{ $unit->nameLang() }}</td>
    <td class="text-lg-end">{{ $unit->order_id?? 0 }}</td>
    
    {{-- active --}}
    <td class="text-lg-end">
        <a href="{{ route('dashboard.units.toggle', ['unit' => $unit->id]) }}">
            <button type="button"
                class="btn {{ $unit->active ? 'btn-success' : 'btn-danger' }} toggle-unit waves-effect waves-light"
                data-unit-id="{{ $unit->id }}">
                <i class="fa-solid {{ $unit->active ? 'fa-check' : 'fa-circle-xmark' }}"></i>
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
                @if (request()->has('deleted')&& request('deleted') === "1")
                <li>
                    <button class="dropdown-item delete-btn" data-bs-toggle="modal"
                        data-bs-target="#deleteModal{{ $unit->id }}">
                        <i class="ti ti-trash me-1"></i> @lang('site.delete_forever')
                    </button>
                    <a class="dropdown-item" href="{{ route('dashboard.units.restore', $unit->id) }}">
                        <i class="ti ti-rotate-clockwise me-1"></i> @lang('site.restore')
                    </a>
                </li>
                @else
                <li>
                    @if (auth()->user()->hasPermission('units.update'))
                    <a class="dropdown-item" href="{{ route('dashboard.units.edit', $unit->id) }}">
                        <i class="ti ti-pencil me-1"></i> @lang('site.Edit')
                    </a>
                    @else
                    <button disabled class="dropdown-item" disabled>
                        <i class="ti ti-pencil me-1"></i> @lang('site.Edit')
                    </button>
                    @endif
                    @if (auth()->user()->hasPermission('units.read'))
                    <a class="dropdown-item" href="{{ route('dashboard.units.show', $unit->id) }}">
                        <i class="ti ti-eye me-1"></i> @lang('site.Show')
                    </a>
                    @else
                    <button disabled class="dropdown-item" disabled>
                        <i class="ti ti-eye me-1"></i> @lang('site.Show')
                    </button>
                    @endif

                    @if (auth()->user()->hasPermission('units.delete'))
                    <button class="dropdown-item delete-btn" data-bs-toggle="modal"
                        data-bs-target="#deleteModal{{ $unit->id }}">
                        <i class="ti ti-trash me-1"></i> @lang('site.delete')
                    </button>
                    @else
                    <button class="dropdown-item" disabled>
                        <i class="ti ti-trash me-1"></i> @lang('site.delete')
                    </button>
                    @endif
                </li>
                @endif
                </li>
            </div>
        </div>
    </td>
</tr>

@include('admin.layouts.modals.delete', [
"id" => $unit->id,
"main_name" => "dashboard.units",
"name" => "unit",
"foreDelete" => $foreDelete ?? false,
])