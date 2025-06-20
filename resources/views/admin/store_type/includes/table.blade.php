@include('admin.layouts.table.header')
@include('admin.layouts.table.thead_info', [
'columns' => ['ID', 'site.name', 'site.image', 'site.action']
])

<tbody>
    @if($storeTypes->count() > 0)
    @each("admin.store_type.includes.data", $storeTypes, 'storeType')
    @else
    @include('admin.layouts.table.empty',[$number=5])
    @endif
</tbody>
</table>
@include('admin.layouts.table.paginate')
@include('admin.layouts.table.footer')