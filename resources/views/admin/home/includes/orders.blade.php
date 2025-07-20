        <div class="col-lg-6 col-xxl-4 mb-4 order-2 order-xxl-2">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between mb-2">
                    <div class="card-title mb-0">
                        <h5 class="m-0 me-2">{{ __('site.order_details') }}</h5>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="p-0 m-0">
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-primary"><i class="ti ti-package"></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0 fw-normal">{{ __("site.request") }}</h6>
     
                                </div>
                                <div class="user-progress">
                                    <h6 class="mb-0">{{$orders->where('status', \App\Enums\StatusOrderEnum::Request)->count()}}</h6>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-info"><i class="ti ti-truck"></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0 fw-normal">{{ __("site.pending") }}</h6>
     
                                </div>
                                <div class="user-progress">
                                    <h6 class="mb-0">{{$orders->where('status', \App\Enums\StatusOrderEnum::Pending)->count()}}</h6>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-success"><i
                                        class="ti ti-circle-check"></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0 fw-normal">{{ __("site.approved") }}</h6>

                                </div>
                                <div class="user-progress">
                                    <h6 class="mb-0">{{$orders->where('status', \App\Enums\StatusOrderEnum::Approved)->count()}}</h6>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-warning"><i
                                        class="ti ti-percentage"></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0 fw-normal">{{ __("site.rejected") }}</h6>
     
                                </div>
                                <div class="user-progress">
                                    <h6 class="mb-0">{{$orders->where('status', \App\Enums\StatusOrderEnum::Rejected)->count()}}</h6>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-secondary"><i class="ti ti-clock"></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0 fw-normal">{{ __("site.preparing") }}</h6>

                                </div>
                                <div class="user-progress">
                                    <h6 class="mb-0">{{$orders->where('status', \App\Enums\StatusOrderEnum::Preparing)->count()}}</h6>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-danger"><i class="ti ti-users"></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0 fw-normal">{{ __("site.preparingFinished") }}</h6>
     
                                </div>
                                <div class="user-progress">
                                    <h6 class="mb-0">{{$orders->where('status', \App\Enums\StatusOrderEnum::PreparingFinished)->count()}}</h6>
                                </div>
                            </div>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>