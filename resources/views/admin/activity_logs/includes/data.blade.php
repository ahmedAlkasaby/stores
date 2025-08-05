<tr>
    <td class="text-lg-center">{{ $activityLog->user->name }}</td>
    <td class="text-lg-center">{{ __('site.'.$activityLog->action) }}</td>
    <td class="text-lg-center">
        @php
        $routeName = 'dashboard.' . $activityLog->findTable() . '.show';
        @endphp

        @if (Route::has($routeName))
        <a href="{{ route($routeName,$activityLog->model_id) }}">
            {{ __('site.'.$activityLog->findTable()) }}
        </a>
        @else
        {{ __('site.'.$activityLog->findTable()) }}
        @endif
    </td>
    <td class="text-lg-center">{{ formatDate($activityLog->created_at) }}</td>
    <td class="text-lg-center">
        @if ($activityLog->action == 'updated')
        @include('admin.activity_logs.includes.changes')
        @endif
    </td>


</tr>