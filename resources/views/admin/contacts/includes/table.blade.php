<div class="'table-responsive text-nowrap'">
    <table class="table">
        @include('admin.layouts.table.thead_info', [
            'columns' => [
                'site.email',
                'site.title',
                'site.message',
                'site.date',
                'site.seen',
                'site.action',
            ],
        ])

        <tbody>
            @if ($contacts->count() > 0)
                @each('admin.contacts.includes.data', $contacts, 'contact')
            @else
                @include('admin.layouts.table.empty', [($number = 6)])
            @endif
        </tbody>
    </table>
    @include('admin.layouts.table.footer')
    @include('admin.layouts.table.paginate', ['data' => $contacts])
