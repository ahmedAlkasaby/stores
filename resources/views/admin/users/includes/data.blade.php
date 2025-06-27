<tr>

    <td>
        <div class="d-flex align-items-center">
            <img src="{{ asset($user->image ?? 'admin/assets/img/avatars/1.png') }}" class="rounded-circle me-3"
                width="32" height="32" alt="Avatar">
            <div class="d-flex flex-column">
                <a href="{{ route('dashboard.users.show', $user->id) }}" class="fw-medium text-truncate">
                    {{ $user->name }}
                </a>
                <small>{{ $user->email }}</small>
            </div>
        </div>
      
    </td>

    <td>{{ $user->phone }}</td>
    <td>{{ $user->type }}</td>
    <td>{{ $user->active }}</td>

    {{-- action --}}
    @include('admin.layouts.tables.actions', [
    "model" => "users",
    "edit" => true,
    "delete" => true,
    "item" => $user,
    ])
</tr>

@include('admin.layouts.modals.delete', [
"id" => $user->id,
"main_name" => "dashboard.users",
"name" => "user",
"foreDelete" => $foreDelete ?? false,
])
