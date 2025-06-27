<tr>
    <td class="text-lg-center">{{ $addition->id }}</td>
    <td class="text-lg-center">{{ $addition->nameLang() }}</td>
    <td class="text-lg-center">{{ $addition->order_id ?? 0 }}</td>
    <td class="text-lg-center">{{ $addition->type }}</td>
    <td class="text-lg-center">{{ $addition->price }}</td>
    <td class="text-center">
        @if ($addition->image)
            <img src="{{ asset($addition->image) }}" alt="{{ $addition->nameLang() }}" class="rounded-circle"
                width="50" height="50">
        @else
            <img src="{{ asset('images/default.png') }}" alt="{{ $addition->nameLang() }}" class="rounded-circle"
                width="50" height="50">
        @endif
    </td>
    {{-- active --}}
    @include('admin.layouts.tables.active', [
        'model' => 'additions',
        'item' => $addition,
        'param' => 'addition',
    ])

    {{-- action --}}
    @include('admin.layouts.tables.actions', [
        'model' => 'additions',
        'edit' => true,
        'show' => true,
        'delete' => true,
        'item' => $addition,
    ])
</tr>

@include('admin.layouts.modals.delete', [
    'id' => $addition->id,
    'main_name' => 'dashboard.additions',
    'name' => 'addition',
    'foreDelete' => $foreDelete ?? false,
])
