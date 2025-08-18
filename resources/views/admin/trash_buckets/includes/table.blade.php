@include('admin.layouts.table.header', [
    'TitleTable' => __('site.trash_buckets'),
    // 'filter' => true,
    'model'=>'trash_buckets',
])

@include('admin.layouts.table.thead_info', [
    'columns' => ['site.model', 'site.name', 'site.user', 'site.created_at', 'site.actions'],
])

<tbody class="table-border-bottom-0">
    @if ($trashBuckets->count() > 0)
        @each('admin.trash_buckets.includes.data', $trashBuckets, 'trashBucket')
    @else
        @include('admin.layouts.table.empty', [($number = 6)])
    @endif
</tbody>
</table>
@include('admin.layouts.table.footer')
@include('admin.layouts.table.paginate', ['data' => $trashBuckets])
