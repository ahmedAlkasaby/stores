@include('admin.layouts.table.header', [
    'TitleTable' => __('site.deliveries'),
    'routeToCreate' => route('dashboard.deliveries.create'),
])

@include('admin.layouts.table.thead_info', [
    'columns' => [ 'site.name', 'site.hours', "site.status",'site.action'],
])

<tbody>
    @if ($deliveries->count() > 0)
        @each('admin.deliveries.includes.data', $deliveries, 'delivery')
    @else
        @include('admin.layouts.table.empty', [($number = 5)])
    @endif
</tbody>
</table>
@include('admin.layouts.table.footer')
@include('admin.layouts.table.paginate', ['data' => $deliveries])
