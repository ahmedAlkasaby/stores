@php
$types = ['index', 'show', 'store', 'update', 'active', 'destroy'];
@endphp

<div class="col-12">
    <h5>@lang('site.permissions')</h5>
    <div class="table-responsive">
        <table class="table table-flush-spacing">
            <thead>
                <tr>

                    <th>
                        <input type="checkbox" class="selectAll form-check-input" />
                        <label class="fw-bold">@lang('site.select_all')</label>
                    </th>
                    {{-- @foreach ($types as $type) --}}
                    <th>
                        <input type="checkbox" class="form-check-input select-type select-read" data-type="index" />
                        <label class="fw-bold">@lang('site.index')</label>
                    </th>

                    {{-- @endforeach --}}

                    <th>
                        <input type="checkbox" class="form-check-input select-type select-show" data-type="show" />
                        <label class="fw-bold">@lang('site.show')</label>
                    </th>
                    <th>
                        <input type="checkbox" class="form-check-input select-type select-create" data-type="store" />
                        <label class="fw-bold">@lang('site.store')</label>
                    </th>
                    <th>
                        <input type="checkbox" class="form-check-input select-type select-edit" data-type="update" />
                        <label class="fw-bold">@lang('site.update')</label>
                    </th>
                    <th>
                        <input type="checkbox" class="form-check-input select-type select-toggle" data-type="active" />
                        <label class="fw-bold">@lang('site.active')</label>
                    </th>
                    <th>
                        <input type="checkbox" class="form-check-input select-type select-delete" data-type="destroy" />
                        <label class="fw-bold">@lang('site.destroy')</label>
                    </th>
                </tr>
            </thead>

            <tbody>


                @foreach ($groupedPermissions as $module => $modulePermissions)
                <tr>
                    <td class="text-nowrap fw-medium">
                        <input type="checkbox" class="form-check-input select-module" data-module="{{ $module }}" />
                        {{ __('site.'.$module) }}
                    </td>

                    @foreach ($types as $type)
                    @php
                    $permission = $modulePermissions->first(function ($perm) use ($type) {
                    return explode('.', $perm->name)[1] === $type;
                    });
                    @endphp
                    <td>
                        @if ($permission)
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" data-type="{{ $type }}"
                                value="{{ $permission->name }}" name="permissions[]" @isset($edit) {{
                                in_array($permission->id, $role->permissions->pluck('id')->toArray()) ? 'checked' : ''
                            }}
                            @endisset
                            />
                            <label class="form-check-label d-flex align-items-center">
                                <span class="text-dark fw-bold">
                                    @lang('site.' . $type)
                                </span>
                            </label>
                        </div>
                        @endif
                    </td>
                    @endforeach
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
