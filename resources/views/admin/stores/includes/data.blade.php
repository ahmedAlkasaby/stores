<tr>
    <td class="text-lg-end">{{ $store->id }}</td>
    <td class="text-lg-end">{{ $store->nameLang() }}</td>
    <td class="text-lg-end">{{ $store->address }}</td>
    <td class="text-lg-end">{{ $store->order_id?? 0 }}</td>
    <td class="text-lg-end">{{ $store->storeType->nameLang()?? 0 }}</td>
    <td class="text-end">
        @if ($store->image)
        <img src="{{ asset( $store->image) }}" alt="{{ $store->nameLang() }}" class="rounded-circle" width="50"
            height="50">
        @else
        <img src="{{ asset('images/default.png') }}" alt="{{ $store->nameLang() }}" class="rounded-circle" width="50"
            height="50">
        @endif
    </td>
    {{-- active --}}
    <td class="text-lg-end">
        <a href="{{ route('dashboard.stores.toggle', ['store' => $store->id]) }}">
            <button type="button"
                class="btn {{ $store->active ? 'btn-success' : 'btn-danger' }} toggle-store waves-effect waves-light"
                data-store-id="{{ $store->id }}">
                <i class="fa-solid {{ $store->active ? 'fa-check' : 'fa-circle-xmark' }}"></i>
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
                        data-bs-target="#deleteModal{{ $store->id }}">
                        <i class="ti ti-trash me-1"></i> @lang('site.delete_forever')
                    </button>
                    <a class="dropdown-item" href="{{ route('dashboard.stores.restore', $store->id) }}">
                        <i class="ti ti-rotate-clockwise me-1"></i> @lang('site.restore')
                    </a>
                </li>
                @else
                <li>
                    @if (auth()->user()->hasPermission('stores.update'))
                    <a class="dropdown-item" href="{{ route('dashboard.stores.edit', $store->id) }}">
                        <i class="ti ti-pencil me-1"></i> @lang('site.Edit')
                    </a>
                    @else
                    <button disabled class="dropdown-item" disabled>
                        <i class="ti ti-pencil me-1"></i> @lang('site.Edit')
                    </button>
                    @endif

                    @if (auth()->user()->hasPermission('stores.delete'))
                    <button class="dropdown-item delete-btn" data-bs-toggle="modal"
                        data-bs-target="#deleteModal{{ $store->id }}">
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
"id" => $store->id,
"main_name" => "dashboard.stores",
"name" => "store",
"foreDelete" => $foreDelete ?? false,
])