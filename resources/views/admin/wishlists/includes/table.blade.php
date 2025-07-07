
@include('admin.layouts.table.header', [
    'TitleTable' => __('site.wishlists'),
])
@include('admin.layouts.table.thead_info', [
    'columns' => ['site.user', 'site.product'],
])

<tbody class="table-border-bottom-0">
    @if ($wishlists->count() > 0)
        @each('admin.wishlists.includes.data', $wishlists, 'wishlist')
    @else
        @include('admin.layouts.table.empty', [($number = 6)])
    @endif
</tbody>
</table>
@include('admin.layouts.table.footer')
@include('admin.layouts.table.paginate', ['data' => $wishlists])
