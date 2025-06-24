@include('admin.layouts.table.header')
@include('admin.layouts.table.thead_info', [
'columns' => ['ID', 'site.name',"site.address" ,"site.order_id","site.store_type","site.image",'site.status', 'site.action']
])

<tbody>
    @if($stores->count() > 0)
    @each("admin.stores.includes.data", $stores, 'store')
    @else
    @include('admin.layouts.table.empty',[$number=8])
    @endif
</tbody>
</table>
@include('admin.layouts.table.footer')
@include('admin.layouts.table.paginate',['data' => $stores])
