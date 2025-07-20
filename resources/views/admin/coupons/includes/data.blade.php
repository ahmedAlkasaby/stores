<tr>
    <td class="text-lg-center">{{ $coupon->name }}</td>
    <td class="text-lg-center">{{ $coupon->code }}</td>
    <td class="text-lg-center">{{ __("'site'.$coupon->type") }}</td>
    <td class="text-lg-center">{{ $coupon->type == 'percent' ? $coupon->Discount . '%' : $coupon->Discount }}</td>
    <td class="text-lg-center">{{ $coupon->type == 'percent' ? $coupon->max_discount . '%' : $coupon->max_discount }}
    </td>
    <td class="text-lg-center">{{ $coupon->min_order ?? __('site.null') }}</td>
    <td class="text-lg-center">{{ $coupon->start_date }} - {{ $coupon->end_date }}</td>


    {{-- image --}}

    {{-- active --}}
    @include('admin.layouts.tables.active', [
        'model' => 'coupons',
        'item' => $coupon,
        'param' => 'coupon',
    ])



    {{-- action --}}
    @include('admin.layouts.tables.actions', [
        'model' => 'coupons',
        'edit' => true,
        'item' => $coupon,
    ])
</tr>

@include('admin.layouts.modals.delete', [
    'id' => $coupon->id,
    'main_name' => 'dashboard.coupons',
    'name' => 'coupon',
    'foreDelete' => $foreDelete ?? false,
])
