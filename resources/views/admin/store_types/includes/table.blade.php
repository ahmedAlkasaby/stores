@include('admin.layouts.table.header',['TitleTable' => __('site.store_types'),'routeToCreate' => route('dashboard.store_types.create')])
@include('admin.layouts.table.thead_info', [
'columns' => [ 'site.name', 'site.image', 'site.status','site.action']
])

<tbody>
    @if($storeTypes->count() > 0)
    @each("admin.store_types.includes.data", $storeTypes, 'storeType')
    @else
    @include('admin.layouts.table.empty',[$number=5])
    @endif
</tbody>
</table>
@include('admin.layouts.table.footer')
@include('admin.layouts.table.paginate',['data' => $storeTypes])
