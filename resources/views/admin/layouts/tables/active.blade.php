@php
    $function = $function ?? 'active';
@endphp


 <td >
        @if (auth()->user()->hasPermission($model.'.active'))
            <button type="button"
                class="btn {{ $item->active ? 'btn-success' : 'btn-danger' }} {{ $function }}-{{ $model }} waves-effect waves-light"
                data-{{ $model }}-id="{{ $item->id }}"
                data-url="{{ route('dashboard.'.$model.'.active', [$param => $item->id]) }}">

                <i class="fa-solid {{ $item->active ? 'fa-check' : 'fa-circle-xmark' }}"></i>
            </button>
        @else
         <button disabled type="button"
                class="btn {{ $item->active ? 'btn-success' : 'btn-danger' }}">
                <i class="fa-solid {{ $item->active ? 'fa-check' : 'fa-circle-xmark' }}"></i>
            </button>
        @endif
</td>
