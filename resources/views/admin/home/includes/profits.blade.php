<div class="row">
        <div class="col-12 mb-4">
            <div class="card">

                <div class="card-header d-flex justify-content-between">
                    <div>
                        <h5 class="card-title mb-0">@lang('site.orders')</h5>
                        <small class="text-muted">@lang('site.orders_per_month')</small>
                    </div>
                    <div class="d-sm-flex d-none align-items-center">
                        <h5 class="mb-0 me-3">egp {{ $totalProfit }}</h5>

                    </div>
                </div>

                <div class="card-body" style="position: relative;">
                    <div id="lineChart" style="min-height: 400px;"></div>
                    <div class="resize-triggers">
                        <div class="expand-trigger">
                            <div style="width: 943px; height: 425px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>