@extends('admin.layouts.app')
@section('title', __('site.products'))

@section('styles')
{{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
    /* تنسيق select2 كأنه form-control (Bootstrap 5) */
    .select2-container .select2-selection--single {
        height: calc(1.5em + 0.75rem + 2px);
        padding: 0.375rem 0.75rem;
        border: 1px solid #ced4da;
        border-radius: 0.375rem;
        background-color: #fff;
        font-size: 1rem;
        line-height: 1.5;
        display: flex;
        align-items: center;
        position: relative;
    }

    /* تنسيق النص داخل السلكت */
    .select2-container--default .select2-selection--single .select2-selection__rendered {
        color: #212529;
        padding: 0;
        line-height: 1.5;
        flex: 1;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    /* إخفاء السهم الأصلي */
    .select2-container--default .select2-selection__arrow {
        display: none;
    }

    /* إضافة سهم يدوي */
    .select2-container--default .select2-selection--single::after {
        content: '';
        position: absolute;
        top: 50%;
        right: 1rem;
        width: 0;
        height: 0;
        pointer-events: none;
        border-left: 5px solid transparent;
        border-right: 5px solid transparent;
        border-top: 5px solid #6c757d;
        transform: translateY(-50%);
    }

    /* دعم RTL */
    [dir="rtl"] .select2-container--default .select2-selection--single {
        padding-left: 0.75rem;
        padding-right: 2rem;
    }

    [dir="rtl"] .select2-container--default .select2-selection--single::after {
        left: 1rem;
        right: auto;
    }
</style> --}}
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/select2/select2.css') }}" />


@endsection


@section('content')
<div class="container py-5">
    <h3 class="mb-4">Test Repeater</h3>

    <form class="form-repeater">
        <div data-repeater-list="items">
            <div data-repeater-item class="row mb-3">
                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    @include('admin.layouts.forms.fields.select', [
                    'select_name' => 'size_id',
                    'select_function' => ['' => __('site.select_option')] + $sizes->mapWithKeys(fn($size) =>
                    [$size->id => $size->nameLang()])->toArray() ?? null,
                    'select_value' => $product->size_id ?? null,
                    'select_class' => 'select2',
                    'select2' => true,
                    'label_req' => true,
                    ])
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    @include('admin.layouts.forms.fields.number', [
                    'number_name' => 'amount',
                    'min' => 0,
                    'placeholder' => __('site.amount'),
                    'number_value' => $product->amount ?? null,
                    'label_req' => true,
                    ])
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    @include('admin.layouts.forms.fields.select', [
                    'select_name' => 'offer',
                    'select_function' =>['' => __('site.select_option')] + booleantype(),
                    'select_value' => $product->offer ?? null,
                    'select_class' => 'select2',
                    'select2' => true,
                    ])
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    @include('admin.layouts.forms.fields.number', [
                    'number_name' => 'offer_price',
                    'min' => 0,
                    'placeholder' => __('site.offer_price'),
                    'number_value' => $product->offer_price ?? null,
                    'not_req' => true,
                    ])
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    @include('admin.layouts.forms.fields.number', [
                    'number_name' => 'offer_amount',
                    'min' => 0,
                    'placeholder' => __('site.offer_amount'),
                    'number_value' => $product->offer_amount ?? null,
                    'not_req' => true,
                    ])
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    @include('admin.layouts.forms.fields.number', [
                    'number_name' => 'offer_percent',
                    'min' => 0,
                    'placeholder' => __('site.offer_percent'),
                    'number_value' => $product->offer_percent ?? null,
                    'not_req' => true,
                    ])
                </div>

                <div class="col-auto d-flex mt-auto align-self-end">
                    <button class="btn btn-danger" data-repeater-delete type="button">
                        {{ __('site.delete') }}
                    </button>
                </div>

            </div>


        </div>

        <button data-repeater-create type="button" class="btn btn-primary mt-3">
            Add Item
        </button>
    </form>
</div>
@endsection



@section('jsFiles')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection


@section('mainFiles')
<script>
    $(document).ready(function () {
        $('.form-repeater').repeater({
            initEmpty: true,
            show: function () {
                $(this).slideDown();

                // Re-init select2 inside newly added item
                $(this).find('.select2').select2({
                    dropdownParent: $('body'),

                });
            },
            hide: function (deleteElement) {
                if (confirm('Are you sure you want to delete this item?')) {
                    $(this).slideUp(deleteElement);
                }
            }
        });

        // Init select2 on first load
        $('.select2').select2({
            dropdownParent: $('body'),
            width: '100%' // مهم جداً عشان يبقى زي form-control
        });
    });
</script>

@endsection



