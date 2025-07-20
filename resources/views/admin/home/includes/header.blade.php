<div class="row">
    <div class="col-sm-6 col-lg-3 mb-4">
        <div class="card card-border-shadow-primary">
            <div class="card-body">
                <div class="d-flex align-items-center mb-2 pb-1">
                    <div class="avatar me-2">
                        <span class="avatar-initial rounded bg-label-primary"><i class="ti ti-user ti-md"></i></span>
                    </div>
                    <h4 class="ms-1 mb-0">{{ $users->count() }}</h4>
                </div>
                <p class="mb-1">{{ __('site.users') }}</p>
                <p class="mb-0">
                    <span
                        class="fw-medium me-1">+{{ ($users->where('created_at', '>=', now()->subWeek())->count() / $users->count()) * 100 }}%</span>
                    <small class="text-muted">{{ __('site.since_last_week') }}</small>
                </p>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3 mb-4">
        <div class="card card-border-shadow-warning">
            <div class="card-body">
                <div class="d-flex align-items-center mb-2 pb-1">
                    <div class="avatar me-2">
                        <span class="avatar-initial rounded bg-label-warning"><i
                                class="ti ti-chart-pie-2 ti-sm"></i></span>
                    </div>
                    <h4 class="ms-1 mb-0">{{ $products->count() }}</h4>
                </div>
                <p class="mb-1">{{ __('site.products') }}</p>
                <p class="mb-0">
                    <span
                        class="fw-medium me-1">{{ ($products->where('created_at', '>=', now()->subWeek())->count() / $products->count()) * 100 }}%</span>
                    <small class="text-muted">{{ __('site.since_last_week') }}</small>
                </p>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3 mb-4">
        <div class="card card-border-shadow-danger">
            <div class="card-body">
                <div class="d-flex align-items-center mb-2 pb-1">
                    <div class="avatar me-2">
                        <span class="avatar-initial rounded bg-label-danger"><i class="ti ti-shopping-cart"></i></span>
                    </div>
                    <h4 class="ms-1 mb-0">{{ $orders->count() }}</h4>
                </div>
                <p class="mb-1">{{ __('site.orders') }}</p>
                <p class="mb-0">
                    <span class="fw-medium me-1">+{{ ($orders->where('created_at', '>=', now()->subWeek())->count() / $orders->count()) * 100 }}%</span>
                    <small class="text-muted">{{ __('site.since_last_week') }}</small>
                </p>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3 mb-4">
        <div class="card card-border-shadow-info">
            <div class="card-body">
                <div class="d-flex align-items-center mb-2 pb-1">
                    <div class="avatar me-2">
                        <span class="avatar-initial rounded bg-label-info"><i class="ti ti-currency-dollar ti-sm"></i></span>
                    </div>
                    <h4 class="ms-1 mb-0">{{ $totalProfit }}</h4>
                </div>
                <p class="mb-1">{{ __('site.revenue') }}</p>
                <p class="mb-0">
                    {{-- <span class="fw-medium me-1">+{{ ($orders->where('created_at', '>=', now()->subWeek())->sum('total') / $orders->sum('total')) * 100 }}%</span> --}}
                    <small class="text-muted">{{ __('site.since_last_week') }}</small>
                </p>
            </div>
        </div>
    </div>
</div>
