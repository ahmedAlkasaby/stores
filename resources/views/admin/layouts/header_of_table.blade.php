<div class="card-header d-flex flex-wrap py-0 flex-column flex-sm-row justify-content-between mt-4 mb-4">
    <div class="me-5 ms-n2 pe-5">
        <div class="dataTables_filter">
            <form action="{{ route("dashboard.".$model.'.index', array_merge(request()->query(), ['search' =>
                request('search')])) }}" method="get" class="d-flex align-admins-center">
                <input type="search" name="search" class="form-control me-2" placeholder="@lang('site.filter')"
                    aria-controls="DataTables_Table_0" value="{{ request('search') }}" style="flex: 1;">

                @foreach(request()->query() as $key => $value)
                @if ($key !== 'search')
                <!-- استبعاد حقل البحث من التكرار -->
                <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                @endif
                @endforeach
                <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#addNewAddress">
                        Show
                      </button>
            </form>

        </div>
    </div>
    <div class="d-flex align-items-center">


        @if (auth()->user()->hasPermission($model.'.create'))


        <a href="{{ route("dashboard.".$model.'.create') }}"
            class="btn btn-secondary add-new btn-primary ms-2 waves-effect waves-light">
            <span>
                <i class="ti ti-plus me-0 me-sm-1 ti-xs"></i>
                <span class="d-none d-sm-inline-block">@lang("site.new")</span>
            </span>
        </a>

        @else
        <button disabled class="btn btn-secondary add-new btn-primary ms-2 waves-effect waves-light">
            <span>
                <i class="ti ti-plus me-0 me-sm-1 ti-xs"></i>
                <span class="d-none d-sm-inline-block">@lang('site.new')</span>
            </span>
        </button>
        @endif
        @if (!request()->has('deleted')|| request('deleted') === "0")
        <a href="{{ route('dashboard.'.$model.'.index', ['deleted' => 1]) }}"
            class="btn btn-secondary add-new btn-primary ms-2 waves-effect waves-light">
            <span>
                <i class="ti ti-trash me-0 me-sm-1 ti-xs"></i>
                <span class="d-none d-sm-inline-block">@lang('site.deleted')</span>
            </span>
        </a>
        @else
        <a href="{{ route('dashboard.'.$model.'.index') }}"
            class="btn btn-secondary add-new btn-primary ms-2 waves-effect waves-light">
            <span>
                <i class="ti ti-list me-0 me-sm-1 ti-xs"></i>
                <span class="d-none d-sm-inline-block">@lang('site.all')</span>
            </span>
        </a>
        @endif
        @if($filter==true)
        <button type="button" class="btn btn-secondary add-new btn-primary ms-2 waves-effect waves-light"
            data-bs-toggle="modal" data-bs-target="#addNewAddress">{{ __('site.filter') }}</button>

        @endif

    </div>
</div>