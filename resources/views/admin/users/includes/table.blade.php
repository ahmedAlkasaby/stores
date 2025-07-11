@include('admin.layouts.table.header',['TitleTable'=>__('site.'.$class),'routeToCreate' =>
route('dashboard.users.create'),'model'=>'users'])
@include('admin.layouts.table.thead_info', [
'columns' => [ 'site.user' ,"site.phone",'site.type','site.status','site.action']
])

<tbody class="table-border-bottom-0">
    @if($users->count() > 0)
    @each("admin.users.includes.data", $users, 'user')
    @else
    @include('admin.layouts.table.empty',[$number=8])
    @endif
</tbody>
@include('admin.layouts.table.footer')
@include('admin.layouts.table.paginate',['data' => $users])
