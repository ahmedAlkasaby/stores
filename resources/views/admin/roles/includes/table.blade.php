@include('admin.layouts.table.header',['TitleTable' => 'site.roles'])
@include('admin.layouts.table.thead_info', [
'columns' => [ 'site.role',"site.name" ,'site.action']
])

<tbody>
    @if($roles->count() > 0)
    @each("admin.roles.includes.data", $roles, 'role')
    @else
    @include('admin.layouts.table.empty',[$number=8])
    @endif
</tbody>
</table>
@include('admin.layouts.table.footer')
@include('admin.layouts.table.paginate',['data' => $roles])
