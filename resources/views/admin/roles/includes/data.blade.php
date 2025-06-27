<tr>

    <td >{{ $role->name }}</td>
    <td >{{ $role->display_name }}</td>

    {{-- action --}}
    @include('admin.layouts.tables.actions', [
    "model" => "roles",
    "edit" => true,
    "delete" => true,
    "item" => $role,
    ])
</tr>

@include('admin.layouts.modals.delete', [
"id" => $role->id,
"main_name" => "dashboard.roles",
"name" => "role",
"foreDelete" => $foreDelete ?? false,
])
