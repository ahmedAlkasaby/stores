@include('admin.layouts.table.header', [
    'TitleTable' => __('site.cities'),
    'routeToCreate' => route('dashboard.cities.create'),
    'filter' => false,
    "model" => "cities",
])

@include('admin.layouts.table.thead_info', [
    'columns' => [ 'site.name',"site.shipping", 'site.status', 'site.action'],
])

<tbody>
    @if ($cities->count() > 0)
        @each('admin.cities.includes.data', $cities, 'city')
    @else
        @include('admin.layouts.table.empty', [($number = 5)])
    @endif
</tbody>
</table>
@include('admin.layouts.table.footer')
@include('admin.layouts.table.paginate', ['data' => $cities])
