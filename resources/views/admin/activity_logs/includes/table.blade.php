@include('admin.layouts.table.header', [
    'TitleTable' => __('site.activity_logs'),
    'filter' => true,
    'model'=>'activity_logs',
])

@include('admin.layouts.table.thead_info', [
    'columns' => ['site.user', 'site.action', 'site.model', 'site.created_at', 'site.changes'],
])

<tbody class="table-border-bottom-0">
    @if ($activityLogs->count() > 0)
        @each('admin.activity_logs.includes.data', $activityLogs, 'activityLog')
    @else
        @include('admin.layouts.table.empty', [($number = 6)])
    @endif
</tbody>
</table>
@include('admin.layouts.table.footer')
@include('admin.layouts.table.paginate', ['data' => $activityLogs])
