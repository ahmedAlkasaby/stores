<tr>
    <td class="text-lg-end">{{ $category->id }}</td>
    <td class="text-lg-end">{{ $category->nameLang() }}</td>
    <td class="text-lg-end">{{ $category->store?->nameLang() }}</td>
    <td class="text-lg-end">{{ $category->order_id?? 0 }}</td>
    <td class="text-lg-end">{{ $category->parent?->nameLang()?? null }}</td>
    <td class="text-end">
        @if ($category->image)
        <img src="{{ asset( $category->image) }}" alt="{{ $category->nameLang() }}" class="rounded-circle" width="50"
            height="50">
        @else
        <img src="{{ asset('images/default.png') }}" alt="{{ $category->nameLang() }}" class="rounded-circle" width="50"
            height="50">
        @endif
    </td>
    {{-- active --}}
    <td class="text-lg-end">
        <a href="{{ route('dashboard.categories.toggle', ['category' => $category->id]) }}">
            <button type="button"
                class="btn {{ $category->active ? 'btn-success' : 'btn-danger' }} toggle-category waves-effect waves-light"
                data-category-id="{{ $category->id }}">
                <i class="fa-solid {{ $category->active ? 'fa-check' : 'fa-circle-xmark' }}"></i>
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
                        data-bs-target="#deleteModal{{ $category->id }}">
                        <i class="ti ti-trash me-1"></i> @lang('site.delete_forever')
                    </button>
                    <a class="dropdown-item" href="{{ route('dashboard.categories.restore', $category->id) }}">
                        <i class="ti ti-rotate-clockwise me-1"></i> @lang('site.restore')
                    </a>
                </li>
                @else
                <li>
                    {{-- @if (auth()->user()->hasPermission('categories.update')) --}}
                    <a class="dropdown-item" href="{{ route('dashboard.categories.edit', $category->id) }}">
                        <i class="ti ti-pencil me-1"></i> @lang('site.Edit')
                    </a>
                    {{-- @else --}}
                    <button disabled class="dropdown-item" disabled>
                        <i class="ti ti-pencil me-1"></i> @lang('site.Edit')
                    </button>
                    {{-- @endif --}}
                    {{-- @if (auth()->user()->hasPermission('categories.read')) --}}
                    <a class="dropdown-item" href="{{ route('dashboard.categories.show', $category->id) }}">
                        <i class="ti ti-eye me-1"></i> @lang('site.Show')
                    </a>
                    {{-- @else --}}
                    <button disabled class="dropdown-item" disabled>
                        <i class="ti ti-eye me-1"></i> @lang('site.Show')
                    </button>
                    {{-- @endif --}}
                    {{-- @if (auth()->user()->hasPermission('categories.delete')) --}}
                    <button class="dropdown-item delete-btn" data-bs-toggle="modal"
                        data-bs-target="#deleteModal{{ $category->id }}">
                        <i class="ti ti-trash me-1"></i> @lang('site.delete')
                    </button>
                    {{-- @else --}}
                    <button class="dropdown-item" disabled>
                        <i class="ti ti-trash me-1"></i> @lang('site.delete')
                    </button>
                    {{-- @endif --}}
                </li>
                @endif
                </li>
            </div>
        </div>
    </td>
</tr>

@include('admin.layouts.modals.delete', [
"id" => $category->id,
"main_name" => "dashboard.categories",
"name" => "category",
"foreDelete" => $foreDelete ?? false,
])