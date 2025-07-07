@include('admin.layouts.table.header', [
'TitleTable' => __('site.additions'),
'routeToCreate' => route('dashboard.additions.create'),
'filter' => true,
])
@include('admin.layouts.table.thead_info', [
'columns' => [ 'site.name',"site.order_id","site.type" ,"site.price","site.image",'site.status', 'site.action']
])

<tbody>
    @if($additions->count() > 0)
    @each("admin.additions.includes.data", $additions, 'addition')
    @else
    @include('admin.layouts.table.empty',[$number=8])
    @endif
</tbody>
</table>
@include('admin.layouts.table.footer')
@include('admin.layouts.table.paginate',['data' => $additions])