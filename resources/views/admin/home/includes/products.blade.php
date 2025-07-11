<div class="col-md-6 col-xl-4 mb-4">
    <div class="card h-100">
        <div class="card-header d-flex justify-content-between">
            <div class="card-title m-0 me-2">
                <h5 class="m-0 me-2">Popular Products</h5>
                <small class="text-muted">Total 10.4k Visitors</small>
            </div>
        </div>
        <div class="card-body">
            <ul class="p-0 m-0">
                @foreach ($newProducts as $product)
                    <li class="d-flex">

                        <div class="me-3">
                            <img src="{{ asset($product->image) }}" alt="{{ $product->namelang() }}" class="rounded"
                                width="46">
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">{{ $product->nameLang() }}</h6>
                                <small class="text-muted d-block">{{ $product->code }} : {{ $product->code }}</small>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                                <p class="mb-0 fw-medium">${{ $product->price }}</p>
                            </div>
                        </div>
                    </li>
                @endforeach

            </ul>
        </div>
    </div>
</div>
