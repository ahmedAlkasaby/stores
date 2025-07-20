<button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal"
    data-bs-target="#changesModal{{ $activityLog->id }}">
    {{ __('site.changes') }}
</button>

<!-- Modal -->
<div class="modal fade" id="changesModal{{ $activityLog->id }}" tabindex="-1"
    aria-labelledby="changesModalLabel{{ $activityLog->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="changesModalLabel{{ $activityLog->id }}">@lang('site.changes')</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="إغلاق"></button>
            </div>
            <div class="modal-body">
                @php
                $changes = json_decode($activityLog->changes, true);
                $modelClass = $activityLog->model_type;
                $model = class_exists($modelClass) ? $modelClass::find($activityLog->model_id) : null;
                @endphp
                <h3 class="text-lg font-semibold mb-2">{{ __('site.changes') }}</h3>
               <table class="table table-bordered table-striped table-hover align-middle text-center">
    <thead class="table-light">
        <tr>
            <th style="width: 30%;">{{ __('site.attribute') }}</th>
            <th style="width: 35%;" class="text-danger">{{ __('site.before') }}</th>
            <th style="width: 35%;" class="text-success">{{ __('site.after') }}</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($changes as $attribute => $values)
            <tr>
                <td><strong class="text-dark">{{ $attribute }}</strong></td>
                <td>{{ $activityLog->formatChangeValue($model, $attribute, $values['old'] ?? '-') }}</td>
                <td>{{ $activityLog->formatChangeValue($model, $attribute, $values['new'] ?? '-') }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="3" class="text-muted">{{ __('site.no_changes_found') }}</td>
            </tr>
        @endforelse
    </tbody>
</table>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('site.close') }}</button>
            </div>
        </div>
    </div>
</div>