@include('admin.layouts.table.header')
@include('admin.layouts.table.thead_info', [
'columns' => ['ID', 'site.name', 'site.status', 'site.action']
])

<tbody>
    @if($sizes->count() > 0)
    @each("admin.sizes.includes.data", $sizes, 'size')
    @else
    @include('admin.layouts.table.empty',[$number=5])
    @endif
</tbody>
</table>
@include('admin.layouts.table.footer')
@include('admin.layouts.table.paginate',['data' => $sizes])