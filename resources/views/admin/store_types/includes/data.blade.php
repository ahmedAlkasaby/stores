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
    {{-- action --}}
    <td class="text-lg-end">
        <div class="dropdown">
            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                <i class="ti ti-dots-vertical"></i>
            </button>
            <div class="dropdown-menu">


                <li>
                    @if (auth()->user()->hasPermission('store_types.update'))
                    <a class="dropdown-item" href="{{ route('dashboard.store_types.edit', $storeType->id) }}">
                        <i class="ti ti-pencil me-1"></i> @lang('site.Edit')
                    </a>
                    @else
                    <button disabled class="dropdown-item" disabled>
                        <i class="ti ti-pencil me-1"></i> @lang('site.Edit')
                    </button>
                    @endif
                     @if (auth()->user()->hasPermission('store_types.show'))
                    <a class="dropdown-item" href="{{ route('dashboard.store_types.show', $storeType->id) }}">
                        <i class="ti ti-eye me-1"></i> @lang('site.Show')
                    </a>
                    @else
                    <button disabled class="dropdown-item" disabled>
                        <i class="ti ti-eye me-1"></i> @lang('site.Show')
                    </button>
                    @endif
                    @if (auth()->user()->hasPermission('store_types.delete'))
                    <button class="dropdown-item delete-btn" data-bs-toggle="modal"
                        data-bs-target="#deleteModal{{ $storeType->id }}">
                        <i class="ti ti-trash me-1"></i> @lang('site.delete')
                    </button>
                    @else
                    <button class="dropdown-item" disabled>
                        <i class="ti ti-trash me-1"></i> @lang('site.delete')
                    </button>
                    @endif
                </li>
                
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
