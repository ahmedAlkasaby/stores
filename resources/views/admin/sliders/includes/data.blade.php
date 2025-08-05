<tr>
    <td class="text-lg-center">{{ $slider->nameLang() }}</td>
    <td class="text-lg-center">{{ $slider->order_id ?? 0 }}</td>
    <td class="text-lg-center">{{ $slider->product?->nameLang() ?? __('site.null') }}
    </td>
    {{-- image --}}
    <td class="text-lg-center">
        @if ($slider->image)
            <img src="{{ asset($slider->image) }}" alt="{{ $slider->nameLang() }}" class="rounded-circle" width="50"
                height="50">
        @else
            <img src="{{ asset('images/default.png') }}" alt="{{ $slider->nameLang() }}" class="rounded-circle"
                width="50" height="50">
        @endif
    </td>
    {{-- active --}}
    @include('admin.layouts.tables.active', [
        'model' => 'sliders',
        'item' => $slider,
        'param' => 'slider',
    ])



    {{-- action --}}
    @include('admin.layouts.tables.actions', [
        'model' => 'sliders',
        'edit' => true,
        "delete"=>true,
        'show' => true,
        'item' => $slider,
    ])
</tr>

@include('admin.layouts.modals.delete', [
    'id' => $slider->id,
    'main_name' => 'dashboard.sliders',
    'name' => 'slider',
    'foreDelete' => $foreDelete ?? false,
])
