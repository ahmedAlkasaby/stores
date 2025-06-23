@include('admin.layouts.table.header')
@include('admin.layouts.table.thead_info', [
'columns' => ['ID', 'site.name',"site.order_id" ,'site.status', 'site.action']
])

<tbody>
    @if($units->count() > 0)
    @each("admin.units.includes.data", $units, 'unit')
    @else
    @include('admin.layouts.table.empty',[$number=6])
    @endif
</tbody>
</table>
@include('admin.layouts.table.footer')
@include('admin.layouts.table.paginate',['data' => $units])