@include('admin.layouts.table.header')
@include('admin.layouts.table.thead_info', [
'columns' => ['ID', 'site.name',"site.store" ,"site.order_id","site.category_parent","site.image",'site.status', 'site.action']
])

<tbody>
    @if($categories->count() > 0)
    @each("admin.categories.includes.data", $categories, 'category')
    @else
    @include('admin.layouts.table.empty',[$number=8])
    @endif
</tbody>
</table>
@include('admin.layouts.table.footer')
@include('admin.layouts.table.paginate',['data' => $categories])