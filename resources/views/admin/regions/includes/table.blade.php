@include('admin.layouts.table.header', [
    'TitleTable' => __('site.regions'),
    'routeToCreate' => route('dashboard.regions.create'),
    "model" => "regions",
])

@include('admin.layouts.table.thead_info', [
    'columns' => [ 'site.name', 'site.city',"site.shipping","site.status", 'site.action'],
])

<tbody>
    @if ($regions->count() > 0)
        @each('admin.regions.includes.data', $regions, 'region')
    @else
        @include('admin.layouts.table.empty', [($number = 5)])
    @endif
</tbody>
</table>
@include('admin.layouts.table.footer')
@include('admin.layouts.table.paginate', ['data' => $regions])
