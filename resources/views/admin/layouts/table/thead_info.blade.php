<thead class="border-top">
    <tr>
        @foreach($columns as $column)
        <th class="text-lg-end">{{ __($column) }}</th>
        @endforeach
    </tr>
</thead>