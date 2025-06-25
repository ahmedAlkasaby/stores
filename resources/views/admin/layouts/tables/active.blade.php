 <td class="text-lg-end">
        @if (auth()->user()->hasPermission($model.'.active'))
        <a href="{{ route('dashboard.'.$model.'.active', [$param => $item->id]) }}">
            <button type="button"
                class="btn {{ $item->active ? 'btn-success' : 'btn-danger' }} toggle-{{ $model }} waves-effect waves-light"
                data-{{ $model }}-id="{{ $item->id }}">
                <i class="fa-solid {{ $item->active ? 'fa-check' : 'fa-circle-xmark' }}"></i>
            </button>
        </a>
        @else
         <button disabled type="button"
                class="btn {{ $item->active ? 'btn-success' : 'btn-danger' }} toggle-{{ $model }} waves-effect waves-light"
                data-{{ $model }}-id="{{ $item->id }}">
                <i class="fa-solid {{ $item->active ? 'fa-check' : 'fa-circle-xmark' }}"></i>
            </button>
        @endif
</td>
