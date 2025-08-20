<tr>

    <td class="text-lg-center">{{ getTableName($trashBucket->model_type) }}</td>
    <td class="text-lg-center">{{ $trashBucket->model->namelang() ?? __('site.null') }}</td>
    <td class="text-lg-center">{{ $trashBucket->user->name }}</td>

    <td class="text-lg-center">{{ formatDate($trashBucket->created_at) }}</td>
    <td class="text-lg-center">
        <div class="dropdown">
            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                <i class="ti ti-dots-vertical"></i>
            </button>
            <div class="dropdown-menu">
                <li>
                    <a class="dropdown-item" href="/dashboard/trash_buckets/restore/{{ $trashBucket->id }}">
                        <i class="ti ti-pencil me-1"></i> @lang('site.restore')
                    </a>
                </li>
            </div>
        </div>
    </td>



</tr>
