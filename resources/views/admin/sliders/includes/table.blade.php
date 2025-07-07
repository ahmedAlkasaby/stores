@include('admin.layouts.table.header', [
    'TitleTable' => __('site.sliders'),
    'routeToCreate' => route('dashboard.sliders.create'),
])

@include('admin.layouts.table.thead_info', [
    'columns' => ['site.name', 'site.order_id',"site.product", 'site.image', 'site.status', 'site.action'],
])

<tbody class="table-border-bottom-0">
    @if ($sliders->count() > 0)
        @each('admin.sliders.includes.data', $sliders, 'slider')
    @else
        @include('admin.layouts.table.empty', [($number = 6)])
    @endif
</tbody>
</table>
@include('admin.layouts.table.footer')
@include('admin.layouts.table.paginate', ['data' => $sliders])
