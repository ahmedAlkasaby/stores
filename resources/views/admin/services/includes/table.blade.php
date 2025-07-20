@include('admin.layouts.table.header',['TitleTable'=>__('site.services'),'routeToCreate' => route('dashboard.services.create'),'filter' => true ,"model" => "services"])
@include('admin.layouts.table.thead_info', [
'columns' => [ 'site.name' ,"site.order_id","site.image",'site.status', 'site.action']
])

<tbody>
    @if($services->count() > 0)
    @each("admin.services.includes.data", $services, 'service')
    @else
    @include('admin.layouts.table.empty',[$number=8])
    @endif
</tbody>
</table>
@include('admin.layouts.table.footer')
@include('admin.layouts.table.paginate',['data' => $services])
