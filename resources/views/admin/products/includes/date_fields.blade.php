<div class="row">
    <div class="col-md-6">
        @include('admin.layouts.forms.fields.date', [
        'date_name' => 'date_start',
        'date_value' => old('date_start', $product->date_start ?? null),
        'placeholder' => 'YYYY-MM-DD HH:MM',
        'date_id' => 'flatpickr-datetime-start',
        'date_class' => ' flatpickr-datetime',
        'label_name' => __('site.date_start')
        ])
    </div>
    <div class="col-md-6">
        @include('admin.layouts.forms.fields.date', [
        'date_name' => 'date_end',
        'date_value' => old('date_end', $product->date_end ?? null),
        'placeholder' => 'YYYY-MM-DD HH:MM',
        'date_id' => 'flatpickr-datetime-end',
        'date_class' => ' flatpickr-datetime',
        'label_name' => __('site.date_end')
        ])
    </div>
</div>
