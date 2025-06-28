@include('admin.layouts.table.header',['TitleTable' => 'site.brands'])
@include('admin.layouts.table.thead_info', [
'columns' => [ 'site.name',"site.order_id" ,"site.image",'site.status', 'site.action']
])

<tbody class="table-border-bottom-0">
    @if($brands->count() > 0)
    @each("admin.brands.includes.data", $brands, 'brand')
    @else
    @include('admin.layouts.table.empty',[$number=6])
    @endif
</tbody>
</table>
@include('admin.layouts.table.footer')
@include('admin.layouts.table.paginate',['data' => $brands])
