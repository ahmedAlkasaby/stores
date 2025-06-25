<tr>
    <td class="text-lg-end">{{ $addition->id }}</td>
    <td class="text-lg-end">{{ $addition->nameLang() }}</td>
    <td class="text-lg-end">{{ $addition->order_id?? 0 }}</td>
    <td class="text-lg-end">{{ $addition->type }}</td>
    <td class="text-lg-end">{{ $addition->price }}</td>
    <td class="text-end">
        @if ($addition->image)
        <img src="{{ asset( $addition->image) }}" alt="{{ $addition->nameLang() }}" class="rounded-circle" width="50"
            height="50">
        @else
        <img src="{{ asset('images/default.png') }}" alt="{{ $addition->nameLang() }}" class="rounded-circle" width="50"
            height="50">
        @endif
    </td>
    {{-- active --}}
    <td class="text-lg-end">
        <a href="{{ route('dashboard.additions.toggle', ['addition' => $addition->id]) }}">
            <button type="button"
                class="btn {{ $addition->active ? 'btn-success' : 'btn-danger' }} toggle-addition waves-effect waves-light"
                data-addition-id="{{ $addition->id }}">
                <i class="fa-solid {{ $addition->active ? 'fa-check' : 'fa-circle-xmark' }}"></i>
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
                        data-bs-target="#deleteModal{{ $addition->id }}">
                        <i class="ti ti-trash me-1"></i> @lang('site.delete_forever')
                    </button>
                    <a class="dropdown-item" href="{{ route('dashboard.additions.restore', $addition->id) }}">
                        <i class="ti ti-rotate-clockwise me-1"></i> @lang('site.restore')
                    </a>
                </li>
                @else
                <li>
                    @if (auth()->user()->hasPermission('additions.update'))
                    <a class="dropdown-item" href="{{ route('dashboard.additions.edit', $addition->id) }}">
                        <i class="ti ti-pencil me-1"></i> @lang('site.Edit')
                    </a>
                    @else
                    <button disabled class="dropdown-item" disabled>
                        <i class="ti ti-pencil me-1"></i> @lang('site.Edit')
                    </button>
                    @endif
                    @if (auth()->user()->hasPermission('additions.read'))
                    <a class="dropdown-item" href="{{ route('dashboard.additions.show', $addition->id) }}">
                        <i class="ti ti-eye me-1"></i> @lang('site.Show')
                    </a>
                    @else
                    <button disabled class="dropdown-item" disabled>
                        <i class="ti ti-eye me-1"></i> @lang('site.Show')
                    </button>
                    @endif
                    @if (auth()->user()->hasPermission('additions.delete'))
                    <button class="dropdown-item delete-btn" data-bs-toggle="modal"
                        data-bs-target="#deleteModal{{ $addition->id }}">
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
"id" => $addition->id,
"main_name" => "dashboard.additions",
"name" => "addition",
"foreDelete" => $foreDelete ?? false,
])